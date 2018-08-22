<?php
// definition de la session qui sera utilisé pour récupérer les données de la page externe
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>exercice 2</title>
    </head>
    <body>
        <p>
            <?php
            // affichage des variables sur la deuxieme page  

            echo $_SESSION["lastname"] . ' ' . $_SESSION["firstname"] . ' ' . $_SESSION["age"];
            
            ?>

        </p>
    </body>
</html>
