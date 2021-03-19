<?php $title = 'Affichage d\'erreur';
$main_title="Allée du concierge";
ob_start(); ?>

<h1> Albedo à enccore tout cassé ! </h1>
<p> Le problème défini par le majordome est : <br /><br />

<strong><?= $errorMessage; ?></strong>
</p>
<a href=javascript:history.go(-1)> <input type="button" id="button" value="Revenir à la page précédente"/> </a>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>