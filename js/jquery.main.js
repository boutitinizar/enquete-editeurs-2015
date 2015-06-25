$(function(){
    //original field values
    var field_values = {
            'nom'  : 'Nom',
            'prenom' : 'Prénom',
            'email'  : 'Email',
            'societe'  : 'Société',
            'fonction'  : 'Fonction',
			'tel'  : 'N° de tél',
			'Pays'  : 'Pays'
    };


    //inputfocus
			$('input#nom').inputfocus({ value: field_values['nom'] });
			$('input#prenom').inputfocus({ value: field_values['prenom'] }); 
			$('input#email').inputfocus({ value: field_values['email'] });
			$('input#societe').inputfocus({ value: field_values['societe'] });
			$('input#Pays').inputfocus({ value: field_values['Pays'] }); 


    //reset progress bar
    $('#progress').css('width','0');
    $('#progress_text').html('0% Complété');

    //first_step
    $('form').submit(function(){ return false; });
    $('#submit_first').click(function(){

		//remove classes
	 	$('#first_step input').removeClass('error').removeClass('valid');	
 		 for(i=1; i<9; i++){
 			var fields = $('#first_step input[name=suga'+i+']');
 				var error = 0;
 			if( fields.filter(':checked').length == 0 ) {
 					 //alert('nom');
 					$(fields).addClass('error');
 				$(fields).effect("shake", { times:3 }, 50);s
				//error++;
 			} else {
 				//alert('OK');
 				$(fields).addClass('valid');
 				}
 			 }


			 
	 	if(!error) {
						 //update progress bar
					$('#progress_text').html('33% Complété');
					$('#progress').css('width','113px');
					//slide steps
					$('#first_step').slideUp();
					$('#second_step').slideDown();     
					             $('html,body').animate({scrollTop: 0}, 'slow');
			 } else return false;
    });
	
	$('#retour_second').click(function(){
		 $('#progress').css('width','0');
         $('#progress_text').html('0% Complété');
		 $('#second_step').slideUp();
		 $('#first_step').slideDown();   
		 $('html,body').animate({scrollTop: 0}, 'slow');
	});


    $('#submit_second').click(function(){
        //remove classes
        $('#second_step input').removeClass('error').removeClass('valid');

    	 for(i=1; i<11; i++){
 			var fields = $('#second_step input[name=sugb'+i+']');
 			var error = 0;
 				if( fields.filter(':checked').length == 0 ) {
 			 //alert('nom');
 				$(fields).addClass('error');
 					$(fields).effect("shake", { times:3 }, 50);s
 					//error++;
 				} else {
 				//alert('OK');
 					$(fields).addClass('valid');
 			}
 		 }

        if(!error) {
                //update progress bar
                $('#progress_text').html('66% Complété');
                $('#progress').css('width','226px');
                
                //slide steps
                $('#second_step').slideUp();
                $('#third_step').slideDown();     
				$('html,body').animate({scrollTop: 0}, 'slow');
         } else return false;

    });
     
	 
	 
	 $('#retour_third').click(function(){
		 $('#progress_text').html('33% Complété');
		 $('#progress').css('width','113px');
		 $('#third_step').slideUp();
		 $('#second_step').slideDown();   
		 $('html,body').animate({scrollTop: 0}, 'slow');
	});
     //3-c
    $('#submit_third').click(function(){
        $('#third_step input').removeClass('error').removeClass('valid');				 
    	 for(i=1; i<14; i++){
 				var fields = $('#third_step input[name=sugc'+i+']');
 			var error = 0;
 			if( fields.filter(':checked').length == 0 ) {
 					$(fields).addClass('error');
 				$(fields).effect("shake", { times:3 }, 50);s
				//error++;
 				} else {
 				$(fields).addClass('valid');
 				}
 		  }

       if(!error) {
			
                //update progress bar
                $('#progress_text').html('99% Complété');
                $('#progress').css('width','320px');
                //slide steps
                $('#third_step').slideUp();
                $('#fourth_step').slideDown();     
				$('html,body').animate({scrollTop: 0}, 'slow');
        } else return false;        
    });



 $('#retour_fourth').click(function(){
		 $('#progress_text').html('66% Complété');
          $('#progress').css('width','226px');
		 $('#fourth_step').slideUp();
		 $('#third_step').slideDown();   
		 $('html,body').animate({scrollTop: 0}, 'slow');
	});

  //4-d
    $('#submit_fourth').click(function(){	
		
				var nom = $('input#nom').val();
				var prenom = $('input#prenom').val();
				var email = $('input#email').val();
				var societe = $('input#societe').val();
 				var Pays = $('input#Pays').val();
				
		     //remove classes
        $('#fourth_step input').removeClass('error').removeClass('valid');
var error = 0;
    	 for(i=1; i<6; i++){
 				var fields = $('#fourth_step input[name=sugd'+i+']');
 				var error = 0;
 			if( fields.filter(':checked').length == 0 ) {
 					$(fields).addClass('error');
 				$(fields).effect("shake", { times:3 }, 50);s
				//error++;
 			} else {
 					$(fields).addClass('valid');
 				}
 			 }
		
		  //Nom 
          if(nom.length<1 || nom == 'Nom' ){
			  $('input#nom').addClass('error');
			  $('input#nom').effect("shake", { times:3 }, 50);
			  error++;
		  }else{
			  $('input#nom').addClass('valid');
		  } 

		  //Prénom 
		  if(prenom.length<1 || prenom == 'Prénom' ){
			  $('input#prenom').addClass('error');
			  $('input#prenom').effect("shake", { times:3 }, 50);
			 error++;
		  }else{
			  $('input#prenom').addClass('valid');
		  }
           
          //email 
            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;  
			if(email.length<1 || email == 'Email' || !emailPattern.test(email) ){
			   $('input#email').addClass('error');
			   $('input#email').effect("shake", { times:3 }, 50);
			   error++;
			}else{
				$('input#email').addClass('valid');
            }

           //societe
			if(societe.length<1 || societe == 'Société' ){
			  $('input#societe').addClass('error');
			  $('input#societe').effect("shake", { times:3 }, 50);
			 error++;
		    }else{
			  $('input#societe').addClass('valid');
		    } 

//		    //Fonction
//			if(fonction.length<1 || fonction == 'Fonction' ){
//			  $('input#fonction').addClass('error');
//			  $('input#fonction').effect("shake", { times:3 }, 50);
//			  error++;
//		    }else{
//			  $('input#fonction').addClass('valid');
//		    } 

//		    //Pays
            if(Pays.length<1 || Pays == 'Pays' ){
			  $('input#Pays').addClass('error');
			  $('input#Pays').effect("shake", { times:3 }, 50);
			  error++;
		    }else{
			  $('input#Pays').addClass('valid');
		    } 

		 //   //N° de tél
//            if(tel.length<1 || tel == 'N° de tél'){
//			  $('input#tel').addClass('error');
//			  $('input#tel').effect("shake", { times:3 }, 50);
//			  error++;
//		    }else{
//			  $('input#tel').addClass('valid');
//		    } 


        if(!error) {
			SubmittingForm();
        } else return false;        
    });
	
 
});


function SubmittingForm() {
  dataString = $("#FormAddPost").serialize();
		//return false;
		$.ajax({
			type: "POST",
			url: "Ajax/doAddPost.php",
			data: dataString,
			success: function(data) {	
				$('#FormAddPost').html("<div id='conclusion' style='height:200px'></div>");
				$('#conclusion')
			 .html("<img id='checkmark' src='images/check.png' />")
				.hide()
				.fadeIn(1500, function() {
					$('#conclusion').append("<div class='success_div'><h3 class='success'>Nous vous remercions pour votre participation à cette enquête. </h3><h3 class='success'>Nous espérons que cette édition du <strong style='color:#477829'>Config Partners</strong> vous a satisfaite et qu’elle vous a apporté l’opportunité de développer vos contacts, votre business et notre partenariat.</h3><h3>Afin de prolonger cet évènement, vous pouvez découvrir les moments forts sur la rubrique « photos » du site <a style='color:#477829' href='http://www.config.fr/config-partners/photos/' target='_blank'>Config Partners 2015</a> avec le codes suivant :<br /></br><ul><li>Mot de passe : Config_partners2015</li></ul></h3><br/><h3>Cordialement,</h3><br/><h3>L’équipe Config.</h3><br /><a style='color:#477829' href='http://www.config.fr/config-partners/' target='_blank'>Aller sur le site Config Partners 2015 </a></div>");
				});
               
                  //update progress bar
                $('#progress_text').html('100% Complété');
                $('#progress').css('width','340px');
			}
		});
}