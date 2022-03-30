<?php
    require_once("Projet/backend/database.php");
    if(isset($_POST['submit'])){
        $login = $_POST['login'];
        $password = $_POST['password'];
        $query = "SELECT * FROM UTILISATEUR WHERE LOGIN = '$login' AND PASSWORD = '$password'";
        $resultat = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($resultat);
        if(mysqli_num_rows($resultat)>0){
            $_SESSION['login'] = $login;
            $_SESSION['password'] = $password;
            $_SESSION['id'] = $row["ID_UTILISATEUR"];
            // header('Location: index.php');
        }else{
            // echo "Votre login ou mot de passe est incorrect";
        }
    }
    // if(isset($_POST['inscription'])){
    //     header('Location: inscription.php');
    // }
?>