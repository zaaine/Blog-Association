<?php $title = "Le blog de l'AS Volley Club"; ?>

<?php ob_start(); ?>
<h1>Le super blog de l'AS Volley Club !</h1>
<p>Une erreur est survenue : <?= $errorMessage ?></p>
<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>