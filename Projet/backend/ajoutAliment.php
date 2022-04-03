<?php
    require_once('database.php');

    if(isset($_POST['libelle']) && isset($_POST['date']) && isset($_POST['calories'])){
        $libelle = $_POST['libelle'];
        $date = $_POST['date'];
        $calories = $_POST['calories'];
    }
    $query = "INSERT INTO ALIMENT (LIBELLE, DATE, CALORIES) VALUES ('$libelle', '$date', '$calories')";
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