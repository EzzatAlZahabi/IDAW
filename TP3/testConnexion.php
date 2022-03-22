<?php
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbname = 'idaw';

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        die('Erreur : ' .mysqli_connect_error());
    }

    $query = "SELECT * FROM COMPTE";
    $resultat = mysqli_query($conn,$query);
?>