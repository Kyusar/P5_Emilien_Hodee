<?php 
$title = 'Bienvenue dans le Tombeau de Nazarick';
session_start();
require('controller/AccessController.php');
require('controller/RankController.php');
require('controller/userController.php');
require('controller/mailController.php');

try{
    if(isset($_GET['action']))
    {
        /* Layer 1 Menu */
        if($_GET['action'] == 'team')
        {
            member();
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
        elseif($_GET['action'] == 'send')
        {
            if (!empty($_POST['pseudo']) && !empty($_POST['message-object']) && !empty($_POST['message']) && !empty($_POST['mail']))
            {
                require('view/success_mail.php');
                /* sendMail($_POST['pseudo'], $_POST['message-object'], $_POST['message'], $_POST['mail']); */
            }
            else
            {
                throw new Exception ('Veuillez remplir tout les champs');
            }
            
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
        elseif (!empty($_SESSION['pseudo']) && !empty($_SESSION['password']))
        {
            /* Layer 2 menu */
            if($_GET['action'] == 'hub')
            {
                profilData($_SESSION['pseudo']);
            }
            elseif($_GET['action'] == 'guideNW')
            {
                require('view/guideNW.php');
            }
            /* Profil gestion */ 
            elseif($_GET['action'] == 'profil')
            {
                profilData($_SESSION['pseudo']);
            }
            elseif($_GET['action'] == 'modifyProfil')
            {
                profilData($_SESSION['pseudo']);
            }
            elseif($_GET['action'] == 'modifiedProfil')
            {
                if(!empty($_POST['pseudo']) && !empty($_POST['name']) && !empty($_POST['age']) && !empty($_POST['signing']) && isset($_FILES['profil_picture']))
                {
                    modifyProfil($_POST['pseudo'], $_POST['name'], $_POST['age'], $_POST['signing'], $_FILES['profil_picture'], $_SESSION['pseudo']);
                }
                else
                {
                    throw new Exception ('Tout les champs ne sont pas rempli !');
                }
            }
            /* Layer 3 administratif */ 
            elseif ($_SESSION['pseudo'] == 'Kyusar')
            {
                if($_GET['action'] == 'admin')
                {
                    listMember();
                }
                elseif ($_GET['action'] == 'addRank')
                {
                    if(!empty($_POST['rank']) && $_POST['rank'] == 'owner')
                    {
                        if (!empty($_POST['member']))
                        {
                            addRankOwner($_POST['member']);
                        }
                        else
                        {
                            throw new Exception ('Mercci d\'indiquer un pseudo');
                        }   
                    }
                    elseif(!empty($_POST['rank']) && $_POST['rank'] == 'dev')
                    {
                        if (!empty($_POST['member']))
                        {
                            addRankDev($_POST['member']);
                        }
                        else
                        {
                            throw new Exception ('Mercci d\'indiquer un pseudo');
                        }   
                    }
                    elseif(!empty($_POST['rank']) && $_POST['rank'] == 'roster')
                    {
                        if (!empty($_POST['member']))
                        {
                            addRankRoster($_POST['member']);
                        }
                        else
                        {
                            throw new Exception ('Mercci d\'indiquer un pseudo');
                        }   
                    }
                    elseif(!empty($_POST['rank']) && $_POST['rank'] == 'member')
                    {
                        if (!empty($_POST['member']))
                        {
                            addRankMember($_POST['member']);
                        }
                        else
                        {
                            throw new Exception ('Mercci d\'indiquer un pseudo');
                        }   
                    }
                    else
                    {
                        throw new Exception ('Impossible d\'ajouter le rang / Erreur dans les champs');
                    }
                }
                elseif ($_GET['action'] == 'supprMember')
                {
                    if(!empty($_POST['pseudo']))
                    {
                        deleteUser($_POST['pseudo']);
                    }
                    else
                    {
                        throw new Exception ('Veuillez insérer le bon pseudo');
                    }
                }
                else
                {
                    throw new Exception ('Vous n\'avez pas les droit pour accéder à cette page');
                }
            }
            else
            {
                throw new Exception ('Vous n\'avez pas les droit pour accéder à cette page');
            }
        }
        /* end of condition */
        else{
            throw new Exception ('Cette page n\'existe  pas ou n\'est pas accesible avec vos droits actuel, veuillez vous connecter');
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