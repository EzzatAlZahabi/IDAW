<?php
    // Connexion à la BDD
    require_once('database.php');
    if(isset($_POST['submit'])){
        // Récupération des données saisies
        $nom = $_POST['NOM'];
        $prenom = $_POST['PRENOM'];
        $login = $_POST['LOGIN'];
        $password = $_POST['PASSWORD'];
        $age = $_POST['AGE'];
        $sexe = $_POST['SEXE'];
        $besoin = $_POST['BESOIN_ENERGITIQUE'];
        // Insertion des données dans la BDD
        $query_insert = "INSERT INTO UTILISATEUR (NOM, PRENOM, LOGIN, PASSWORD, AGE, SEXE, BESOIN_ENERGITIQUE) VALUES ('$nom', '$prenom', '$login', '$password', '$age', '$sexe', '$besoin')";
        $resultat_insert = mysqli_query($conn,$query_insert);
        $query_select = "SELECT * FROM UTILISATEUR WHERE LOGIN = '$login' AND PASSWORD = '$password'";
        $resultat_select = mysqli_query($conn,$query_select);
        $row = mysqli_fetch_array($resultat_select);
        if(mysqli_num_rows($resultat_select)>0){
            $_SESSION['login'] = $login;
            $_SESSION['password'] = $password;
            $_SESSION['id'] = $row["ID_UTILISATEUR"];
            header('Location: ../index.php');
        }else{
            echo "Échec de création de compte";
        }
    }
?>