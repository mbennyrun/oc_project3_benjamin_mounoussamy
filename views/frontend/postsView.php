<?php $title = 'Liste des Posts'; ?>

<?php ob_start(); ?>
<h1>Chapitres</h1>
<p><a href="index.php">Retour à l'Accueil</a></p>

<div class="content">
	<?php
	if ( !empty($Listallposts) ) {
		while ($data = $Listallposts->fetch())
		{
		?>
		    <h3>
		        <a href="index.php?action=post&amp;id=<?=$data['id']?>"> <?= $data['title'] ?>
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
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
