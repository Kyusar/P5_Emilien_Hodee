<?php 

require_once('model/userManager.php');
require_once('model/accessManager.php');

function modifyProfil($pseudo, $name, $age, $signature, $pseudo_session)
{
    $userManager = new userManager();
    $updateProfil = $userManager->modifProfil($pseudo, $name, $age, $signature, $pseudo_session);

    if ($updateProfil === false)
    {
        throw new Exception ('Impossible de modifier les informations.');
    }
    else{
        profilData($pseudo_session);
    }
    
    
}

function  profilData($pseudo)
{
    $userManager = new userManager();
    $userData = $userManager->getUserDataProfil($pseudo);
    $data = $userData->fetch();

    if ($_GET['action'] == 'profil' OR $_GET['action'] == 'modifiedProfil')
    {
        require('view/profilPage.php');
    }
    elseif ($_GET['action'] == 'hub')
    {
        require('view/hub.php');
    }
    elseif ($_GET['action'] == 'addNewUser')
    {
        require('view/hub.php');
    }
    elseif ($_GET['action'] == 'connexion')
    {
        require('view/hub.php');
    }
    elseif ($_GET['action'] == 'modifyProfil')
    {
        require('view/modifyProfil.php');
    }
    else
    {
        throw new Exception('Impossible d\'afficher la page demander');
    }
}

function deleteUser($pseudo)
{
    $userManager = new userManager();
    $accessManager = new accessManager();

    $getUserId = $accessManager->getUserId($pseudo);
    $getId = $getUserId->fetch();
    $delete = $userManager->deleteUser($getId['id']);

    if ($delete === false)
    {
        throw new Exception ('Impossible de supprimer le membre');
    }
    else
    {
        listMember();
    }     

}


