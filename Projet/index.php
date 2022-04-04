<?php
    require_once('frontend/template_header.php');
    require_once('backend/security.php');
?>


<div class="container my-5">
    <h1 class="text-center">Accueil</h1>
        <div class="my-2">
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#ajoutAlimentModal">Ajouter un aliment</button>
            <a href="backend/deconnexion.php"><button type="button" class="btn btn-danger" style="float: right;">Déconnexion</button></a>
        </div>
        <table id="tableAliment" class="table table-dark table-hover">
        <thead>
            <th>Id</th>
            <th>Libellé</th>
            <th>Date</th>
            <th>Calories</th>
            <th>Opérations</th>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

<!-- Modal Ajout Aliment -->
<div class="modal fade" id="ajoutAlimentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ajoutAlimentLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ajoutAlimentLabel">Aliment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row my-3 align-items-center">
            <div class="col-2">
                <label for="libelle" class="col-form-label">Libellé</label>
            </div>
            <div class="col-10">
                <input type="text" class="form-control" id="libelle" autocomplete="off">
            </div>
        </div>
        <div class="row my-3 align-items-center">
            <div class="col-2">
                <label for="date" class="col-form-label">Date</label>
            </div>
            <div class="col-10">
                <input type="date" class="form-control" id="date" autocomplete="off">
            </div>
        </div>
        <div class="row my-3 align-items-center">
            <div class="col-2">
                <label for="calories" class="col-form-label">Calories</label>
            </div>
            <div class="col-10">
                <input type="number" class="form-control" id="calories" autocomplete="off">
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success ajoutbtn">Ajouter</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
      </div>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Fichier JS -->
<script src='frontend/fichierjs.js'></script>

<?php require_once('frontend/template_footer.php'); ?>