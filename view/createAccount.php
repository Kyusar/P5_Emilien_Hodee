<?php 
$title = "Création de compte";

ob_start();
?>
<script src="public/js/verifPass.js"></script>
<div class="container main-section">
    <div class="row text-center">
        <div class="col main-shade-color-bright">
            <h3> Creer un compte </h3>
        </div>
    </div>
    <form method="post" action="index.php?action=addNewUser">
        <div class="form-group">
            <label for="pseudo">Pseudo</label>
            <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Votre pseudo">
        </div>
        <div class="form-group">
            <label for="pass1">Mot de passe</label>
            <input type="password" class="form-control" id="pass1" name="pass1"placeholder="Votre mot de passe">
        </div>
        <div class="form-group">
            <label for="pass2">Confirmer le mot de passe</label>
            <input type="password" class="form-control" id="pass2" name="pass2" placeholder="Confirmer votre mot de passe" onblur="checkMdp()">
            <div id="mdpalert"></div>
        </div>
        <div class="form-group text-center">
            <input type="submit" value="Validé" class="btn apply-submit btn-color">
        </div>
    </form>
</div>



<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>