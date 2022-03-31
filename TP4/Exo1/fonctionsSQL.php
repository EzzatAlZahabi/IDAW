<?php
    function databaseConnexion(){
        $servername = 'localhost';
        $username = 'root';
        $mdp = 'root';
        $dbname = 'idaw';
        $conn = mysqli_connect($servername, $username, $mdp, $dbname);
        if(!$conn){
            die('Erreur : ' .mysqli_connect_error());
        }
        return $conn;
    }

    function getAllUsers(){
        $conn = databaseConnexion();
        $query = "SELECT * FROM UTILISATEUR";
        $result = mysqli_query($conn,$query);
        $rows = mysqli_fetch_array($result);
        return $rows;
    }

    function readUser($id){
        $conn = databaseConnexion();
        $query = "SELECT * FROM UTILISATEUR WHERE ID_UTILISATEUR = '$id'";
        $result = mysqli_query($conn,$query);
        $rows = mysqli_fetch_array($result);
        if(mysqli_num_rows($result)>0){
            return $rows;
        }
    }

    function createUser($nom, $prenom, $login, $password, $age, $sexe, $besoin){
        $conn = databaseConnexion();
        $query = "INSERT INTO UTILISATEUR (NOM, PRENOM, LOGIN, PASSWORD, AGE, SEXE, BESOIN_ENERGITIQUE) VALUES ('$nom', '$prenom', '$login', '$password', '$age', '$sexe', '$besoin')";
        $result = mysqli_query($conn,$query);
        $rows = mysqli_fetch_array($result);
    }

    function updateUser($id, $nom, $prenom, $login, $password, $age, $sexe, $besoin){
        $conn = databaseConnexion();
        $query = "UPDATE UTILISATEUR set
                NOM = $nom,
                PRENOM = $prenom,
                LOGIN = $login,
                PASSWORD = $password,
                AGE = $age,
                SEXE = $sexe,
                BESOIN_ENERGITIQUE = $besoin
                WHERE ID_UTILISATEUR = '$id'";
        $result = mysqli_query($conn,$query);
        $rows = mysqli_fetch_array($result);
    }

    function deleteUser($id){
        $conn = databaseConnexion();
        $query = "DELETE FROM UTILISATEUR WHERE ID_UTILISATEUR = '$id'";
        $result = mysqli_query($conn,$query);
        $rows = mysqli_fetch_array($result);
    }
?>