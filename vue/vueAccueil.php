<?php 

    $titre = "Accueil";

    ob_start();
?>

<div class="row">
	  
    <div class="col-lg-6 col-lg-offset-4 accroche"><i class="fa fa-hand-peace-o fontawesome"></i>Crème de la crème de tes vids !</div> 
    
    <div class="container menuvid">
        <div class="col-lg-12">
        
        
        <p class="last">Dernières vidéos</p>
        <p class="last">------------------------------------------------------<p><a class="a btn btn-warning" href="addvid.php" id="add">+ Ajouter une vidéo</a></p><br/>

        <?php
            
           foreach($videos as $video) {

                 $link = substr($video['link'],32,11);

                 echo "<div class='col-lg-6 vid'><a href='index.php?action=video&id=".$video['video_id']."'><img width='160' height='115' src='http://i1.ytimg.com/vi/".$link."/default.jpg'>&nbsp;&nbsp;<span class='a'>".$video['Titre']."</span></a></p></span></div>"; 

         }

    ?>
    </div>
        
    </div>
        
</div>

<?php

$contenu = ob_get_clean();

require ('gab.php');

?>