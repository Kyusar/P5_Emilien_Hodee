<?php 
$title = 'Bienvenue dans le Tombeau de Nazarick';
session_start();
require('controller/AccessController.php');/*
require('controller/MemberController.php');
require('controller/ProfilController.php'); */

try{
    if(isset($_GET['action']))
    {
        /* Layer 1 Menu */
        if($_GET['action'] == 'team')
        {
            require('view/teamPage.php');
        }
        elseif($_GET['action'] == 'applyPage')
        {
            require('view/applyPage.php');
        }
        elseif($_GET['action'] == 'contact')
        {
            require('view/contactPage.php');
        }
         elseif($_GET['action'] == 'projet')
        {
            require('view/bioPage.php');
        }
        elseif($_GET['action'] == 'newworld')
        {
            require('view/NewWorld.php');
        }
        elseif($_GET['action'] == 'createAccount')
        {
            require('view/createAccount.php');
        }
        /* Layer 2 menu */
        elseif($_GET['action'] == 'hub')
        {
            require('view/hub.php');
        }
        elseif($_GET['action'] == 'guideNW')
        {
            require('view/guideNW.php');
        }
        /* Create account / verification */
        elseif($_GET['action'] == 'addNewUser')
        {
            if(!empty($_POST['pseudo']) && !empty($_POST['pass1']) && !empty($_POST['pass2']))
            {
                addingUser($_POST['pseudo'], $_POST['pass1'], $_POST['pass2']);
            }
            else
            {
                throw new Exception('Veuillez remplir tout les champs !');
            }
        } 
        elseif($_GET['action'] == 'connexion')
        {
            if(!empty($_POST['pseudo']) && !empty($_POST['password']))
            {
                verifyAccess($_POST['pseudo'], $_POST['password']);
            }
            else
            {
                throw new Exception('Veuillez remplir tout les champs !');
            }
        } 
        elseif($_GET['action'] == 'disconnect')
        {
            disconnected();
        }
        /* end of condition */
        else{
            throw new Exception ('Cette page n\'existe  pas');
        }
    }
    else{
        require('view/landingPage.php');
    }
}
catch(Exception $e)
{
    $errorMessage = $e->getMessage();
    require('view/errorView.php');
}
?>