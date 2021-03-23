<?php 

require_once("Manager.php");

class userManager extends Manager 
{
    public function modifProfil($pseudo, $name, $age, $signature, $pseudo_session)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE user SET pseudo_front = ?, `name` = ?, age = ?, `signature`= ? WHERE pseudo = ?');
        $req->execute(array($pseudo, $name, $age, $signature, $pseudo_session));

        return $req;
    }

    public function getUserDataProfil($pseudo)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT pseudo_front, age, `name`, `signature`, DATE_FORMAT(date_creation, \'%d/%m/%y\') AS creation FROM user WHERE pseudo = ?');
        $req->execute(array($pseudo));

        return $req;
    }

    public function deleteUser($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM user WHERE id = ?');
        $req->execute(array($id));

        return $req;
    }

}