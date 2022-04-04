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
          location.reload();
        }else{
          alert('failed');
        }
      }
    });
  }else{
    alert('Fill all the required fields');
  }
});

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
    }
  })
});