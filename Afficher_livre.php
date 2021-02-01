<!doctype html>
<html lang="en">
  <head>

     <?php require_once('head.php') ?>

    <title>Liste des Livres</title>
  </head>
  <body>
    <header>
        <!-- Menu -->
        <?php require_once('menu.php'); ?>
        <!-- Fin menu -->
        <!-- Titre -->
        <h1 class="center">Liste des Livres</h1>
        <hr class="separator">
        <!-- Fin titre -->
    </header> 
     <section class="container-fluid livres">
        <div class="container liste-livres">
            <div class="row">   
    <?php
    /* nom du script : afficher_livre.php
    Description : script qui affiche la table livre vers : 2.0 */
    // intégrer le fichier connection.php
    require_once('connection.php');
    // verifier si il y a une recherche en cour
    if(isset($_GET['search'])){
        $search=utf8_decode($_GET['search']);
        $query='SELECT * FROM livre WHERE titre LIKE "%'.$search.'%" OR auteur LIKE "%'.$search.'%"' ;
    }else{
    // envoyer une requete pour obtenir le contenu de la table livre
        $query='SELECT * FROM livre';
    }
    $nbr_livres=0;
    if ($result = $mysqli->query($query)) {
        // liste des données
        while ($donnees = $result->fetch_assoc())
            {

             ?>    
                <article class="col-xl-3 col-md-6 col-lg-4 col-12 col-sm-12 item-livre"> 
                    <!--mt-1 mb-1 ml-1 mr-1 -->
                    <h2><?= utf8_encode($donnees['titre']) ;?></h2>
                    <img src="img/cover_<?php echo $donnees['numlivre'] ?>.jpg" alt="<?= utf8_encode($donnees['titre']) ;?>">
                    <p class="id">Id livre : <?= $donnees['numlivre'] ?></p>
                    <p class="genre">Genre : <?= $donnees['genre'] ?></p>
                    <p class="auteur"><a href="?table=livre&search=<?= utf8_encode($donnees['auteur']) ?>">Auteur : <?= utf8_encode($donnees['auteur']) ?></a></p>
                    <p class="prix">Prix : <?= $donnees['prix'] ?> €</p>
                    <p class="resume">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam harum dolorum necessitatibus fugiat cum omnis fuga incidunt laboriosam eos a ipsa neque repudiandae deserunt amet repellat, praesentium! Tempore, asperiores dolorum!</p>
                    <hr class="separator">
                </article> 
            <?php
            $nbr_livres++;            
            }
            if ( $nbr_livres==0){
            echo '<p class="resultats">Il n\'y aucun résultat pour '.$_GET['search'] ;
            }
            $result->free();
    }

?>
            </div>
        </div>
    </section>

    <p align="center"><a href="?table=livre">Retour à l'ensemble de la blibliothéque</a></p>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>