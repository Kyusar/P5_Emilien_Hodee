<?php 
$title = "Modifier mon profil";

ob_start();
?>

    <div class="container main-section">
        <div class="row">
            <div class="col text-center main-shade-color-bright">
                <h1> Modifier mon profil </h1>
            </div>
        </div>
        <form enctype="multipart/form-data" method="post" action="index.php?action=modifiedProfil">
            <div class="row align-items-center profil-card">
                <div class="col-lg-2">
                    <img src="public/image/upload/<?php echo($data['avatar']) ?>" alt="<?php echo($data['avatar']) ?>" id="profil-picture" class="rounded float-left" />
                </div>
                <div class="col form-group">
                    <div class="form-group">
                        <label for="pseudo" class="main-color">Pseudo</label>
                        <input type="text" class="form-control" id="pseudo" name="pseudo" onfocus="tooltip()" value="<?php echo($data['pseudo_front']) ?>" >
                        <span id="alert-tips">* Attention, changez votre pseudo ne changera pas votre identifiant  de connextion.</span>
                    </div>
                    <div class="form-group">
                        <label for="image" class="main-color">Image : </label> <br />
                        <input type="file" id="image" name="profil_picture" accept="image/*,.png, image/*,.jpg, image/*,.jpeg">
                        
                    </div>
                </div>
            </div>
            <div class="row align-items-center profil-card">
                <div class="col-8">
                    <h4  class="main-font main-color"> À propos </h4>
                    <div class="form-group">
                        <label for="name" class="secondary-font">Nom / prénom</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo($data['name']) ?>">
                    </div>
                    <div class="form-group">
                        <label for="age" class="secondary-font">Votre âge</label>
                        <input type="number" class="form-control" id="age" name="age" value="<?php echo($data['age']) ?>" max="99">
                    </div>
                </div>
            </div>
            <div class="row align-items-center profil-card">
                <div class="col-8">
                    <h4  class="main-font main-color"> Signature </h4>
                    <div class="form-group">
                        <label for="signing" class="secondary-font">Nouvelle signature</label>
                        <input type="text" class="form-control" id="signing" name="signing" value="<?php echo($data['signature']) ?>">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center btn-profil">
                <div class="col-lg-1 col-sm-12">
                    <input type="submit" class="btn btn-color" value="Modifier">
                </div>
                <div class="col-lg-2 col-sm-12">
                    <a href="javascript:history.go(-1)" class="btn btn-color"> Revenir au profil</a>
                </div>
            </div>
        </form>
    </div>

    <script src="public/js/formProfil.js"></script>



<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>