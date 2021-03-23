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
    <form method="post" action="#" class="container-glow" id="test-form">
        <div class="form-group">
            <label for="pseudo">Pseudo</label>
            <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Votre pseudo">
        </div>
        <div class="form-group">
            <label for="mail">Adresse Email</label>
            <input type="email" class="form-control" id="mail" name="mail" placeholder="nom@example.com">
        </div>
        <div class="form-group">
            <label for="timeIG">Temps de jeu <em class="muted"> (Heure/jour) <em> </label>
            <select class="form-control" id="timeIG" name="IGtime">
            <option>1 - 2</option>
            <option>3 - 4</option>
            <option>5 - 6</option>
            <option>7 - 8</option>
            <option>8</option>
            </select>
        </div>
        <div class="form-group">
            <label for="experience">Experiences</label>
            <textarea class="form-control" id="experience" name="experience" rows="3" placeholder="Mon expérience"></textarea>
        </div>
        <div class="form-group">
            <label for="ambition">Vos ambitions</label>
            <textarea class="form-control" id="ambition" name="ambition" rows="3" placeholder="Mes ambitions"></textarea>
        </div>
        <div class="form-group text-center">
            <input type="submit" value="Envoyer"  class="btn apply-submit btn-color" id="submit-form">
        </div>
    </form>
</div>

<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="./jquery.serializeObject.min.js"></script> -->


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>