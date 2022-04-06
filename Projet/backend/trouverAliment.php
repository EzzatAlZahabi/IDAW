<?php 
    require_once('database.php');
    $id = $_POST['id'];
    $query = "SELECT * FROM aliment WHERE ID_ALIMENT='$id'";
    $resultat = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($resultat);
    echo json_encode($row);
?>