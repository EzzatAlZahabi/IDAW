<?php 
    $servername = 'localhost';
    $username = 'root';
    $mdp = 'root';
    $dbname = 'idaw';
    $conn = mysqli_connect($servername, $username, $mdp, $dbname);
    if(!$conn){
        die('Erreur : ' .mysqli_connect_error());
    }
    // $query = "SELECT * FROM ALIMENT";
    // $resultat = mysqli_query($conn,$query);
    // $data = array();
    // while($row = mysqli_fetch_assoc($resultat)){
    //     $data[] = $row;
    //     $data['op'] = 'oui';
    // }
    // // echo json_encode($data);
    // $data_final = array(
    //     'data' => $data,
    // );
    // echo json_encode($data_final);
    $query = "SELECT * FROM ALIMENT";
    $resultat = mysqli_query($conn,$query);
    $data = array();
    $compteur = 0;
    while($row = mysqli_fetch_assoc($resultat)){
        $data[] = $row;
        $data[$compteur]['op'] = 'oui';
        $compteur += 1 ;
    }
    $data_final = array(
        'data' => $data,
    );
    echo json_encode($data_final);
?>