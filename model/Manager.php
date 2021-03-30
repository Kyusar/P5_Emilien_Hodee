<?php 

class Manager
{
    protected function dbConnect()
        {
            $db = new PDO('mysql:host=localhost;dbname=nazarick;charset=utf8', 'root', '');
            
            return $db;
        }
}