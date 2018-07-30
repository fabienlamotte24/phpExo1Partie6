<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1</title>
  </head>
  <body>
    <?php
    /*Affichage des variables de l'url*/
    if(isset($_GET['lastname']) && isset($_GET['firstname'])){
      echo $_GET['firstname'] . ' ' . $_GET['lastname'];
    }
    ?>
  </body>
</html>
