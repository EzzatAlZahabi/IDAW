<?php
    if(isset($_GET['css'])) {
        setcookie("style",$_GET['css']);
    }
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbname = 'idaw';
    $utilisateur = array("ID_UTILISATEUR", "NOM", "PRENOM", "LOGIN", "PASSWORD", "TRANCHE_AGE", "SEXE", "BESOIN_ENERGITIQUE");

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        die('Erreur : ' .mysqli_connect_error());
    }
    
    if(isset($_POST['Se connecter'])){
        if(!empty($_POST['login']) AND !empty($_POST['password'])){
            $login = $_POST['login'];
            $mdp = $_POST['password'];
            $query = "SELECT * FROM UTILISATEUR WHERE LOGIN = $login AND PASSWORD = $mdp";
            $resultat = mysqli_query($conn,$query);
            if(mysqli_num_rows($resultat)>0){
                
            }else{
                echo "Votre login ou mot de passe est incorrect";
            }
        }else{
            echo "Veuillez compléter tous les champs";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TP3</title>
        <?php
            $style_def = 'style1';
            if(isset($_COOKIE['style'])){
                $style_def = $_COOKIE['style'];
            }
            echo "<link rel=\"stylesheet\" href=\"$style_def.css\" type=\"text/css\" media=\"screen\" charset=\"utf-8\" />";
        ?>
    </head>
    <body>
        <form id="style_form" action="" method="GET">
            <select name="css">
                <option value="style1">style1</option>
                <option value="style2">style2</option>
            </select>
            <input type="submit" value="Appliquer" />
        </form>

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
                    <td><input type="submit" name="Se connecter" value="Se connecter"></td>
                </tr>
            </table>
        </form>