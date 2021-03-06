<?php 
$title = "Mon profil";

ob_start();
?>

    <div class="container main-section">
        <div class="row">
            <div class="col text-center main-shade-color-bright">
                <h1> Mon profil </h1>
            </div>
        </div>
        <div class="row align-items-center profil-card">
            <div class="col-lg-2">
                <img src="public/image/upload/<?php echo($data['avatar']) ?>" alt="<?php echo($data['avatar']) ?>" id="profil-picture" class="rounded float-left" />
            </div>
            <div class="col">
                <h4 class="main-font main-color profil-pseudo"> <?php echo($data['pseudo_front']) ?></h4>
                <p class="main-color"> 
                    <?php
                        if ($getRank['owner'] !== NULL)
                        {
                            echo('Rang : Owner');
                        }
                        elseif ($getRank['member'] !== NULL)
                        {
                            echo('Rang : Member');
                        }
                        elseif ($getRank['dev'] !== NULL)
                        {
                            echo('Rang : Dev');
                        }
                        elseif ($getRank['roster'] !== NULL)
                        {
                            echo('Rang : Roster');
                        }
                    ?>
                </p>
            </div>
        </div>
        <div class="row align-items-center profil-card">
            <div class="col-8">
                <h4  class="main-font main-color"> À propos </h4>
                <p> <?php echo($data['name']) ?> </p>
                <p>
                    <?php 
                        if (!empty($data['age']))
                        {
                            echo('Age : ' . $data['age'] . ' ans');
                        } 
                        
                    ?>
                </p>
            </div>
        </div>
        <div class="row align-items-center profil-card">
            <div class="col-8">
                <h4  class="main-font main-color"> Signature </h4>
                <p> <?php echo($data['signature']) ?> </p>
            </div>
        </div>
        <div class="row align-items-center profil-card">
            <div class="col-8">
                <h4  class="main-font main-color"> Informations sur le compte </h4>
                <p> Date de création : <?php echo($data['creation']) ?></p>
            </div>
        </div>
        <div class="row justify-content-center btn-profil">
            <div class="col-lg-1 col-sm-12">
                <a href="index.php?action=modifyProfil" class="btn btn-color"> Modifier </a>
            </div>
        </div>
    </div>



<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>