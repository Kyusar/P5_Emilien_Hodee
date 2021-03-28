<?php 
$title = "Bienvenue dans le tombeau";

ob_start();
?>
    <div class="jumbotron" >
        <h2 class="motto text-center">
            " Evolue et Domine "
        </h2> 
    </div>
    <div class="container">
        <div class="row text-center ">
            <div class="col">
                <h3 class="secondary-title main-shade-color-bright"> Code d'honneur </h3>
            </div>
        </div>
        <div class="row text-center justify-content-around align-items-center">
            <div class="col-lg-3 container-glow dogme">
                <h4 class="main-color"><strong>Préparation</strong></h4>
                <p class="text-bio text-justify"> Créer une logistique interne qui permet à tout les membres de posséder de tout les outils nécessaire à l'évolution en jeu ! </p>
            </div>
            <div class="col-lg-3 container-glow dogme">
                <h4 class="main-color"><strong>Exécution</strong></h4>
                <p class="text-bio text-justify"> En plus de joueurs qualitatif, nous afutons nos compétences afin de toujours être efficace au combat. </p>
            </div>
            <div class="col-lg-3 container-glow dogme">
                <h4 class="main-color"><strong>Domination</strong></h4>
                <p class="text-bio text-justify"> Notre éco-système nous assure performence et reconnaissance sur les jeux sur lesquels nous somme présent. </p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col">
                <a href="index.php?action=projet"><button type="button" class="btn btn-color"> En savoir-plus </button></a>
            </div>
        </div>
        <div class="section-divider"></div>
        <div class="row text-center align-items-center">
            <div class="col">
                <h3 class="secondary-title main-shade-color-bright"> Les heteromorphes </h3>
            </div> 
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-6 container-glow">
                <p class="text-bio"> <span class="main-font">Nazarick</span> comporte des une pléïade de membres en tout genre, découvrez tout les membres qui nous composent. Parmi ces murs ou sur nos <a href="#SN" class='simple-link'>réseaux sociaux</a></p>
                <a href="index.php?action=team"><button type="button" class="btn btn-color"> En savoir-plus </button></a>
            </div>
        </div>

    </div>
        



<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>