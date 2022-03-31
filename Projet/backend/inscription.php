<?php 
    require_once('../frontend/template_header.php');
    require_once('inscrire.php');
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
</body>
</html>