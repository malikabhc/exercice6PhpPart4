<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 6/4</title>
  </head>
  <body>
    <p>
      <?php
        function sentence($firstName, $lastName, $age){
          return 'Bonjour ' . $firstName . ' ' . $lastName . ', tu as ' . $age . ' ans.';
        }
        echo sentence('Jacques', 'Dupond', 35); //Mettre les données dans l'ordre de base
      ?>
    </p>
  </body>
</html>
