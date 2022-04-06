<?php 
    // Connexion à la BDD
    require_once('../Projet_final/backend/database.php');
    echo $_SESSION['id'];
    echo $_SESSION['nom'];
    if(isset($_POST['submit'])){
        // Récupération des données saisies
        $id = $_session['id'];
        $nom = $_POST['NOM'];
        $prenom = $_POST['PRENOM'];
        $login = $_POST['LOGIN'];
        $password = $_POST['PASSWORD'];
        $age = $_POST['AGE'];
        $sexe = $_POST['SEXE'];
        $besoin = $_POST['BESOIN_ENERGITIQUE'];
        // Insertion des données dans la BDD
        $query_update = "UPDATE UTILISATEUR SET NOM = '$nom', PRENOM = '$prenom', AGE = '$age', SEXE = '$sexe', BESOIN_ENERGITIQUE = '$besoin' WHERE ID_UTILISATEUR = '$id'";
        $resultat = mysqli_query($conn,$query_update);
        
        $query_select = "SELECT * FROM UTILISATEUR WHERE ID_UTILISATEUR = '$id'";
        $resultat_select = mysqli_query($conn,$query_select);
        $row = mysqli_fetch_array($resultat_select);
        if(mysqli_num_rows($resultat_select)>0){
            $_SESSION['login'] = $row["LOGIN"];
            $_SESSION['password'] = $row["PASSWORD"];
            $_SESSION['id'] = $row["ID_UTILISATEUR"];
            $_SESSION['nom'] = $row["NOM"];
            $_SESSION['prenom'] = $row["PRENOM"];
            $_SESSION['age'] = $row["AGE"];
            $_SESSION['sexe'] = $row["SEXE"];
            $_SESSION['besoin'] = $row["BESOIN"];
        }else{
            echo "Échec de modification";
        }
    }
?>

<br>
<form method="POST">
    <div class="container">
        <div class="mb-3">
            <input type="text" class="form-control" name="NOM" autocomplete="off" value="<?php echo $_SESSION['nom']; ?>" required>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="PRENOM" autocomplete="off" value="<?php echo $_SESSION['prenom']; ?>" required>
        </div>
        <div class="mb-3">
            <select class="form-select" neme="SEXE" required>
            <?php
                    switch($_SESSION['sexe']) {
                        case 'M':
                            echo '<option value="M">M</option>
                                <option value="F">F</option>
                                <option value="Autre">Autre</option>';
                            break;
                        case 'F':
                            echo '<option value="F">F</option>
                                <option value="M">M</option>
                                <option value="Autre">Autre</option>';
                            break;
                        case 'Autre':
                            echo '<option value="Autre">Autre</option>
                                <option value="F">F</option>
                                <option value="M">M</option>';
                            break;
                    }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" name="AGE" autocomplete="off" value="<?php echo $_SESSION['age']; ?>" required>
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" name="BESOIN_ENERGITIQUE" autocomplete="off" value="<?php echo $_SESSION['besoin']; ?>" required>
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" name="LOGIN" autocomplete="off" value="<?php echo $_SESSION['login']; ?>" required>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="PASSWORD" autocomplete="off" value="<?php echo $_SESSION['password']; ?>" required>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <button type="submit" class="btn btn-success" name="submit">Valider</button>
            <button type="reset" class="btn btn-danger" name="reset">Annuler</button>
        </div>
    </div>
</form>