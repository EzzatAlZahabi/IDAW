<?php 
    require_once('../frontend/template_header.php');
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

<br><br>
<form method="POST">
    <div class="container">
        <div class="mb-3">
            <input type="text" class="form-control" name="NOM" autocomplete="off" placeholder="Nom" required>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="PRENOM" autocomplete="off" placeholder="Prénom" required>
        </div>
        <div class="mb-3">
            <select class="form-select" neme="SEXE" required>
                <option selected>Sexe</option>
                <option value="M">M</option>
                <option value="F">F</option>
                <option value="Autre">Autre</option>
            </select>
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" name="AGE" autocomplete="off" placeholder="Âge" required>
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" name="BESOIN_ENERGITIQUE" autocomplete="off" placeholder="Besoin énergitique" required>
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" name="LOGIN" autocomplete="off" placeholder="Login" required>
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" name="PASSWORD" autocomplete="off" placeholder="Mot de passe" required>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <button type="submit" class="btn btn-dark" name="submit">S'inscrire</button>
            <button type="reset" class="btn btn-dark" name="reset">Réinitialiser</button>
        </div>
    </div>
</form>
