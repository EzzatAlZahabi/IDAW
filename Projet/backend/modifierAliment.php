<?php 
    require_once('database.php');
    $id = $_POST['id'];
    $libelle = $_POST['libelle'];
    $date = $_POST['date'];
    $calories = $_POST['calories'];

    $query = "UPDATE aliment SET
            LIBELLE = '$libelle',
            DATE = '$date',
            CALORIES = '$calories'
            WHERE ID_ALIMENT = '$id'";
    $resultat = mysqli_query($conn,$query);

    if($resultat == true){
        $data = array(
            'status'=>'true',
        );
        echo json_encode($data);
    }else{
        $data = array(
            'status'=>'false',
        );
        echo json_encode($data);
    } 
?>