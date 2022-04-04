// $(document).ready(function() {
//   $('#example').DataTable({
//     "fnCreatedRow": function(nRow, aData, iDataIndex) {
//       $(nRow).attr('id', aData[0]);
//     },
//     'serverSide': 'true',
//     'processing': 'true',
//     'paging': 'true',
//     'order': [],
//     'ajax': {
//       'url': 'fetch_data.php',
//       'type': 'post',
//     },
//     "aoColumnDefs": [{
//         "bSortable": false,
//         "aTargets": [5]

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
          table = $('#tableAliment').DataTable();
          table.draw();
          $('#ajoutAlimentModal').modal('hide');
        } else {
          alert('failed');
        }
      }
    });
  } else {
    alert('Fill all the required fields');
  }
});