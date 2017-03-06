<?php


require('controller/controller.php');

$video = new Video();

echo $video->getTitre();


if(isset($_GET['action'])){
    
  loadController($_GET['action']);
    
}else{
    
  accueil();
    
}

          

?>