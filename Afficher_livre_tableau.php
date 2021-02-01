<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Liste des Livres</title>
  </head>
  <body>
        <!-- Menu -->
        <?php require_once('menu.php'); ?>
        <!-- Fin menu -->
        <!-- Titre -->
        <h1 class="center">Liste des Livres</h1>
        <!-- Fin titre -->
    </header>    
    <?php
    /* nom du script : afficher_livre.php
    Description : script qui affiche la table livre vers : 2.0 */
    // intégrer le fichier connection.php
    require_once('connection.php');

    // envoyer une requete pour obtenir le contenu de la table livre
    $query='SELECT * FROM livre';
    if ($result = $mysqli->query($query)) {
?>
    <table width=50%>
        <tr bgcolor="gray" style="color:white">
            <td>Numlivre</td>
            <td>Titre</td>
            <td>Auteur</td>
            <td>Genre</td>
            <td align="right">Prix</td>
        </tr>
<?php
        //introduction de la variable $i pour compter le numéro de ligne et changer de couleur une sur deux
        $i=1;
        while ($donnees = $result->fetch_assoc())
            {
                echo "<tr";
                if ($i%2 == 1) {    
                     # code...
                echo ">";
                 }
                 else { 
                 echo " bgcolor='yellow'>"; 
                 } 
                    echo '<td class="center">'.$donnees['numlivre'].'</td>';
                    echo '<td>'.utf8_encode($donnees['titre']).'</td>';
                    echo '<td>'.utf8_encode($donnees['auteur']).'</td>';
                    echo '<td>'.$donnees['genre'].'</td>';
                    echo '<td align="right">'.$donnees['prix'].'</td>';
                    echo '</tr>';
                    $i+=1;
            }
            $result->free();
    }

?>
    </table>
    <p align="center"><a href="?">Retour à l'accueil de la blibliothéque</a></p>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>