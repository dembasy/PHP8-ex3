<?php
// defintion de la session qui permettra de l'utiliser dans la deuxieme page 
session_start();
// le dollar session sert a assigné une valeur comme une variable et va pouvoir etre utilisé dans les autres pages 
$_SESSION["lastname"] = "Dupont";
$_SESSION["firstname"] = "Pierre";
$_SESSION["age"] = 25;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>exercice 2</title>
    </head>
    <body>
        <p>

            <?php
            // affichage des variables 
            echo $_SESSION["lastname"] . ' ' . $_SESSION["firstname"]. ' '. $_SESSION["age"] ;
            ?>

        </p>
        <a href="user.php">Ah oui ?</a>
    </body>
</html>