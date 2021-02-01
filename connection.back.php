<?php
    /* nom du script : afficher_livre.php
    Description : script qui affiche la table livre vers : 2.0 */
    // se connecter au SGBD et selectionner la BD biblio
    // si [HTTP_HOST] => gnut.eu
    if($_SERVER['HTTP_HOST']=='votredomaine.com'){
    	$mysqli = new mysqli('cheminDeLaBase', 'utilisateur', 'password', 'nomDeLaBase');
   	}
   	else{
   		$mysqli = new mysqli('localhost', 'root', '', 'biblio');
   	}
   /* Vérification de la connexion */
    if (mysqli_connect_errno()) {
    printf("Échec de la connexion : %s\n", $mysqli->connect_error);
    exit();
    }
?>