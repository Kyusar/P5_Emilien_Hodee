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
            <?php 
            while ($data = $getMember->fetch())
            {
                ?>
                <div class="col-4-md col-6-xs text-center card-team">
                <div class="card text-white main-bg-color mb-2 container-glow ">
                    <img src="public/image/korosensei.png" alt="Ainz" class="card-img-top card-img">
                    <div class="card-body">
                        <h4 class="card-title"> <?= htmlspecialchars($data['pseudo_front'])?> </h4>
                        <p class="card-text"> 
                        <?php
                            if($data['owner'] !== NULL)
                            {
                                echo('Owner');
                            }
                            elseif($data['member'] !== NULL)
                            {
                                echo('Member');
                            }
                            elseif($data['dev'] !== NULL)
                            {
                                echo('Dev');
                            }
                            elseif($data['roster'] !== NULL)
                            {
                                echo('Roster');
                            }
                        ?>
                        </p>
                    </div>
                    <div class="card-footer text-muted">
                        Membre depuis le 19/03/2021
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
            <!-- <div class="col-4-md col-6-xs text-center card-team">
                <div class="card text-white main-bg-color mb-2 container-glow ">
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
            <div class="col-4-md col-6-xs text-center card-team">
                <div class="card text-white main-bg-color mb-2 container-glow ">
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
            <div class="col-4-md text-center card-team">
                <div class="card text-white main-bg-color mb-2 container-glow ">
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
            <div class="col-4-md text-center card-team">
                <div class="card text-white main-bg-color mb-2 container-glow ">
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
            <div class="col-4-md text-center card-team">
                <div class="card text-white main-bg-color mb-2 container-glow ">
                    <img src="public/image/ainz.png" alt="Ainz" class="card-img-top card-img">
                    <div class="card-body">
                        <h4 class="card-title"> Pseudo </h4>
                        <p class="card-text"> Rôles </p>
                    </div>
                    <div class="card-footer text-muted">
                        Membre depuis le 19/03/2021
                    </div>
                </div>
            </div> -->
        </div>
    </div>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>