<?php $title = 'Affichage d\'erreur';
ob_start(); ?>

<div class="container main-section">
    <div class="row text-center">
        <div class="col">
            <h4 class="main-color"> <strong> Votre message à bien été envoyer </strong> </h1>

            <a href=index.php> <input type="button" id="button" value="Retour à l'acceuil"/> </a>
        </div>
    </div>
</div>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>