<?php $title = 'Liste des Posts'; ?>

<?php ob_start(); ?>
<h1>Mon super blog !</h1>

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
		        <a href="index.php?action=post&amp;id=<?=$data['id']?>"> <?= htmlspecialchars($data['title']) ?>
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
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
