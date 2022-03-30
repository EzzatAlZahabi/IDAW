<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <title>Projet</title>
    </head>
    <body>
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
        if(isset($_POST['inscription'])){
            header('Location: inscription.php');
        }
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