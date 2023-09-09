<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="block">
        <form action="../scr/controller/registerController.php" method="POST" class="form CreateAccunt" enctype="multipart/form-data" autocomplete="off">

            <h1 class="second">S'enregistrer</h1>

            <div class="index">
                <input type="text" name="name" placeholder="Nom complet">
            </div>

            <div class="index">
                <input type="text" name="email" placeholder="Adresse email">
            </div>

            <div class="index">
                <input type="type" name="username" placeholder="username">
            </div>

            <div class="index">
                <input type="password" name="password" placeholder="Mot de passe">
            </div>

            <div class="index creationCompte">
                <p>Déjà membre ?</p><a href="../index.php">connectez-vous!</a>
            </div>

            <div class="index btn">
                <button type="submit" name="btn-Validate">Validate</button>
            </div>
            
        </form>
    </div>

</body>

</html>