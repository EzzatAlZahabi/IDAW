<?php 
    require_once('database.php');
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $age = $_POST['age'];
    $sexe = $_POST['sexe'];
    $besoin = $_POST['besoin'];

    $query = "UPDATE UTILISATEUR SET
            NOM = '$nom',
            PRENOM = '$prenom',
            LOGIN = '$login'
            PASSWORD = '$password'
            AGE = '$age'
            SEXE = '$sexe'
            BESOIN_ENERGITIQUE = '$besoin'
            WHERE ID_UTILISATEUR = '$id'";
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