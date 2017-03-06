<?php

// Charge modele qui gere la bdd
require('modele/video.php');

function accueil(){
    
    $videos = getVideos();
    
    require('vue/vueAccueil.php');
}

function loadController($action){
        
    require("controller/controller".$action.".php");
}

class Controller{
    
    
}



?> 