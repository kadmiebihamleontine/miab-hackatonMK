<?php
    //connexion a la base de donne 
    $con = mysqli_connect("localhost", "root", "", "levelup");

    //gerer les accents et autres carracteres français 
    $req= mysqli_query($con , "SET NAMES UTF8");
    if(!$con){
        // si la connexion echoue , afficher 
        echo " Connexion échouée !" ;
    }


?>