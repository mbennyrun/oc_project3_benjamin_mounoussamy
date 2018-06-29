<?php $title = 'Liste des Posts'; ?>

<?php ob_start(); ?>
<h1>Derniers Chapitres</h1>

<p><a href="index.php?action=listAllposts">Voir plus de Chapitres</a></p>

<div class="content">
	<?php
	if ( !empty($Listposts) ) {
		while ($data = $Listposts->fetch())
		{
		?>
		    <h3>
		        <a href="index.php?action=post&amp;id=<?=$data['id']?>"> <?= $data['title'] ?>
		        <em>le <?= $data['date_create_fr'] ?></em></a>
		    </h3>
		    
		    <div class="chapter">
		        <?= nl2br($data['content']) ?>
		    </div>
		    <p><a href="index.php?action=post&amp;id=<?=$data['id']?>"> Lire la suite...</a></p>
			<?php
		}
	} 
	else {
		?>
		<p>Aucun enregistrement trouvé</p>
		<?php
	}
	?>
	<br />
	

</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
