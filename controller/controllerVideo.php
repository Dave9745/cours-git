<?php

if (isset($_GET['action'])){
    
      //Je regarde si je suis sur video
      if($_GET['action'] == "video"){
          
          if(isset($_GET['id']) AND $_GET['id'] != ''){
              
            $video = getVideo($_GET['id']);  
          
            require('vue/vueVideo.php');
              
          }
      }
    
}