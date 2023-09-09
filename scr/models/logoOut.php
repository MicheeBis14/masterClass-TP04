<?php
session_start();

function logoOut(){

        if( !isset($_SESSION['USER']) || !isset($_SESSION['PASS']) ){

            if(empty($_SESSION['password']) || empty($_SESSION['user'])){

                header("location: pages/register.php");
            }
        }
    }
//    logoOut();

?>