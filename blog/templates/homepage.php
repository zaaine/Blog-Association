<?php $title = "Le blog de l'AVBN"; ?>

<?php ob_start(); ?>
<h1>AS Volley Club!</h1>
<img src="src/assets/AVBN.jpg" alt="team-volley" class="picture">
<p>Dernières nouvelles du club :</p>

<?php
foreach ($posts as $post) {
    ?>
    <div class="news">
        <h3>
            <?= htmlspecialchars($post->title); ?>
            <em>le <?= $post->frenchCreationDate; ?></em>
        </h3>
        <p>
            <?= nl2br(htmlspecialchars($post->content)); ?>
            <br />
            <em><a href="index.php?action=post&id=<?= urlencode($post->identifier) ?>">Commentaires</a></em>
        </p>
    </div>
<?php
}
?>
<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>