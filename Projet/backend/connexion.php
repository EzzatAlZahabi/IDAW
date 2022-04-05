<?php 
    require_once('../frontend/template_header.php');
    // Connexion à la BDD
    require_once('database.php');
    if(isset($_POST['submit'])){
        // Récupération des données saisies
        $login = $_POST['login'];
        $password = $_POST['password'];
        // Récupération des données dans la BDD
        $checkUserQuery = "SELECT * FROM UTILISATEUR WHERE LOGIN = '$login'";
        $checkUserResult = mysqli_query($conn,$checkUserQuery);
        $checkUserRow = mysqli_fetch_array($checkUserResult);
        // Vérifier si l'utilisateur existe
        if(mysqli_num_rows($checkUserResult)>0){
            // Vérifier le mdp
            if($password == $checkUserRow["PASSWORD"]){
                $_SESSION['login'] = $login;
                $_SESSION['password'] = $password;
                $_SESSION['id'] = $checkUserRow["ID_UTILISATEUR"];
                header('Location: ../index.php');
            }else{
                echo "Mot de passe incorrect";
            }
        }else{
            echo "Pas de compte pour ce login";
        }
    }

    if(isset($_POST['inscription'])){
        header('Location: inscription.php');
    }   
?>
    <br><br>
    <form method="POST">
        <div class="container">
            <div class="mb-3">
                <input type="email" class="form-control" name="login" autocomplete="off" placeholder="Login">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" autocomplete="off" placeholder="Password">
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <button type="submit" class="btn btn-dark" name="submit">Se connecter</button>
                <button type="submit" class="btn btn-dark" name="inscription">S'inscrire</button>
            </div>
        </div>
    </form>