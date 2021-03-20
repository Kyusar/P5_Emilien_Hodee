<?php 
$title = "Bienvenue dans le tombeau";

ob_start();
?>

    <div class="container-fluid">
        <div class="row first-section text-center align-items-center">
            <div class="col motto">
                " Evolue et Domine "
            </div> 
        </div>
        <div class="row second-section text-center align-items-center">
            <div class="col-4 offset-2 front-card">
                <h3 class="secondary-title main-shade-color-bright"> Notre projet </h3>
                <p> Apprenez-en plus sur les objectifs ainsi que sur l'histoire de Nazarick </p>
                <button type="button" class="btn btn-color"> En savoir-plus </button>
            </div>
        </div> 
        <div class="row third-section text-center align-items-center">
            <div class="col-4 offset-6 front-card">
                <h3 class="secondary-title main-shade-color-bright"> Les heteromorphes </h3>
                <p> Découvrez toute l'équipe de Nazarick ! </p>
                <button type="button" class="btn btn-color"> En savoir-plus </button>
            </div> 
        </div>
    </div>



<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>