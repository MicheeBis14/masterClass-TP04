<?php


    include_once('../scr/models/auth.php');

    if( empty($_SESSION['user']) && empty($_SESSION['password']) ){

        header("location: ../index.php");

    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="blockAccueil">
        <header class="head">

        <div class="items">
            <div class="img"> 
                <img src="../assets/images/user.png" alt="Photo de Michee">
            </div>
        </div>

        <div class="items profil ">
                <h1>Bienvenue dans votre compte <?=$_SESSION['name']?> </h1>
                <!-- <div class="infos"> -->
                    <p><?= $_SESSION['user']?></p>
                    <p><?= $_SESSION['email']?></p>
                    <form action="" class="form">
                        <div class="sessionlogoout">
                            
                        </div>
                    </form>
                <!-- </div> -->
        </div>

        <div class="items lien"><a href="../scr/controller/loginOut.php">Déconnexion</a></div>
            
        </header>
    </div>
    
</body>
</html>