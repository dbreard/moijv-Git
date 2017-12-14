<?php
	
    require_once 'connexion.php';

    $queryGame = $connexion->prepare('SELECT * FROM game');
    
    // $queryGame objet de la classe PDO statement

    $queryGame -> execute();

    $games = $queryGame->fetchAll(PDO::FETCH_ASSOC);
    
    echo'<pre>';    
    var_dump($games);
    echo'</pre>';
