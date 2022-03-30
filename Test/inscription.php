<?php
    session_start();
    $servername = 'localhost';
    $username = 'root';
    $mdp = 'root';
    $dbname = 'idaw';
    $utilisateur = array("ID_UTILISATEUR", "NOM", "PRENOM", "LOGIN", "PASSWORD", "AGE", "SEXE", "BESOIN_ENERGITIQUE");

    $conn = mysqli_connect($servername, $username, $mdp, $dbname);
    if(!$conn){
        die('Erreur : ' .mysqli_connect_error());
    }
    
    if(isset($_POST['submit'])){
        $nom = $_POST['NOM'];
        $prenom = $_POST['PRENOM'];
        $login = $_POST['LOGIN'];
        $password = $_POST['PASSWORD'];
        $age = $_POST['AGE'];
        $sexe = $_POST['SEXE'];
        $besoin = $_POST['BESOIN_ENERGITIQUE'];
        $query_insert = "INSERT INTO UTILISATEUR (NOM, PRENOM, LOGIN, PASSWORD, AGE, SEXE, BESOIN_ENERGITIQUE) VALUES ('$nom', '$prenom', '$login', '$password', '$age', '$sexe', '$besoin')";
        $resultat_insert = mysqli_query($conn,$query_insert);
        $query_select = "SELECT * FROM UTILISATEUR WHERE LOGIN = '$login' AND PASSWORD = '$password'";
        $resultat_select = mysqli_query($conn,$query_select);
        $row = mysqli_fetch_array($resultat_select);
        if(mysqli_num_rows($resultat_select)>0){
            $_SESSION['login'] = $login;
            $_SESSION['password'] = $password;
            $_SESSION['id'] = $row["ID_UTILISATEUR"];
            header('Location: index.php');
        }else{
            echo "Échec de création de compte";
        }
    }
?>

<form id="login_form" action="" method="POST">
    <table> 
        <tr>
            <th>Nom :</th>
            <td><input type="text" name="NOM" autocomplete="off" required></td>
        </tr>
        <tr>
            <th>Prénom :</th>
            <td><input type="text" name="PRENOM" autocomplete="off" required></td>
        </tr>
        <tr>
            <th>Âge :</th>
            <td><input type="number" name="AGE" autocomplete="off" required></td>
        </tr>
        <tr>
            <th>M :</th>
            <td><input type="radio" name="SEXE" value="M" autocomplete="off" required></td>
        </tr>
        <tr>
            <th>F :</th>
            <td><input type="radio" name="SEXE" value="F" autocomplete="off"></td>
        </tr>
        <tr>
            <th>Autre :</th>
            <td><input type="radio" name="SEXE" value="Autre" autocomplete="off"></td>
        </tr>
        <tr>
            <th>Besoin énergitique :</th>
            <td><input type="number" name="BESOIN_ENERGITIQUE" autocomplete="off" required></td>
        </tr>
        <tr>
            <th>Login :</th>
            <td><input type="text" name="LOGIN" autocomplete="off" required></td>
        </tr>
        <tr>
            <th>Mot de passe :</th>
            <td><input type="password" name="PASSWORD" autocomplete="off" required></td>
        </tr>
        <tr>
            <th><button type="submit"  name="submit">Créer</button></th>
            <td><button type="reset"  name="reset">Réinitialiser</button></td>
        </tr>
    </table>
</form>