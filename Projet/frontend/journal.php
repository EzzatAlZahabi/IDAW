<?php
    require_once('frontend/template_header.php');
    require_once('backend/security.php');
?>

<div>
    <button type="button" class="btn btn-dark" id="addLog">Ajouter une entrée</button>
    <input type="date" placeholder="Rechercher par date">
//formulaire apparait seulement après click sur bouton ajouter une entrée
    <form action="" id="logForm">
      <div>
          <label for="intituleRepas">Intitulé du repas</label>
          <input type="text" id="intituleRepas" autocomplete="off"/>
      <div>
      <div>
          <label for="dateRepas">Date</label>
          <input type="date" id="dateRepas" autocomplete="off"/>
      <div>
      <input type="hidden" id="hidden"/>
      <button id="logSave">Enregistrer</button>
      <button id="logCancel">Annuler</button>
    </form>

        <table>
            <thead>
                <tr>
                    <th scope="col">Intitulé</th>
                    <th scope="col">Date</th>
                    <th scope="col">Modifier</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
*

    