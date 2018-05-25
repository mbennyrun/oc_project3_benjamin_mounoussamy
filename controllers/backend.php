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
    $Flagcomment = new PostsManager();
    $Comment = new PostsManager();
    $Post = new PostsManager();

    $comments = $Comment->noflaggedComments($_GET['id']);
    $flagcomments = $Flagcomment->flaggedComments($_GET['id']);
    $post = $Post->getPost($_GET['id']);
    require(ABSOLUTE_PATH.'/views/backend/adminPostView.php');
}

function unflag()
{
	$Unflag = new PostsManager();
	$unflag = $Unflag->unflagComment($_GET['idComment']);
    header('Location: admin.php?action=post&id=' . $_GET['idPost']);
}

function delComment($postId)
{
	$Deadcomment = new PostsManager();
	$deadcomment = $Deadcomment->deleteComment($_GET['idComment']);
	header('Location: admin.php?action=post&id=' . $_GET['idPost']);	
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
	$Deadallcomment = new PostsManager();

	$deadpost = $Deadpost->deletePost($postId);
	$deadallcomment = $Deadallcomment->deleteAllcomment($postId);	
	header('Location: admin.php');
}
