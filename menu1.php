        <nav class="navbar navbar-expand-lg navbar-dark nav-custom">
          <a class="navbar-brand" href="#">La Bibliothéque</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item <?php if(!$_GET) echo 'active';?>">
                <a class="nav-link" href="?">Accueil<?php if(!$_GET) echo '<span class="sr-only">(current)</span>';?></a>
              </li>
              <li class="nav-item <?php if($_GET['table']=='livre') echo 'active'; ?>">
                <a class="nav-link" href="?table=livre">Livres</a>
              </li>
              <li class="nav-item <?php if($_GET['table']=='personne') echo 'active'; ?>">
                <a class="nav-link" href="?table=personne" >Membres</a>
              </li>
              <li class="nav-item <?php if($_GET['table']=='emprunt') echo 'active';?>">
                <a class="nav-link" href="?table=emprunt" >Emprunts</a>
              </li>
              <li class="nav-item <?php if($_GET['contact']=='yes') echo 'active';?>">
                <a class="nav-link" href="?contact=yes" >Contact</a>
              </li>
            </ul>
              <div class="formulaire">
                <form method="get" action="" class="form-inline my-2 my-lg-0" >
                <input type="hidden" name="table" value="livre">
                <input class="form-control mr-sm-2" type="search" name="search" placeholder="Recherches" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0 bg-dark btn-custom" type="submit">Recherches</button>
                </form>
              </div>
          </div>
        </nav>