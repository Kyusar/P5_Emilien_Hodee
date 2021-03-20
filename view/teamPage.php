<?php 
$title = "Membre de Nazarick";

ob_start();
?>

    <div class="container main-section">
        <div class="row">
            <div class="col text-center main-shade-color-bright">
                <h1> Nos membres </h1>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2 row-cols-xs-1 card-container justify-content-center">
            <div class="col-4-md text-center">
                <div class="card text-white main-bg-color mb-1">
                    <img src="public/image/korosensei.png" alt="Ainz" class="card-img-top card-img">
                    <div class="card-body">
                        <h4 class="card-title"> Kyusar </h4>
                        <p class="card-text"> Owner </p>
                    </div>
                    <div class="card-footer text-muted">
                        Membre depuis le 19/03/2021
                    </div>
                </div>
            </div>
            <div class="col-4-md col-6-xs text-center">
                <div class="card text-white main-bg-color mb-1">
                    <img src="public/image/ainz.png" alt="Ainz" class="card-img-top card-img">
                    <div class="card-body">
                        <h4 class="card-title"> Pseudo </h4>
                        <p class="card-text"> Rôles </p>
                    </div>
                    <div class="card-footer text-muted">
                        Membre depuis le 19/03/2021
                    </div>
                </div>
            </div>
            <div class="col-4-md col-6-xs text-center">
                <div class="card text-white main-bg-color mb-1">
                    <img src="public/image/ainz.png" alt="Ainz" class="card-img-top card-img">
                    <div class="card-body">
                        <h4 class="card-title"> Pseudo </h4>
                        <p class="card-text"> Rôles </p>
                    </div>
                    <div class="card-footer text-muted">
                        Membre depuis le 19/03/2021
                    </div>
                </div>
            </div>
            <div class="col-4-md text-center">
                <div class="card text-white main-bg-color mb-1">
                    <img src="public/image/ainz.png" alt="Ainz" class="card-img-top card-img">
                    <div class="card-body">
                        <h4 class="card-title"> Pseudo </h4>
                        <p class="card-text"> Rôles </p>
                    </div>
                    <div class="card-footer text-muted">
                        Membre depuis le 19/03/2021
                    </div>
                </div>
            </div>
            <div class="col-4-md text-center">
                <div class="card text-white main-bg-color mb-1">
                    <img src="public/image/ainz.png" alt="Ainz" class="card-img-top card-img">
                    <div class="card-body">
                        <h4 class="card-title"> Pseudo </h4>
                        <p class="card-text"> Rôles </p>
                    </div>
                    <div class="card-footer text-muted">
                        Membre depuis le 19/03/2021
                    </div>
                </div>
            </div>
            <div class="col-4-md text-center">
                <div class="card text-white main-bg-color mb-1">
                    <img src="public/image/ainz.png" alt="Ainz" class="card-img-top card-img">
                    <div class="card-body">
                        <h4 class="card-title"> Pseudo </h4>
                        <p class="card-text"> Rôles </p>
                    </div>
                    <div class="card-footer text-muted">
                        Membre depuis le 19/03/2021
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>