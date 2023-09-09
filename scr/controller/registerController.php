<?php
include_once '../models/auth.php';
if($_SERVER['REQUEST_METHOD'] === "POST"){

    if (isset($_POST['btn-Validate'])) {


        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])){

            if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])){
                $name = htmlentities($_POST['name']);
                $email = htmlentities($_POST['email']);
                $password = htmlentities($_POST['password']);
                $username = htmlentities($_POST['username']);

                registerUser($name,$email,$password,$username);

            }else{
                echo " <script> alert('ERROR,Veuillez remplir tous les champs'), window.location.href='../../pages/register.php'</script>";
            }    
        }
    }
}
?>,