<?php 
    require_once("Projet/frontend/template_header.php");
    require_once("Projet/backend/connecter.php");
?>
    <br><br>
    <form calss="container" method="POST">
        <div class="mb-3">
            <input type="email" class="form-control" name="login" autocomplete="off" placeholder="Login">
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" name="password" autocomplete="off" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Se connecter</button>
        <button type="submit" class="btn btn-primary" name="inscription">S'inscrire</button>
    </form>
</body>
</html>

<?php
    // session_start();
    // $servername = 'localhost';
    // $username = 'root';
    // $mdp = 'root';
    // $dbname = 'idaw';
    // $utilisateur = array("ID_UTILISATEUR", "NOM", "PRENOM", "LOGIN", "PASSWORD", "TRANCHE_AGE", "SEXE", "BESOIN_ENERGITIQUE");

    // $conn = mysqli_connect($servername, $username, $mdp, $dbname);
    // if(!$conn){
    //     die('Erreur : ' .mysqli_connect_error());
    // }
    
    // if(isset($_POST['submit'])){
    //     $login = $_POST['login'];
    //     $password = $_POST['password'];
    //     $query = "SELECT * FROM UTILISATEUR WHERE LOGIN = '$login' AND PASSWORD = '$password'";
    //     $resultat = mysqli_query($conn,$query);
    //     $row = mysqli_fetch_array($resultat);
    //     if(mysqli_num_rows($resultat)>0){
    //         $_SESSION['login'] = $login;
    //         $_SESSION['password'] = $password;
    //         $_SESSION['id'] = $row["ID_UTILISATEUR"];
    //         header('Location: index.php');
    //     }else{
    //         echo "Votre login ou mot de passe est incorrect";
    //     }
    // }
    // if(isset($_POST['inscription'])){
    //     header('Location: inscription.php');
    // }
?>

<!-- <form id="login_form" action="" method="POST">
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
            <th><button type="submit"  name="submit">Connexion</button></th>
            <td><button type="submit"  name="inscription">Inscription</button></td>
        </tr>
    </table>
</form> -->