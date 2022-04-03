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