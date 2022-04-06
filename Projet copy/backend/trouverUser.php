<?php 
    require_once('database.php');
    $id = $_POST['id'];
    $query = "SELECT * FROM UTILISATEUR WHERE ID_UTILISATEUR='$id'";
    $resultat = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($resultat);
    echo json_encode($row);
?>