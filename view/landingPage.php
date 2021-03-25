<?php 
$title = "Bienvenue dans le tombeau";

ob_start();
?>

        <div class="bg-image main-section align-items-center">
            <div class="col text-center">
                <h2 class="motto">
                    " Evolue et Domine "
                </h2> 
            </div>
        </div>
    <div class="container p-3">
        <div class="row second-section text-center">
            <div class="col">
                <h3 class="secondary-title main-shade-color-bright"> Code d'honneur </h3>
            </div>
            <div class="row text-center justify-content-around align-items-center">
                <div class="col-lg-3 col-sm-8 container-glow">
                    <h4 class="main-color"><strong>Préparation</strong></h4>
                    <p class="text-bio text-justify"> Nous nous dévouons à creer une logistique interne qui permet à tout les membres de posséder de toute les outils nécessaire à lévolution in-game ! </p>
                </div>
                <div class="col-lg-3 col-sm-8 container-glow">
                    <h4 class="main-color"><strong>Exécution</strong></h4>
                    <p class="text-bio text-justify"> Nous faisons tout ce que nous pouvons afin d'éxécuter des plans d'action </p>
                </div>
                <div class="col-lg-3 col-sm-8 container-glow">
                    <h4 class="main-color"><strong>Domination</strong></h4>
                    <p class="text-bio text-justify"> Apprenez-en plus sur les objectifs ainsi que sur l'histoire de Nazarick </p>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col">
                <button type="button" class="btn btn-color"> En savoir-plus </button>
            </div>
        </div>
        
        <div class="row third-section text-center align-items-center p-3">
            <div class="col">
                <h3 class="secondary-title main-shade-color-bright"> Les heteromorphes </h3>
                <p> Découvrez toute l'équipe de Nazarick ! </p>
                <button type="button" class="btn btn-color"> En savoir-plus </button>
            </div> 
        </div>

    </div>
        



<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>