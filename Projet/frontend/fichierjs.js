// Création et affichage de la DataTable
$(document).ready(function(){
  $('#tableAliment').DataTable({
    'ajax' : {
      'url' : '../Projet/backend/afficherAliments.php',
      'type' : 'post',
    },
    'columns' : [
      {'data' : 'ID_ALIMENT'},
      {'data' : 'LIBELLE'},
      {'data' : 'DATE'},
      {'data' : 'CALORIES'},
      {'data' : 'operations'}
    ]
  });
});

// Ajout d'aliment lors du click sur le bouton Ajouter dans le Modal
$(document).on('click', '.ajoutbtn', function(e) {
  e.preventDefault();
  var libelle = $('#libelle').val();
  var date = $('#date').val();
  var calories = $('#calories').val();
  if (libelle != '' && date!='' && calories!=''){
    $.ajax({
      url: "../Projet/backend/ajoutAliment.php",
      type: "post",
      data: {
        libelle: libelle,
        date: date,
        calories: calories
      },
      success: function(data) {
        var json = JSON.parse(data);
        var status = json.status;
        if (status == 'true') {
          $('#ajoutAlimentModal').modal('hide');
          $('#tableAliment').DataTable().ajax.reload(null, false);
        }else{
          alert('failed');
        }
      }
    });
  }else{
    alert('Fill all the required fields');
  }
});

// Affichage du modal lors du click sur le bouton Modifier d'un aliment
$('#tableAliment').on('click', '.modifierbtn', function(e) {
  e.preventDefault();
  var id = $(this).val();
  $('#modifierAlimentModal').modal('show');
  $.ajax({
    url: "../Projet/backend/trouverAliment.php",
    type: 'post',
    data: {
      id: id
    },
    success: function(data) {
      var json = JSON.parse(data);
      $('#libelleModifie').val(json.LIBELLE);
      $('#dateModifie').val(json.DATE);
      $('#caloriesModifie').val(json.CALORIES);
      $('#hiddenid').val(id);
    }
  })
});

// Modification d'un aliment lors du click sur le bouton Valider dans le Modal
$(document).on('click', '.updatebtn', function(e) {
  e.preventDefault();
  var id = $('#hiddenid').val();
  var libelle = $('#libelleModifie').val();
  var date = $('#dateModifie').val();
  var calories = $('#caloriesModifie').val();
  if (libelle != '' && date!='' && calories!=''){
    $.ajax({
      url: "../Projet/backend/modifierAliment.php",
      type: "post",
      data: {
        id: id,
        libelle: libelle,
        date: date,
        calories: calories
      },
      success: function(data) {
        var json = JSON.parse(data);
        var status = json.status;
        if (status == 'true') {
          $('#modifierAlimentModal').modal('hide');
          $('#tableAliment').DataTable().ajax.reload(null, false);
        }else{
          alert('Échec de modification');
        }
      }
    });
  }else{
    alert('Veuillez compléter tous les champs');
  }
});

// Suppression d'un aliment lors du click sur le bouton Supprimer d'un aliment
$('#tableAliment').on('click', '.supprimerbtn', function(e) {
  e.preventDefault();
  var id = $(this).val();
  $.ajax({
    url: "../Projet/backend/supprimerAliment.php",
    type: 'post',
    data: {
      id: id
    },
    success: function(data) {
      var json = JSON.parse(data);
      var status = json.status;
      if (status == 'true') {
        $('#tableAliment').DataTable().ajax.reload(null, false);
      }else{
        alert('Échec de suppression');
      }
    }
  })
});

// Onglet actif du menu
$('.nav-link a').on('click', function(e) {
  e.preventDefault();
  $(this).parent().siblings().children().removeClass('active');
  $(this).addClass('active');
})