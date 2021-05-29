var getUrl = window.location;
var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

function bookappointment(dr_id,usr_id,bookid,divId){
    $(".alert ").hide();
     $(".appointment_loader").show();
    var embed = document.getElementById(divId);
		var date = document.getElementById(bookid).value;


        $.ajax({

          url: baseUrl+ '/my_account/book_appointment',

          type: 'POST',

          data: {
                dr_id 	:  dr_id, 
                usr_id 	:  usr_id, 
                date 	:  date

          },

          error: function() {
              $(".appointment_loader").hide()
              $(embed).html('<div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert">&times;</a> <strong>Attention!</strong> Quelque chose ne va pas..!!! </div>');
              
          },

          success: function(data) {
             $(".appointment_loader").hide();
          	if(data == 1){
              $(embed).html('<div class="alert alert-success"> <a href="#" class="close" data-dismiss="alert">&times;</a> <strong>Succès!</strong> Réservé avec succès.........!!! </div>');

          	}
          	else if(data == 2){
             
              $(embed).html('<div class="alert alert-warning"> <a href="#" class="close" data-dismiss="alert">&times;</a> <strong>Attention!</strong> Déjà réservé ....!!!! </div>');

          	}
          	else if(data == 3){
              $(embed).html('<div class="alert alert-warning"> <a href="#" class="close" data-dismiss="alert">&times;</a> <strong>Attention!</strong> Veuillez sélectionner la date ....!!!! </div>');
          	}
          	else if(data == 4){
              $(embed).html('<div class="alert alert-info"> <a href="#" class="close" data-dismiss="alert">&times;</a> <strong>Attention!</strong> Veuillez choisir une date supérieure à celle d&apos;aujourd&apos;hui ....!!!! </div>');
          	}else{
              $(embed).html('<div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert">&times;</a> <strong>Attention!</strong> Quelque chose ne va pas ....!!!! </div>');
          	}
          }

        });
}
function pleaseLogin(divId){
    $(".alert ").hide();
    var embed = document.getElementById(divId);
    $(embed).html('<div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert">&times;</a> <strong>Attention!</strong> S&apos;il vous plait Connectez-vous d&apos;abord..!!! </div>');

}

