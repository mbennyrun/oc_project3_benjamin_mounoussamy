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

function listAllposts()
{
	$Post 		= new PostsManager();
    $Listallposts = $Post->getAllposts();
	require(ABSOLUTE_PATH.'/views/frontend/postsView.php');
}

function post()
{
    if ( !empty($_GET['id']) ) {

    $Comment = new PostsManager();
    $Post = new PostsManager();

    $post = $Post->getPost($_GET['id']);
    $comments = $Comment->getComments($_GET['id']);
    require(ABSOLUTE_PATH.'/views/frontend/postView.php');
	}
	else{
		echo 'Erreur : aucun identifiant de billet envoyé';
	}
}

function flag()
{
	if (!empty($_GET['idComment']) && !empty($_GET['idPost'])) {

	$Flag = new PostsManager();

	$flag = $Flag->flagComment($_GET['idComment']);
    header('Location: index.php?action=post&id=' . $_GET['idPost']);
	}
	else{
		echo 'Erreur : Aucun commentaire à signalé';
	}
}

function newComment()
{
	if ( !empty($_GET['id']) ) {
		if (!empty($_POST['author']) && !empty($_POST['comment'])) {

			$postId  = $_GET['id'];
			$author  = $_POST['author'];
			$comment = $_POST['comment'];

			$Newcomment = new PostsManager();

			$newcomment = $Newcomment->addComment($postId, $author, $comment);
			header('Location: index.php?action=post&id=' . $postId);
		}
		else{
			echo 'Erreur : tous les champs ne sont pas remplis !';
		}
	}
	else{
		echo 'Erreur : aucun identifiant de billet envoyé';
	}
}

function connection()
{
	require(ABSOLUTE_PATH.'/views/frontend/connectionView.php');
}

