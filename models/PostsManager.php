<?php
class PostsManager extends Manager
{
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(date_create, \'%d/%m/%Y à %Hh%imin%ss\') AS date_create_fr FROM posts ORDER BY date_create DESC LIMIT 0, 5');

        return $req;
    }
}