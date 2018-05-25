<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>
<h1>Mon super blog !</h1>
<p><a href="admin.php">Retour à la liste des billets</a></p>

<div class="news">
    <h2>
        <?= htmlspecialchars($post['title']) ?>
        <em>le <?= $post['date_create_fr'] ?></em>
    </h2>
    
    <p>
        <?= nl2br(htmlspecialchars($post['content'])) ?>
    </p>

    <h3>Modifier l'Article</h3>

        <form action="admin.php?action=editPost&id=<?= $post['id'] ?>" method="post">
            <p>
            <label for="title">Titre</label> : <input type="text" name="title" id="title" value="<?= htmlspecialchars($post['title']) ?>" /> <br /><br />
            <textarea name="content" id="content"><?= nl2br(htmlspecialchars($post['content'])) ?></textarea><br /><br />
            <input type="submit" value="Modifier l'Article" />
            </p>
        </form>

    <h3>Supprimer l'Article</h3>

        <form action="admin.php?action=delPost&id=<?= $post['id'] ?>" method="post">
            <p>
            <input type="submit" value="Supprimer l'Article" />
            </p>
        </form>

</div>

<h2>Commentaires</h2>

<?php
while ($flagcomment = $flagcomments->fetch())
{
?>
    <p><em><strong><?= htmlspecialchars($flagcomment['author']) ?></strong> le <?= $flagcomment['comment_date_fr'] ?></p>
    <p><?= nl2br(htmlspecialchars($flagcomment['comment'])) ?></em></p>
    <form action="admin.php?action=unflag&idComment=<?= $flagcomment['id'] ?>&idPost=<?=$post['id'] ?>" method="post">
        <p>
        <input type="submit" value="Désignaler le Commentaire" />
        </p>
    </form>
    <form action="admin.php?action=delComment&idComment=<?= $flagcomment['id'] ?>&idPost=<?=$post['id'] ?>" method="post">
        <p>
        <input type="submit" value="Supprimer le Commentaire" />
        </p>
    </form>

<?php
}
?>

<br /><br/>

<?php
while ($comment = $comments->fetch())
{
?>
    <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
    <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
<?php
}
?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
