<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&family=Redressed&display=swap" rel="stylesheet">
		<link href="public/css/style.css" rel="stylesheet"/>
		<title><?= $title ?></title>
	</head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg main-nav fixed-top">
                <a href="index.php" class="navbar-brand main-font main-color"> <img src="public/image/logo_naz_alone.png"  alt="Logo Nazarick" class="brand"> <span class="link-upgraded">Nazarick</span> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarToggler">
                    <ul class="navbar-nav m-auto"> 
                        
                        <?php
                            if (!empty($_SESSION['pseudo']) &&  !empty($_SESSION['password']))
                            {
                                ?>
                                    <li class="nav-item">
                                        <a href="index.php?action=hub" class="nav-link link-upgraded"> HUB</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.php?action=guideNW" class="nav-link  link-upgraded"> GUIDES </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.php?action=newworld" class="nav-link  link-upgraded"> NEW WORLD </a>
                                    </li>
                                <?php
                                if($_SESSION['pseudo'] == 'Kyusar')
                                {
                                    ?>
                                    <li class="nav-item">
                                        <a href="index.php?action=admin" class="nav-link  link-upgraded"> ADMIN </a>
                                    </li>
                                    <li class="nav-item">
                                       <a href="#" class="nav-link  link-upgraded"> STREAMER </a>
                                    </li> 
                                <?php
                                }
                            }
                            else
                            {
                                ?>
                                <li class="nav-item">
                                    <a href="index.php?action=team" class="nav-link link-upgraded"> MEMBRE </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.php?action=projet" class="nav-link link-upgraded"> PROJETS </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.php?action=applyPage" class="nav-link  link-upgraded"> POSTULER </a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link link-upgraded" href="index.php?action=newworld"> NEW WORLD </a>
                                </li>
                                
                                <li class="nav-item">
                                    <a  href="index.php?action=contact" class="nav-link link-upgraded"> CONTACT </a>
                                </li>
                                <?php
                            }
                                ?>
                        
                    </ul>
                    <?php
                            if (!empty($_SESSION['pseudo']) &&  !empty($_SESSION['password']))
                            {
                                ?>
                                    <div class="nav-item dropdown second-menu ml-auto">
                                        <a href="#" class="nav-link dropdown-toggle link-dropdown" id="navbarProfilLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="public/image/upload/<?php echo($_SESSION['avatar']) ?>" alt="<?php echo($_SESSION['avatar']) ?>" class="profil"/>
                                        </a>
                                        <div class="dropdown-menu dropdown-asset text-center" aria-labelledby="navbarProfilLink">
                                            <a href="index.php?action=profil" class="dropdown-item">Mon profil</a>
                                            <div class="dropdown-divider"></div>

                                            <a href="index.php" class="dropdown-item">Acceuil</a>
                                            <a href="index.php?action=team" class="dropdown-item">Team</a>
                                            <a href="index.php?action=projet" class="dropdown-item">Projet</a>
                                            <a href="index.php?action=applyPage" class="dropdown-item">Postuler</a>
                                            <a href="index.php?action=contact" class="dropdown-item">Contact</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="index.php?action=disconnect" class="dropdown-item"> Deconnexion </a>
                                            <?php
                                            if($_SESSION['pseudo'] == 'Kyusar')
                                            {
                                                ?>
                                                
                                                <div class="dropdown-divider"></div>
                                                <a href="index.php?action=admin" class="nav-link"> ADMIN </a>
                                                
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                <?php
                                
                            }
                            else
                            {
                                ?>
                                <div class="open-btn ml-auto">
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
                    <form method="post" action="index.php?action=connexion" class="form-container text-white">
                        <h2> Connexion : </h2>
                        <label for="pseudo"> Pseudo : </label>
                        <input type="text" placeholder="Votre pseudo" name="pseudo" id="pseudo" required>
                        <label for="password"> Mot de passe : </label>
                        <input type="password" id="password" placeholder="Votre mot de passe" name="password" required>
                        <button type="submit" class="btn btn-submit"> Se connecter </button>
                        <button type="button" class="btn btn-danger" onclick="closeForm()"> Fermer </button>
                        <p> <a href="index.php?action=createAccount" class="simple-link">Créer un compte</a> </p>
                    </form>
                </div>
            </div>
        </header>
            


        <?= $content ?>

        <footer>                    
            <div class="container-fluid section-footer">
                <div class="row text-center justify-content-around">
                    <div class="col-2">
                        <h4 class="main-color footer-title"> Off-menu </h4>
                        <a href="index.php?action=team" class="nav-link"> Team </a>
                        <a href="index.php?action=projet" class="nav-link"> Projets </a>
                        <a href="index.php?action=applyPage" class="nav-link"> Postuler </a>
                        <a href="index.php?action=newworld" class="nav-link"> New World </a>
                        <a href="index.php?action=contact" class="nav-link"> Contact </a>
                    </div>
                    <?php
                    if (!empty($_SESSION['pseudo']) && !empty($_SESSION['password']))
                    {
                        ?>
                        <div class="col-2">
                            <h4 class="main-color footer-title"> Gestion de compte </h4>
                            <a href="index.php?action=profil" class="nav-link"> Mon profil </a>
                            <a href="index.php?action=disconnect" class="nav-link"> Se deconnecter </a>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="col-2">
                        <h4 class="main-color footer-title" id="SN"> Reseaux sociaux </h4>
                        <p> <a href="https://twitter.com/KyusarTv" target="_blank"><i class="fab fa-twitter rotation"></i></a> </p>
                        <p> <a href="https://discord.gg/rYK336Q" target="_blank"><i class="fab fa-discord rotation"></i></a> </p>
                    </div>
                </div>
            </div>
        </footer>

    
        <script src="public/js/popupConnexion.js"></script>
        <script async src="https://platform.twitter.com/widgets.js"></script>
        <script src="https://kit.fontawesome.com/5b3feff120.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>