<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Liste des Membres</title>
  </head>
  <body>
    <header>
    <!-- Menu -->
    <?php require_once('menu.php'); ?>
    <!-- Fin menu -->
    <h1 class="center">Liste des Membres</h1>
    <hr class="separator">
        <!-- Fin titre -->
    </header> 
     <section class="container-fluid membres">
        <div class="container liste-membres">
            <div class="row">
    <?php
        /* nom du script : Afficher_personne.php
    Description : script qui affiche la table livre vers : 2.0 */
    // intégrer le fichier connection.php
    require_once('connection.php');

    // envoyer une requete pour obtenir le contenu de la table personne
    $query='SELECT * FROM personne';
    if ($result = $mysqli->query($query)) {

    while ($donnees = $result->fetch_assoc())
        {
        ?>
            <article class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 item-pers"> 
                    <h2><?= utf8_encode($donnees['nom']).' '.utf8_encode($donnees['prenom']) ;?></h2>
                    <img src="img/profil_<?php echo $donnees['numpersonne'] ?>.jpg" alt="<?= utf8_encode($donnees['nom']) ;?>">
                    <p class="idpers">Id membre : <?= $donnees['numpersonne'] ?></p>
                    <p class="ville">Ville : <?= $donnees['ville'] ?></p>
                    <hr class="separator">
            </article>
        <?php
        /*echo "<tr";
        if ($i%2 == 1) {
             # code...
        echo ">";
         }
         else { 
         echo " bgcolor='yellow'>"; 
         } 
            echo '<td class="center">'.$donnees['numpersonne'].'</td>';
            echo '<td>'.utf8_encode($donnees['nom']).'</td>';
            echo '<td>'.utf8_encode($donnees['prenom']).'</td>';
            echo '<td>'.$donnees['ville'].'</td>';
            echo '</tr>';
            $i++;*/
        }
    $result->free();
    }
?>
            </div>
        </div>
    </section>
    <p align="center"><a href="?">Retour à l'accueil de la blibliothéque</a></p>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>