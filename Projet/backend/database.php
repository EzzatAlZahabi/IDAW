<?php
    session_start();
    $servername = 'localhost';
    $username = 'IDAW';
    $mdp = 'IDAW';
    $dbname = 'idawProjet';

    $conn = mysqli_connect($servername, $username, $mdp, $dbname);
    if(!$conn){
        die('Erreur : ' .mysqli_connect_error());
    }
?>