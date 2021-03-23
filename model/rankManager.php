<?php 

require_once("Manager.php");

class rankManager extends Manager 
{
    public function addRankOwner($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE rank_member SET `owner` = 0, `dev` = NULL, `roster` = NULL, `member` = NULL WHERE id_user = ?');
        $req->execute(array($id));

        return $req;
    }

    public function addRankDev($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE rank_member SET `owner` = NULL, `dev` = 0, `roster` = NULL, `member` = NULL WHERE id_user = ?');
        $req->execute(array($id));

        return $req;
    }

    public function addRankRoster($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE rank_member SET `owner` = NULL, `dev` = NULL, `roster` = 0, `member` = NULL WHERE id_user = ?');
        $req->execute(array($id));

        return $req;
    }

    public function addRankMember($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE rank_member SET `owner` = NULL, `dev` = NULL, `roster` = NULL, `member` = 0 WHERE id_user = ?');
        $req->execute(array($id));

        return $req;
    }

    public function getMemberRank()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT u.pseudo_front, r.* FROM `user` AS u INNER JOIN rank_member AS r WHERE u.id = r.id_user  ORDER BY u.id ASC');
        /* SELECT u.pseudo_front, r.* FROM `user` AS u INNER JOIN rank_member AS r WHERE u.id = r.id_user AND r.member = 0 OR r.owner = 0 OR r.dev = 0 OR r.roster = 0 */
        // SELECT user.pseudo_front FROM user
        return $req;
    }

    public function listMembers()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT pseudo FROM user');
        
        return $req;
    }
}