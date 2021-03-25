<?php 

require_once('model/userManager.php');
require_once('model/accessManager.php');
require_once('model/RankManager.php');

function modifyProfil($pseudo, $name, $age, $signature, $file, $pseudo_session)
{
    $userManager = new userManager();
    $upload_dir = 'public/image/upload';

    $incoming_Image = $_FILES['profil_picture']['tmp_name'];
    $imgName = $_FILES['profil_picture']['name'];

    $updateProfil = $userManager->modifProfil($pseudo, $name, $age, $signature, $imgName, $pseudo_session);

    if ($updateProfil === false)
    {
        throw new Exception ('Impossible de modifier les informations.');
        echo('Info débuggage //  ');
        print_r($_FILES);
    }
    else{

        move_uploaded_file($incoming_Image, "$upload_dir/$imgName");
        $_SESSION['avatar'] = $imgName;
        profilData($pseudo_session);
    }
    
    
}

function  profilData($pseudo)
{
    $userManager = new userManager();
    $rankManager = new rankManager();
    $accessManager = new accessManager();

    $userData = $userManager->getUserDataProfil($pseudo);
    $data = $userData->fetch();

    $getUserId = $accessManager->getUserId($pseudo);
    $getId = $getUserId->fetch();

    $getRankMember = $rankManager->getSpecificMemberRank($getId['id']);
    $getRank = $getRankMember->fetch();


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

    // getting file name to delete 
    $upload_dir = 'public/image/upload/';
    $getProfilPicture = $userManager->getUserImgData($pseudo);
    $getImage = $getProfilPicture->fetch();
    $imgDir = $upload_dir . $getImage['avatar'];
    // COndition if the member had the default picture then just delete from db, else delete his profil picture 
        if ($getImage['avatar'] == 'ainz.png')
        {
            $getUserId = $accessManager->getUserId($pseudo);
            $getId = $getUserId->fetch();
            $delete = $userManager->deleteUser($getId['id']);
        }
        else
        {
            // If the file exist then delete the user and his related profil picture
            if (file_exists($imgDir))
            {
                unlink($imgDir);
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
            else
            {
                throw new Exception ('Le fichier n\'existe pas');
            }
        }
        
}


