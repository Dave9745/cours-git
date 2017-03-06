<?php

class DatabaseManager{
    
    public static function  getBdd() {
        
        $bdd = new PDO('mysql:host=localhost;dbname=partagetavid;charset=utf8', 'root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        
        return $bdd;
     }
    
}