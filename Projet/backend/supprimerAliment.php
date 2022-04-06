<?php 
    require_once('database.php');
    $id = $_POST['id'];
    $query = "DELETE FROM ALIMENT WHERE ID_ALIMENT='$id'";
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