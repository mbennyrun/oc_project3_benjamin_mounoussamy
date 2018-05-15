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