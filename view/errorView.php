<?php $title = 'Affichage d\'erreur';
ob_start(); ?>

<div class="container main-section">
    <div class="row text-center">
        <div class="col">
            <h4 class="main-color"> <strong> Albedo à encore tout cassé ! </strong> </h1>
            <p> Le problème défini par le majordome est : <br /><br />

            <strong><?= $errorMessage; ?></strong>
            </p>
            <a href=javascript:history.go(-1)> <input type="button" id="button" value="Revenir à la page précédente"/> </a>
        </div>
    </div>
</div>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>