<?php 

require_once('model/accessManager.php');

function addingUser($pseudo, $pass1, $pass2)
{
    $accessManager = new accessManager();

    // Gathering data of already member to check if exist
    $getUser = $accessManager->verifyPseudo($pseudo);
    $name = $getUser->fetch();

    $pseudo_front = $pseudo;
    $avatar = 'ainz.png';
    
    if($pass1 !== $pass2)
    {
        throw new Exception ('Les mots de passe ne correspondent pas !');
    }
    elseif ($name['pseudo'] === $pseudo)
    {
        throw new Exception ('Cette identifiant est déjà pris !');
    }
    else
    {
        // $2y$10$rsF8I7WnNlQFgxU/5UVjT.2HtlKguVXvXHlsPaxOpZp8tr08.Sl9e

        // Hashing the password and add the user
        $userPass = password_hash($pass1, PASSWORD_DEFAULT);
        $addingUser = $accessManager->addUser($pseudo, $pseudo_front, $userPass, $avatar);
        
        // Getting id of the new user // Adding rank member to the new user
        $getUserId = $accessManager->getUserId($pseudo);
        $getId = $getUserId->fetch();
        $addingRank = $accessManager->onUserAdd($getId['id']);
        
        //Start session
        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['password'] = $userPass;
        $_SESSION['avatar'] = $avatar;

        profilData($_SESSION['pseudo']);
        
        
        
    }
}

function verifyAccess($pseudo, $password)
{

    $accessManager = new accessManager();
    $userManager = new userManager();

    // Get data from user
    $access = $accessManager->accessAdminPanel($pseudo);
    $getAccess = $access->fetch();

    // Verify if pseudo already exist
    $getUser = $accessManager->verifyPseudo($pseudo);
    $name = $getUser->fetch();

    // get his profil picture to implement it in our template 
    $getProfilPicture = $userManager->getUserImgData($pseudo);
    $getImage = $getProfilPicture->fetch();
    
    if (password_verify($password, $getAccess['pass']) == TRUE)
    {
        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['password'] = $password;
        $_SESSION['avatar'] = $getImage['avatar'];

        profilData($_SESSION['pseudo']);
    }
    elseif ($name['pseudo'] !== $pseudo)
    {
        throw new Exception("Ce pseudo n'existe pas");
    }
    else
    {
        throw new Exception("Mot de passe érroné");
    }
    $access->closeCursor();
}

function disconnected()
{
    session_destroy();
    header('Location: index.php');
}