<?php
session_start();
/**
 * @param {string} $fullName c'est le nom complet de l'utilsateur
 * @param {string} $email c'est l'adresse mail de l'utilisateur 
 * @param {string} $password mot de passe de l'utilsateur
 * @param {string} $register variable boolean qui renvoit true so un utilisateur est ajouté et non au cas contraire
 */
function registerUser($fullName, $email, $password, $username){

    $_SESSION['name'] = $fullName;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = password_hash($password, PASSWORD_BCRYPT);
    $_SESSION['user'] = $username;

    $_SESSION["error"] = [];

    $_SESSION["PASS"] = password_hash($password, PASSWORD_BCRYPT);
    $_SESSION["USER"] = $username;

    echo " Enregistrement reussi ";
    header('location:../../pages/profil.php');

    return $_SESSION;
}
/**
 * @param {string} $username nom d'utilisateur
 * @param {string} $password mot de passe utilsateur
 * 
 */

function loginUser($username,$password){

    if($_SESSION["user"] === $username  ){

        if(password_verify($password, $_SESSION["password"])){

            header('location:../../pages/profil.php');
        }else{
            // echo "<script>alert('Mot de passe incorrect'),window.location.href='../../index.php'</script>";
            echo $_SESSION["error"] = 'Mot de passe incorrect';
            header('location:../../index.php');


        }

    }else{
        // echo "<script> alert('Username incorrect'),window.location.href='../../index.php'</script>";
        // header('location:../../index.php');
        echo $_SESSION["error"] = 'Username incorrect';
        header('location:../../index.php');
    }
}
?>