<br>
<form>
    <div class="container">
        <div class="mb-3">
            <input type="text" class="form-control" name="NOM" autocomplete="off" required>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="PRENOM" autocomplete="off" required>
        </div>
        <div class="mb-3">
            <select class="form-select" neme="SEXE" required>
                <option value="M">M</option>
                <option value="F">F</option>
                <option value="Autre">Autre</option>
            </select>
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" name="AGE" autocomplete="off" required>
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" name="BESOIN_ENERGITIQUE" autocomplete="off" required>
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" name="LOGIN" autocomplete="off" required>
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" name="PASSWORD" autocomplete="off" required>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <button type="submit" class="btn btn-success" name="submit">Valider</button>
            <button type="reset" class="btn btn-danger" name="reset">Annuler</button>
        </div>
    </div>
</form>