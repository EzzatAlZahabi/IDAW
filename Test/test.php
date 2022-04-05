<?php
    $servername = 'localhost';
    $username = 'root';
    $mdp = 'root';
    $dbname = 'idaw';
    $conn = mysqli_connect($servername, $username, $mdp, $dbname);
    if(!$conn){
        die('Erreur : ' .mysqli_connect_error());
    }

    // $id = $_POST['id'];
    $query = "SELECT * FROM ALIMENT";
    // $query = "SELECT * FROM ALIMENT WHERE ID_ALIMENT='$id'";
    $resultat = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($resultat);
    $x = json_encode($row);
    echo $x;
?>
