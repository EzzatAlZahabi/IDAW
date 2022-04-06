<section class="container mt-1">

    <div class="btn-group" role="group">
        <button type="button" class="btn btn-primary" id="addLog">Ajouter une entrée</button>
        <button type="button" class="btn btn-dark" id="cancelAdd">Annuler</button>
    </div>
    <h1 class="text-center">Journal</h1>
        <table class="table table-dark table-hovered">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Intitulé</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        
    <form action="" class="mt-4" id="logForm"> 
      <div class="form-group">
          <label for="intituleRepas">Intitulé du repas</label>
          <input type="text" class="form-control" id="intituleRepas" autocomplete="off"/>
      </div>
      <div class="form-group" id="formNbRepas">
          <label for="nbAliments">Nombre d'aliments</label>
          <input type="number" class="form-control" id="nbRepas" autocomplete="off"/>
        <!--<button type="button" class="btn btn-outline-primary btn-sm" id="checkNb">Valider</button> -->
      </div>
      <div id="caseAlimentAjoute">
        <label for="aliment">Aliment</label>
        <input type="text" class="form-control" id="nbRepas" autocomplete="off"/>
      </div>
      <div class="form-group">
          <label for="dateRepas">Date</label>
          <input type="date" class="form-control" id="dateRepas" autocomplete="off"/>
      </div>
      <input type="hidden" id="hidden" class="form-contro"/>
      <p></p>
      <button id="logSave" class="btn btn-primary" >Enregistrer</button>   
    </form>
    <p></p>
    <div id="contenu">
        <form class="mt-4">
            <div class="form-group">
                <label for="rechercherDate">Rechercher une entrée</label>
                <input type="date" class="form-control" >
            </div>
        </form>
        
    </div>
</section>