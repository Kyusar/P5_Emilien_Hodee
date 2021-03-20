
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://cdn.tiny.cloud/1/3klpreepms2aw95tlln6oab3q54lze6yxv0dzhop2m74wadg/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&family=Redressed&display=swap" rel="stylesheet">
		<link href="public/css/style.css" rel="stylesheet"/>
		<title><?= $title ?></title>
	</head>
    <body>
        
            <nav class="navbar navbar-expand-lg main-nav fixed-top justify-content-center align-items-center">
                <a href="index.php" class="navbar-brand main-shade-color-bright"> <!-- <img src="public/image/ainz.png" alt="Personnage ainz" class="logo"/> --> <strong> Nazarick </strong> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarToggler">
                    <ul class="navbar-nav m-auto"> 
                        <li class="nav-item">
                            <a href="index.php?action=team" class="nav-link link-upgraded"> TEAM </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?action=projet" class="nav-link link-upgraded"> PROJETS </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?action=applyPage" class="nav-link  link-upgraded"> POSTULER </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle link-dropdown" href="#" id="navbarMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                                JEUX 
                            </a>
                            <div class="dropdown-menu dropdown-asset text-center" aria-labelledby="navbarMenuLink"> 
                                <a class="dropdown-item" href="index.php?action=newworld"> New World </a>
                                <a class="dropdown-item disabled" href="#"> League of Legends </a>
                            </div>
                        </li>
                        
                        <li class="nav-item">
                            <a  href="index.php?action=contact" class="nav-link link-upgraded"> CONTACT </a>
                        </li>
                    </ul>
                    <?php
                            if (!empty($_SESSION['pseudo']) &&  !empty($_SESSION['password']))
                            {
                                ?>
                                    <div class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle link-dropdown" id="navbarProfilLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="public/image/korosensei.png" alt="" class="profil"/></a>
                                        <div class="dropdown-menu dropdown-asset text-center" aria-labelledby="navbarProfilLink">
                                            <a href="#" class="dropdwon-item">Mon profil</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item"> Deconnexion </a>
                                        </div>
                                    </div>
                                <?php
                            }
                            else
                            {
                                ?>
                                <div class="open-btn d-flex">
                                    <button type="button" class="btn open-button" onclick="openForm()"> Se connecter </button>   
                                </div>
                                <?php
                            }
                                ?>

                </div>
            </nav> 

            <div class="login-popup">
                <div class="form-popup" id="popupForm">
                <!-- <a class="close">&times;</a> -->
                    <form action="#" class="form-container text-white">
                        <h2> Veuillez vous connecter </h2>
                        <label for="pseudo"> Pseudo : </label>
                        <input type="text" placeholder="Votre pseudo" name="pseudo" required>
                        <label for="password"> Mot de passe : </label>
                        <input type="password" id="password" placeholder="Votre mot de passe" name="password" required>
                        <button type="submit" class="btn btn-submit"> Se connecter </button>
                        <button type="button" class="btn btn-danger" onclick="closeForm()"> Fermer </button>
                    </form>
                </div>
            </div>


        <?= $content ?>

        <div class="container-fluid section-footer">
            <div class="row text-center align-items-center">
                <div class="col-6">
                    <h4 class="main-color"> <u>Second menu</u> </h4>
                    <p> Team </p>
                    <p> Projets </p>
                    <p> Postuler </p>
                    <p> Jeux </p>
                    <p> Contact </p>
                </div>
                <div class="col-6 align-self-start">
                    <h4 class="main-color"> <u>Reseaux sociaux</u> </h4>
                    <p> <a href="https://twitter.com/KyusarTv" target="_blank"><i class="fab fa-twitter"></i></a> </p>
                    <p> <a href="https://discord.gg/rYK336Q" target="_blank"><i class="fab fa-discord"></i></a> </p>
                </div>
            </div>
        </div>
         
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        <script src="public/js/script.js"></script>
        <script src="https://kit.fontawesome.com/5b3feff120.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>