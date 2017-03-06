<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $titre ?></title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link rel="stylesheet" href="fonts/fa/css/font-awesome.min.css">
    <link rel="stylesheet" href="partage.css">
  </head>

  <body>

     <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header" class="col-lg-4">
          <a class="navbar-brand" href="accueil.php"><i class="fa fa-hand-peace-o"></i>&nbsp;&nbsp;PartageTaVid</a>
        </div>
        <form>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="accueil.php">Accueil</a></li>
              <li><a href='login.php'>Se connecter</a></li>
              <li><input type="search" class="form-control" placeholder="You cherche what?" name="the_search"></li>
              <li><button type="button" class="btn btn-success"><i class="fa fa-search"></i></button></li> 
             <li><a href="deco.php">Déconnexion</a></li>  
            </ul>
        </form>  
        
      </div>
    </nav><br/><br/><br/><br/><br/><br/> 

        <?php echo $contenu; ?>
      
    <div class="container" style="padding-top:120px;">
  
        <footer>
          <p>&copy; 2016 PartageTaVideo, Inc.</p>
        </footer>
        
    </div>

  </body>
</html>
