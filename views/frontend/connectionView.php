<?php $title = 'Connexion'; ?>

<?php ob_start(); ?>

<h1>Connexion</h1>

<div class="connection">

<form action="admin.php?action=submitFormConnect" method="post">
	<p>
	<label>Pseudo*</label> <input type="text" name="login" /><br />
	 
	<label>Mot de passe*</label> <input type="password" name="password" /><br /><br />
	 
	<input type="submit" value="Connexion" />
	</p>
</form>

</div>

<p>* Champs obligatoires</p>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
