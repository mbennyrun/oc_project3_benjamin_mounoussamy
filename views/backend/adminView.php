<?php $title = 'Administration'; ?>

<?php ob_start(); ?>
<h1>Administration</h1>

<p><a href="admin.php?action=disconnect">Déconnexion</a></p><br />


<div class="news">
    <h2>
        Chapitres
    </h2>    
</div>

<div class="content">
	<?php
	if ( !empty($Listposts) ) {
		while ($data = $Listposts->fetch())
		{
		?>
		    <h3>
		        <a href="admin.php?action=post&amp;id=<?=$data['id']?>"> <?= $data['title'] ?>
		        <em>le <?= $data['date_create_fr'] ?></em></a>
		    </h3>
		    
		    <div class="chapter">
		        <?= nl2br($data['content']) ?>
		    </div>
			<?php
		}
	} 
	else {
		?>
		<p>Aucun enregistrement trouvé</p>
		<?php
	}
	?>

	<h2>Ajouter un Chapitre</h2>

	  <form class="title" action="admin.php?action=newPost" method="post">
	  	<p>
	  	<label for="title">Titre</label> : <input type="text" name="title" id="title" /> <br /><br />
	    <textarea name="content" id="content"></textarea><br /><br />
	    <input type="submit" value="Publier l'Article" />
		</p>
	  </form>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
