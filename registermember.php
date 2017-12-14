<?php
	
    require_once 'connexion.php';

//---------- ENREGISTREMENT PRODUIT --------//

if(!empty($_POST))

{
		
	
	
	
		// Réaliser le script permettant d'inserer un produit dans la table produit (requete préparée)
		$resultat = $connexion->prepare("INSERT INTO user (username, password, email, firstname, lastname) VALUES (:username, :password, :email, :firstname, :lastname)");
		
		
		$resultat->bindValue(':username', $_POST['username'], PDO::PARAM_STR);
		$resultat->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
		$resultat->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
		
		$resultat->bindValue(':firstname', $_POST['firstname'], PDO::PARAM_STR);
		$resultat->bindValue(':lastname', $_POST['lastname'], PDO::PARAM_STR);
		
		
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
              <a class="nav-link" href="registermember.php">connexion</a>
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
                    <label for="pseudo">Pseudo</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="votre pseudo">
                  </div>
                
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" id="password" name="password" placeholder="votre mot de passe">
                  </div>
                                
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Précisez votre email">
                    <small id="emailHelp" class="form-text text-muted">Nous ne comuniquerons à personne votre email.</small>
                  </div>
                
                  <div class="form-group">
                    <label for="prenom">Prenom</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="votre prenom">
                  </div>
                
                  <div class="form-group">
                    <label for="nom">nom</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="votre nom">
                  </div>
              
              
              
              <button type="submit" class="btn btn-primary">Enregistrer un nouveau membre</button>
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