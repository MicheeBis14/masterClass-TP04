<?php
    // require "scr/models/logoOut.php";
    include "scr/models/auth.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <?php
    
        if(isset($_SESSION["error"])){
            echo $_SESSION["error"];
        }
    ?>

    <div class="block">

            <form action="scr/controller/loginController.php" method="POST" class="form" autocomplete="off" >

                <h1> Connexion</h1>

                <div class="index">
                    <input type="text" name="username" placeholder="Username">
                </div>

                <div class="index">
                    <input type="password" name="password" placeholder="Password">
                </div>

                <div class="index btn">
                    <button type="submit" name="btn-Submit">Se connecter</button>
                </div>

                <div class="index creationCompte">
                    <p>Pas encore membre ?</p><a href="pages/register.php">créez un compte !</a>
                </div>

            </form>
    </div>
</body>
</html>