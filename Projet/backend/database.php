<?php
    session_start();
    $servername = 'localhost';
    $username = 'root';
    $mdp = 'root';
    $dbname = 'idaw';

    $conn = mysqli_connect($servername, $username, $mdp, $dbname);
    if(!$conn){
        die('Erreur : ' .mysqli_connect_error());
    }
?>