<?php 

require_once('model/accessManager.php');

function addingUser($pseudo, $pass1, $pass2)
{
    $accessManager = new accessManager();

    if($pass1 !== $pass2)
    {
        throw new Exception ('Les mots de passe ne correspondent pas !');
    }
    else
    {
        $userPass = password_hash($pass1, PASSWORD_DEFAULT);
        $addingUser = $accessManager->addUser($pseudo, $userPass);

        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['password'] = $userPass;
        require('view/hub.php');
    }
    
}

function verifyAccess($pseudo, $password)
{

    $accessManager = new accessManager();
    $access = $accessManager->accessAdminPanel($pseudo);
    $getAccess = $access->fetch();
    
    if (password_verify($password, $getAccess['pass']) == TRUE)
    {
        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['password'] = $password;

        require('view/hub.php');
    }
    elseif ($access == FALSE)
    {
        throw new Exception("Pseudo éronné");
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