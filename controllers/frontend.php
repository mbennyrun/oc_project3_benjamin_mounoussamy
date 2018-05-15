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
