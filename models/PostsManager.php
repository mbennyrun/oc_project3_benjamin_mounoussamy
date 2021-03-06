<?php

class PostsManager extends Manager
{
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(date_create, \'%d/%m/%Y à %Hh%imin%ss\') AS date_create_fr FROM posts ORDER BY date_create DESC LIMIT 0, 3');

        return $req;
    }

    public function getAllposts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(date_create, \'%d/%m/%Y à %Hh%imin%ss\') AS date_create_fr FROM posts ORDER BY date_create DESC');

        return $req;
    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(date_create, \'%d/%m/%Y à %Hh%imin%ss\') AS date_create_fr FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }

    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr, comment_flag FROM posts_comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    public function flagComment($postId)
    {            
        $db = $this->dbConnect();
        $flag = $db->prepare('UPDATE posts_comments SET comment_flag = 1 WHERE id = ?');
        $success = $flag->execute(array($postId));

        return $success;
    }

    public function addComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $newcomment = $db->prepare('INSERT INTO posts_comments (post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $result = $newcomment->execute(array($postId, $author, $comment));

        return $newcomment;
    }

    public function flaggedComments($postId)
    {
        $db = $this->dbConnect();
        $flaggedcomment = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr, comment_flag FROM posts_comments WHERE post_id = ? AND comment_flag = 1 ORDER BY comment_date DESC');
        $flaggedcomment->execute(array($postId));

        return $flaggedcomment; 
    }

    public function noflaggedComments($postId)
    {
        $db = $this->dbConnect();
        $flaggedcomment = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr, comment_flag FROM posts_comments WHERE post_id = ? AND comment_flag = 0 ORDER BY comment_date DESC');
        $flaggedcomment->execute(array($postId));

        return $flaggedcomment; 
    }

    public function unflagComment($postId)
    {            
        $db = $this->dbConnect();
        $unflag = $db->prepare('UPDATE posts_comments SET comment_flag = 0 WHERE id = ?');
        $unflag->execute(array($postId));

        return $unflag;
    }

    public function deleteComment($postId)
    {
        $db = $this->dbConnect();
        $deadcomment = $db->prepare('DELETE FROM posts_comments WHERE id = ?');
        $deadcomment->execute(array($postId));

        return $deadcomment;    
    }

    public function addPost($title, $content)
    {
        $db = $this->dbConnect();
        $newpost = $db->prepare('INSERT INTO posts (title, content, date_create) VALUES(?, ?, NOW())');
        $result = $newpost->execute(array($title, $content));

        return $newpost;
    }

    public function updatePost($postId, $title, $content)
    {
        $db = $this->dbConnect();
        $editpost = $db->prepare('UPDATE posts SET title = ?, content = ? WHERE id = ?');
        $editpost->execute(array($title, $content, $postId));
        
        return $editpost;
    }

    public function deletePost($postId)
    {
        $db = $this->dbConnect();
        $deadpost = $db->prepare('DELETE FROM posts WHERE id = ?');
        $deadpost->execute(array($postId));

        return $deadpost;    
    }

    public function deleteAllcomment($postId)
    {
        $db = $this->dbConnect();
        $deadallcomment = $db->prepare('DELETE FROM posts_comments WHERE post_id = ?');
        $deadallcomment->execute(array($postId));

        return $deadallcomment;
    }

    public function connect($login, $password)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT login, password FROM connection WHERE login = ?');
        $req->execute(array($login));
        $dataUser = $req->fetch(PDO::FETCH_ASSOC);
        if ($dataUser) {
            $verPass  = password_verify($password, $dataUser["password"]);
            if ($verPass == true) {
                return $dataUser;
            }  
        }
        return false;         
    }
}