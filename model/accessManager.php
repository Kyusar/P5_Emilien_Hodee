<?php 

require_once("Manager.php");

class accessManager extends Manager 
{

    public function addUser($pseudo, $pseudo_front, $pass)
    {
        $db = $this->dbConnect();
        $req =  $db->prepare('INSERT INTO user(pseudo, pseudo_front, pass, date_creation) VALUES (?,?, ?, NOW())');
        $newUser = $req->execute(array($pseudo, $pseudo_front, $pass));

        return  $newUser;
    }

    public function getUserId($pseudo)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id FROM user WHERE pseudo = ?');
        $req->execute(array($pseudo));

        return $req;
    }

    public function verifyPseudo($pseudo)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT pseudo FROM user WHERE pseudo = ?');
        $req->execute(array($pseudo));

        return $req;
    }
    
    public function accessAdminPanel($pseudo)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, pass FROM user WHERE pseudo = ?');
        $req->execute(array($pseudo));
        
        return $req;
    }

}