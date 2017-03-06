<?php
ob_start();
?>

<h1>Vous regardez: <?php echo $video['Titre']; ?></h1>


<?php

$contenu = ob_get_clean();

require ('gab.php');

?>