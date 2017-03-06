<?php

class VideoManager extends DatabaseManager{
    

     function getVideos(){
         
        $bdd = parent::getBdd();
         
        $req = $bdd->prepare('SELECT * FROM videos');
        $req->execute();
        $result = $req->fetchAll();

        return $result;
        
     }
     
}

?>s