<?php

include_once '../models/auth.php';

if($_SERVER['REQUEST_METHOD'] === "POST"){

    if(isset($_POST['btn-Submit'])){

        if(isset($_POST["username"]) && isset($_POST["password"])){

            $username;
            $password;

            if(empty($_POST["username"])){

               echo "entre username";

            }else{

                $username = htmlspecialchars($_POST["username"]);

            }

            if(empty($_POST["password"])){

                echo "entre password";

            }else{
                
                $password = htmlspecialchars($_POST["password"]);

            }
            loginUser($username, $password);

        }

    }
}

?>