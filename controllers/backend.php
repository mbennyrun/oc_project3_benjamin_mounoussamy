<?php


function homepage()
{
	$Post 		= new PostsManager();
    $Listposts = $Post->getAllposts();
	require(ABSOLUTE_PATH.'/views/backend/adminView.php');
}

function listPosts()
{
	$Post 		= new PostsManager();
    $Listposts = $Post->getAllposts();
	require(ABSOLUTE_PATH.'/views/backend/adminView.php');
}

function post()
{
    $Post = new PostsManager();
    $post = $Post->getPost($_GET['id']);
    require(ABSOLUTE_PATH.'/views/backend/adminPostView.php');
}

function newPost($title, $content)
{
	$Newpost = new PostsManager();
	$newpost = $Newpost->addPost($title, $content);
	header('Location: admin.php');
}

function editPost($postId, $title, $content)
{
	$Editpost = new PostsManager();
	$editpost = $Editpost->updatePost($postId, $title, $content);
	header('Location: admin.php?action=post&id=' . $postId);
}

function delPost($postId)
{
	$Deadpost = new PostsManager();
	$deadpost = $Deadpost->deletePost($postId);
	header('Location: admin.php');
}
