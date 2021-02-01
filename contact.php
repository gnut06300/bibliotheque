<!doctype html>
<html lang="en">
  <head>

     <?php require_once('head.php') ?>

    <title>Nous contactez !</title>
  </head>
  <body>
    <header>
        <!-- Menu -->
        <?php require_once('menu.php'); ?>
        <!-- Fin menu -->
        <!-- Titre -->
        <h1 class="center">Nous contacter !</h1>
        <hr class="separator">
        <!-- Fin titre -->
    </header> 
     <section class="container-fluid contact">
        <div class="container form-contact">
            <?php 
              if(isset($_POST['envoyer']) AND $_POST['envoyer']='Envoyer'){
               $message="Nom : ".$_POST['name']."\nEmail : ".$_POST['email']."\nMessage : ".$_POST['message'];
                mail('gnut@gnut.eu','Message du formulaire de la bibliothéque du Parc Impérial',$message);
                echo '<p class="alert">Votre message à bien été envoyé</p>';
              }
         
            ?>  
            <div class="row">
            
              <div class="col-md-6 col-md-offset-3 formulaire_site">
                <div class="well well-sm">
                  <form class="form-horizontal" action="?contact=yes" method="post">
                  <fieldset>
                             
                    <!-- Name input-->
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="name">Nom</label>
                      <div class="col-md-9">
                        <input id="name" name="name" type="text" placeholder="Votre nom" class="form-control" required>
                      </div>
                    </div>
            
                    <!-- Email input-->
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="email" >Votre E-mail</label>
                      <div class="col-md-9">
                        <input id="email" name="email" type="email" placeholder="Votre email" class="form-control" required>
                      </div>
                    </div>
            
                    <!-- Message body -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="message">Votre message</label>
                      <div class="col-md-9">
                        <textarea class="form-control" id="message" name="message" placeholder="Merci d'entrer votre message ici..." rows="5"></textarea>
                      </div>
                    </div>
            
                    <!-- Form actions -->
                    <div class="form-group">
                      <div class="col-md-12 text-right">
                        <button type="submit" name="envoyer" value="Envoyer" class="btn btn-primary btn-custom">Envoyer</button>
                      </div>
                    </div>
                  </fieldset>
                  </form>
                </div>
              </div>
            
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