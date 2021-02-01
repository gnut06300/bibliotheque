<?php 
if(!$_GET) 
	{
		require_once 'indexa.php';
	}
elseif (isset($_GET['table']) AND $_GET['table']=='livre') 
	{
		require_once 'Afficher_livre.php';
	}
elseif (isset($_GET['table']) AND $_GET['table']=='personne') {
		require_once 'Afficher_personne.php';
	}
elseif (isset($_GET['table']) AND $_GET['table']=='emprunt') {
	require_once 'Afficher_emprunt.php';
	}
elseif ($_GET['contact']=='yes') {
	require_once 'contact.php';
	}
else{
	echo "error";
} 
