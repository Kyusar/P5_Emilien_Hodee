<?php 

require_once('model/rankManager.php');
require_once('model/accessManager.php');

function member()
{
    $rankManager = new rankManager();
    $getMember = $rankManager->getMemberRank();

    require('view/teamPage.php');
    
    
}

function listMember()
{
    $rankManager = new rankManager();
    $listMember = $rankManager->listMembers();
    $secondListMember = $rankManager->listMembers();

    require('view/admin.php');
}

function addRankOwner($pseudo)
{
    $rankManager = new rankManager();
    $accessManager = new accessManager();

    $getUserId = $accessManager->getUserId($pseudo);
    $getId = $getUserId->fetch();
    $owner = $rankManager->addRankOwner($getId['id']);

    if ($owner === false)
    {
        throw new Exception ('Impossible d\'ajouter le rang');
    }
    else
    {
        listMember();
    }     
}

function addRankDev($pseudo)
{
    $rankManager = new rankManager();
    $accessManager = new accessManager();

    $getUserId = $accessManager->getUserId($pseudo);
    $getId = $getUserId->fetch();
    $dev = $rankManager->addRankDev($getId['id']);

    if ($dev === false)
    {
        throw new Exception ('Impossible d\'ajouter le rang');
    }
    else
    {
        listMember();
    }     
}

function addRankRoster($pseudo)
{
    $rankManager = new rankManager();
    $accessManager = new accessManager();

    $getUserId = $accessManager->getUserId($pseudo);
    $getId = $getUserId->fetch();
    $roster = $rankManager->addRankRoster($getId['id']);

    if ($roster === false)
    {
        throw new Exception ('Impossible d\'ajouter le rang');
    }
    else
    {
        listMember();
    }     
}

function addRankMember($pseudo)
{
    $rankManager = new rankManager();
    $accessManager = new accessManager();

    $getUserId = $accessManager->getUserId($pseudo);
    $getId = $getUserId->fetch();
    $member = $rankManager->addRankRoster($getId['id']);

    if ($member === false)
    {
        throw new Exception ('Impossible d\'ajouter le rang');
    }
    else
    {
        listMember();
    }     
}