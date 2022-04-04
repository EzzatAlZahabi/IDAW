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

$('#tableAliment').on('click', '.modifierbtn ', function() {
  var table = $('#example').DataTable();
  var trid = $(this).closest('tr').attr('id');
  // console.log(selectedRow);
  var id = $(this).data('id');
  $('#exampleModal').modal('show');

  $.ajax({
    url: "get_single_data.php",
    data: {
      id: id
    },
    type: 'post',
    success: function(data) {
      var json = JSON.parse(data);
      $('#nameField').val(json.username);
      $('#emailField').val(json.email);
      $('#mobileField').val(json.mobile);
      $('#cityField').val(json.city);
      $('#id').val(id);
      $('#trid').val(trid);
    }
  })
});