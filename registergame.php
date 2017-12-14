<?php
	
    require_once 'connexion.php';

//---------- ENREGISTREMENT game --------//

if(!empty($_POST))

{
		//préparation de la requete d'insertion d'un jeu dans la BDD
		$resultat = $connexion->prepare("INSERT INTO game (title, description, category, available) VALUES (:title, :description, :category, :available)");
		
		
		$resultat->bindValue(':title', $_POST['title'], PDO::PARAM_STR);
		$resultat->bindValue(':description', $_POST['description'], PDO::PARAM_STR);
		/*$resultat->bindValue(':image', $_POST['image'], PDO::PARAM_STR);*/
		$resultat->bindValue(':category', $_POST['category'], PDO::PARAM_STR);
		$resultat->bindValue(':available', $_POST['available'], PDO::PARAM_STR);
		
		
		$resultat->execute();
}

?>

<!DOCTYPE html>
<html lang="fr">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MoiJV</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">MoiJV</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Accueil
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">A propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registergame.php">Ajout Game</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registermember.php">Ajout Membre</a>
            </li>  
            <li class="nav-item">
              <a class="nav-link" href="#">Location</a>
            </li>  
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
        
        <div class="row">
            
            <div class="col-lg-3">

              <h1 class="my-4">MoiJV</h1>
              <div class="list-group">
                <a href="#" class="list-group-item">RPG</a>
                <a href="#" class="list-group-item">FPS</a>
                <a href="#" class="list-group-item">Puzzle Game</a>
              </div>

            </div>
            
            <div class="col-lg-9">
                
            <form method="post" action="#">
              <div class="form-group">
                <label for="title">titre</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Le titre du Jeu">
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label for="image">Pochette</label>
                <input type="file" class="form-control" id="image" name="image" >
              </div>
              <div class="form-group">
                <label for="category">Genre</label>
                <select class="form-control" id="category" name="category">
                  <option value="RPG">RPG</option>
                  <option value="FPS">FPS</option>
                  <option value="Puzzle game">Puzzle game</option>
                 
                </select>
              </div>  
              <input type="hidden" value="1" name="available">
              
              <button type="submit" class="btn btn-primary">Enregistrer un jeu</button>
            </form>
            
            </div>
        </div>
        <!--fin de row-->
        
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; MoiJV 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>    