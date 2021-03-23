<?php 

require_once('model/accessManager.php');

function addingUser($pseudo, $pass1, $pass2)
{
    $accessManager = new accessManager();

    $getUser = $accessManager->verifyPseudo($pseudo);
    $name = $getUser->fetch();
    
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
        $userPass = password_hash($pass1, PASSWORD_DEFAULT);
        $addingUser = $accessManager->addUser($pseudo, $pseudo, $userPass);
        
        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['password'] = $userPass;

        profilData($_SESSION['pseudo']);
    }
}

function verifyAccess($pseudo, $password)
{

    $accessManager = new accessManager();
    
    $access = $accessManager->accessAdminPanel($pseudo);
    $getAccess = $access->fetch();

    $getUser = $accessManager->verifyPseudo($pseudo);
    $name = $getUser->fetch();
    
    if (password_verify($password, $getAccess['pass']) == TRUE)
    {
        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['password'] = $password;

        profilData($_SESSION['pseudo']);
    }
    elseif ($name['pseudo'] !== $pseudo)
    {
        throw new Exception("Ce pseudo n'existe pas");
    }
    else
    {
        throw new Exception("Pseudo ou Mot de passe érroné");
    }
    $access->closeCursor();
}

function disconnected()
{
    session_destroy();
    header('Location: index.php');
}