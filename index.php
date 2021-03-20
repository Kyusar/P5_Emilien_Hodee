<?php 
$title = 'Bienvenue dans le Tombeau de Nazarick';

/* require('controller/AccesController.php');
require('controller/MemberController.php');
require('controller/ProfilController.php'); */

try{
    if(isset($_GET['action']))
    {
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
        }/*
        elseif($_GET['action'] == 'applyPage')
        {
            require('view/applyPage.php');
        }
        elseif($_GET['action'] == 'applyPage')
        {
            require('view/applyPage.php');
        } */
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