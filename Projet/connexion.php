<?php
    session_start();
    $servername = 'localhost';
    $username = 'root';
    $mdp = 'root';
    $dbname = 'idaw';
    $utilisateur = array("ID_UTILISATEUR", "NOM", "PRENOM", "LOGIN", "PASSWORD", "TRANCHE_AGE", "SEXE", "BESOIN_ENERGITIQUE");

    $conn = mysqli_connect($servername, $username, $mdp, $dbname);
    if(!$conn){
        die('Erreur : ' .mysqli_connect_error());
    }
    
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
            header('Location: index.php');
        }else{
            echo "Votre login ou mot de passe est incorrect";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Projet</title>
    </head>
    <body>
        <form id="login_form" action="" method="POST">
            <table> 
                <tr>
                    <th>Login :</th>
                    <td><input type="text" name="login" autocomplete="off"></td>
                </tr>
                <tr>
                    <th>Mot de passe :</th>
                    <td><input type="password" name="password" autocomplete="off"></td>
                </tr>
                <tr>
                    <th></th>
                    <td><button type="submit"  name="submit">Connexion</button></td>
                </tr>
            </table>
        </form>