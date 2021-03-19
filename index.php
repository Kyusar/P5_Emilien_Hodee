<?php 
$title = 'Bienvenue dans le Tombeau de Nazarick';

/* require('controller/AccesController.php');
require('controller/MemberController.php');
require('controller/ProfilController.php'); */

try{
    if(isset($_GET['action']))
    {
        if(isset($_GET['action']) === "team")
        {
            require('view/teamPage.php');
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