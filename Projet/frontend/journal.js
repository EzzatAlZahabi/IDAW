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