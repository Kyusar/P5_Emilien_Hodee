<?php 
$title = "Rejoindre le tombeau";

ob_start();
?>

<div class="container main-section">
    <div class="row text-center">
        <div class="col main-shade-color-bright">
            <h3> Pour postuler veuillez remplir les champs ci-dessous : </h3>
        </div>
    </div>
    <form method="post" action="#">
        <div class="form-group">
            <label for="pseudo">Pseudo</label>
            <input type="text" class="form-control" id="pseudo" placeholder="Votre pseudo">
        </div>
        <div class="form-group">
            <label for="mail">Adresse Email</label>
            <input type="email" class="form-control" id="mail" placeholder="nom@example.com">
        </div>
        <div class="form-group">
            <label for="timeIG">Temps de jeu <em class="muted"> (Heure/jour) <em> </label>
            <select class="form-control" id="timeIG">
            <option>1 - 2</option>
            <option>3 - 4</option>
            <option>5 - 6</option>
            <option>7 - 8</option>
            <option>8</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Experiences</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Mon expérience"></textarea>
        </div>
        <div class="form-group">
            <label for="ambition">Vos ambitions</label>
            <textarea class="form-control" id="ambition" rows="3" placeholder="Mes ambitions"></textarea>
        </div>
        <div class="form-group text-center">
            <input type="submit" value="Envoyer"  class="btn apply-submit btn-color">
        </div>
    </form>
</div>



<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>