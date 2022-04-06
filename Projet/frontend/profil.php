<?php 
    // Connexion à la BDD
    require_once('../Projet/backend/database.php');
    if(isset($_POST['valider'])){
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
        echo $nom;
        if($resultat == true){
            // $_SESSION['login'] = $row["LOGIN"];
            // $_SESSION['password'] = $row["PASSWORD"];
            // $_SESSION['id'] = $row["ID_UTILISATEUR"];
            // $_SESSION['nom'] = $row["NOM"];
            // $_SESSION['prenom'] = $row["PRENOM"];
            // $_SESSION['age'] = $row["AGE"];
            // $_SESSION['sexe'] = $row["SEXE"];
            // $_SESSION['besoin'] = $row["BESOIN"];
            echo $nom;  
            header("Refresh:0");
        }else{
            echo "Échec de modification";
        }
    }
?>

<br>
<form method="POST">
    <div class="container">
        <div class="row my-3 align-items-center">
            <div class="col-1">
                <label for="nomUpdate" class="form-label">Nom</label>
            </div>
            <div class="col-11">
                <input type="text" class="form-control" name="NOM" id="nomUpdate" autocomplete="off" value="<?php echo $_SESSION['nom']; ?>" required>
            </div>
        </div>
        <div class="row my-3 align-items-center">
            <div class="col-1">
                <label for="prenomUpdate" class="form-label">Prénom</label>
            </div>
            <div class="col-11">
                <input type="text" class="form-control" name="PRENOM" id="prenomUpdate" autocomplete="off" value="<?php echo $_SESSION['prenom']; ?>" required>
            </div>
        </div>
        <div class="row my-3 align-items-center">
            <div class="col-1">
                <label for="sexeUpdate" class="form-label">Sexe</label>
            </div>
            <div class="col-11">
                <select class="form-select" neme="SEXE" id="sexeUpdate" required>
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
        </div>
        <div class="row my-3 align-items-center">
            <div class="col-1">
                <label for="ageUpdate" class="form-label">Âge</label>
            </div>
            <div class="col-11">
                <input type="number" class="form-control" name="AGE" id="ageUpdate" autocomplete="off" value="<?php echo $_SESSION['age']; ?>" required>
            </div>
        </div>
        <div class="row my-3 align-items-center">
            <div class="col-1">
                <label for="besoinUpdate" class="form-label">Besoin énergitique</label>
            </div>
            <div class="col-11">
                <input type="number" class="form-control" name="BESOIN_ENERGITIQUE" id="besoinUpdate" autocomplete="off" value="<?php echo $_SESSION['besoin']; ?>" required>
            </div>
        </div>
        <div class="row my-3 align-items-center">
            <div class="col-1">
                <label for="loginUpdate" class="form-label">Login</label>
            </div>
            <div class="col-11">
                <input type="email" class="form-control" name="LOGIN" id="loginUpdate" autocomplete="off" value="<?php echo $_SESSION['login']; ?>" required>
            </div>
        </div>
        <div class="row my-3 align-items-center">
            <div class="col-1">
                <label for="passwordUpdate" class="form-label">Password</label>
            </div>
            <div class="col-11">
                <input type="text" class="form-control" name="PASSWORD" id="passwordUpdate" autocomplete="off" value="<?php echo $_SESSION['password']; ?>" required>
            </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <button type="submit" class="btn btn-success" name="valider">Valider</button>
            <button type="reset" class="btn btn-danger" name="rein">Annuler</button>
        </div>
    </div>
</form>