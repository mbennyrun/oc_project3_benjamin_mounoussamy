<?php


function homepage()
{
	Manager::checkSessionAndRedirect();
	$Post 		= new PostsManager();
    $Listposts = $Post->getAllposts();
	require(ABSOLUTE_PATH.'/views/backend/adminView.php');
}

function listPosts()
{
	Manager::checkSessionAndRedirect();
	$Post 		= new PostsManager();
    $Listposts = $Post->getAllposts();
	require(ABSOLUTE_PATH.'/views/backend/adminView.php');
}

function post()
{
	Manager::checkSessionAndRedirect();
	if ( !empty($_GET['id']) ) {
		
	    $Flagcomment = new PostsManager();
	    $Comment = new PostsManager();
	    $Post = new PostsManager();

	    $comments = $Comment->noflaggedComments($_GET['id']);
	    $flagcomments = $Flagcomment->flaggedComments($_GET['id']);
	    $post = $Post->getPost($_GET['id']);
	    require(ABSOLUTE_PATH.'/views/backend/adminPostView.php');
	} 
	else {
		 echo 'Erreur : aucun identifiant de billet envoyé';
		// redirection sur une page ou message d'erreur
	}
}

function unflag()
{
	Manager::checkSessionAndRedirect();
	if (! empty($_GET['idComment']) && ! empty($_GET['idPost'])) {

		$Unflag = new PostsManager();

		$unflag = $Unflag->unflagComment($_GET['idComment']);
	    header('Location: admin.php?action=post&id=' . $_GET['idPost']);
	}
	else {
		echo 'Erreur : Aucun commentaire signalé';
	}
}

function delComment()
{
	Manager::checkSessionAndRedirect();
	if (! empty($_GET['idComment']) && ! empty($_GET['idPost'])) {

		$postId 	 = $_GET['idPost'];

		$Deadcomment = new PostsManager();

		$deadcomment = $Deadcomment->deleteComment($_GET['idComment']);
		header('Location: admin.php?action=post&id=' . $_GET['idPost']);	
	}
	else {
		 echo 'Erreur : Aucun commentaire à supprimé';
	}
}

function newPost()
{
	Manager::checkSessionAndRedirect();
	if (! empty($_POST['title']) && ! empty($_POST['content'])) {

		$title   = $_POST['title'];
		$content = $_POST['content'];

		$Newpost = new PostsManager();

		$newpost = $Newpost->addPost($title, $content);
		header('Location: admin.php');
	}
	else {
		echo 'Erreur : tous les champs ne sont pas remplis !';
	}
}

function editPost()
{
	Manager::checkSessionAndRedirect();
	if ( ! empty($_GET['id']) && ! empty($_POST['title']) && ! empty($_POST['content'])) {

		$postId  = $_GET['id'];
		$title   = $_POST['title'];
		$content = $_POST['content'];

		$Editpost = new PostsManager();

		$editpost = $Editpost->updatePost($postId, $title, $content);
		header('Location: admin.php?action=post&id=' . $postId);
	}
	else {
		echo 'Erreur : tous les champs ne sont pas remplis !';
	}
}


function delPost()
{
	Manager::checkSessionAndRedirect();

	if ( ! empty($_GET['id']) ) {

		$postId 		= $_GET['id'];

		$Deadpost 		= new PostsManager();
		$Deadallcomment = new PostsManager();

		$deadpost = $Deadpost->deletePost($postId);
		$deadallcomment = $Deadallcomment->deleteAllcomment($postId);	
		header('Location: admin.php');
	}
	else {
        echo 'Erreur : aucun identifiant de billet envoyé';
 	}
}

function formConnect()
{
	require(ABSOLUTE_PATH.'/views/frontend/connectionView.php');
}

function submitFormConnect()
{
	$login 	  = strip_tags($_POST['login']);
	$password = strip_tags($_POST['password']);

	$Connect = new PostsManager();

	$connect = $Connect->connect($login, $password);
    if(!empty($connect)) {
		$_SESSION['user'] = $connect['login'];
    	header('Location: admin.php');
    }
    else {
    	header('Location: admin.php?action=formConnect');
    }
}

function disconnect()
{
	Manager::checkSessionAndRedirect();
	session_destroy();
	header('Location: admin.php?action=formConnect');
}