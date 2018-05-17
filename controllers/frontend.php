<?php


function homepage()
{
	$Post 		= new PostsManager();
    $Listposts = $Post->getPosts();
	require(ABSOLUTE_PATH.'/views/frontend/listPostsView.php');
}

function listPosts()
{
	$Post 		= new PostsManager();
    $Listposts = $Post->getPosts();
	require(ABSOLUTE_PATH.'/views/frontend/listPostsView.php');
}

function post()
{
    $Comment = new PostsManager();
    $Post = new PostsManager();

    $post = $Post->getPost($_GET['id']);
    $comments = $Comment->getComments($_GET['id']);
    require(ABSOLUTE_PATH.'/views/frontend/postView.php');
}

function newComment($postId, $author, $comment)
{
    $Newcomment = new PostsManager();
    $newcomment = $Newcomment->addComment($postId, $author, $comment);
    header('Location: index.php?action=post&id=' . $postId);
}