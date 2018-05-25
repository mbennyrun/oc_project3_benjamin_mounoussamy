<?php $title = 'Administration'; ?>

<?php ob_start(); ?>
<h1>Administration</h1>

<div class="news">
    <h3>
        Liste des posts
    </h3>    
</div>

<div class="content">
	<?php
	if ( !empty($Listposts) ) {
		while ($data = $Listposts->fetch())
		{
		?>
		    <h3>
		        <a href="admin.php?action=post&amp;id=<?=$data['id']?>"> <?= htmlspecialchars($data['title']) ?>
		        <em>le <?= $data['date_create_fr'] ?></em></a>
		    </h3>
		    
		    <p>
		        <?= nl2br(htmlspecialchars($data['content'])) ?>
		    </p>
			<?php
		}
	} 
	else {
		?>
		<p>Aucun enregistrement trouvé</p>
		<?php
	}
	?>

	<h1>Ajouter un Article</h1>

	  <form action="admin.php?action=newPost" method="post">
	  	<p>
	  	<label for="title">Titre</label> : <input type="text" name="title" id="title" /> <br /><br />
	    <textarea name="content" id="content"></textarea><br /><br />
	    <input type="submit" value="Publier l'Article" />
		</p>
	  </form>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
