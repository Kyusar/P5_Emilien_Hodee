<?php 

require_once("Manager.php");

class accessManager extends Manager 
{
    public  function  addUser($pseudo, $pass)
    {
        $db = $this->dbConnect();
        $req =  $db->prepare('INSERT INTO user(pseudo, pass) VALUES (?, ?)');
        $newUser = $req->execute(array($pseudo, $pass));

        return  $newUser;
    }

    public function accessAdminPanel($pseudo)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, pass FROM user WHERE pseudo = ?');
        $req->execute(array($pseudo));
        
        return $req;
    }

}