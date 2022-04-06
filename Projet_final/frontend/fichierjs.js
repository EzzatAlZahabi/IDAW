// Création et affichage de la DataTable
$(document).ready(function(){
  $('#tableAliment').DataTable({
    'ajax' : {
      'url' : '../Projet_final/backend/afficherAliments.php',
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
      url: "../Projet_final/backend/ajoutAliment.php",
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
    url: "../Projet_final/backend/trouverAliment.php",
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
      url: "../Projet_final/backend/modifierAliment.php",
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
    url: "../Projet_final/backend/supprimerAliment.php",
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
$(document).on('click', '.menubtn', function(e) {
  // e.preventDefault();
  $(this).parent().siblings().children().removeClass('active');
  $(this).addClass('active');
  // window.location = '../Projet_final/frontend/'+$(this).val()+'.php';
  // $('#afficherPage').load('../Projet_final/frontend/'+$(this).val()+'.php');
});

// Afficher les infos de l'utilisateur dans la page Profil
// $(document).on('click', '#menuProfil', function(e) {
//   // e.preventDefault();
//   $.ajax({
//     url: "../Projet/backend/trouverUser.php",
//     type: 'post',
//     success: function(data) {
//       var json = JSON.parse(data);
//       $('input[name="NOM"]').val(json.nom);
//       $('input[name="PRENOM"]').val(json.prenom);
//       $('input[name="SEXE"]').val(json.sexe);
//       $('input[name="AGE"]').val(json.age);
//       $('input[name="BESOIN_ENERGITIQUE"]').val(json.besoin);
//       $('input[name="LOGIN"]').val(json.login);
//       $('input[name="PASSWORD"]').val(json.password);
//     }
//   })
// });

$("#logForm").hide();
$(document).ready(function(){
    $("#cancelAdd").click(function(){
      $("#logForm").hide();
    });
    $("#addLog").click(function(){
      $("#logForm").show();
    });
  });


$(document).ready(function(){
    $("#addLog").click(function(){
      $("#contenu").hide();
    });
    $("#cancelAdd").click(function(){
        $("#contenu").show();
      })
  })

$(document).ready(function(){
    $("#caseAliment").hide();
})


$(document).on('input', '#nbRepas', function(){
    var nbCaseAjoute = $("#nbRepas").val();
    $("#caseAliment:ltnbCaseAjoute").show();
})