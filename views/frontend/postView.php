<?php $title = $post['title']; ?>

<?php ob_start(); ?>

<div class="news">

    <h1>
        <?= $post['title'] ?> <em>le <?= $post['date_create_fr'] ?></em>
    </h1>
    
    <p><a href="index.php">Retour à la liste des billets</a></p><br />

    <p>
        <?= nl2br($post['content']) ?>
    </p>

</div>

<h2>Commentaires</h2>

<div class="comments">

    <?php
    while ($comment = $comments->fetch())
    {
    ?>
        <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
        <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
        <form action="index.php?action=flag&idComment=<?= $comment['id'] ?>&idPost=<?=$post['id'] ?>" method="post">
        	<input type="submit" value="Signaler le commentaire">
        </form><br />
    <?php
    }
    ?>

    <form action="index.php?action=newComment&amp;id=<?= $post['id'] ?>" method="post">
            <p>
            <label for="author">Pseudo*</label> : <input type="text" name="author" id="author" /><br />
            <label for="comment">Message*</label> :  <textarea name="comment" id="comment" ></textarea><br />
            <input type="submit" value="Envoyer" />
    		</p>
    </form>

</div>

<p>* Champs obligatoires</p>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
