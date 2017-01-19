console.log("mail");
$(document).ready(function(){




		$('#enviar').click(function(){
		
		var nombre = $('#nombre').val();
			telefono = $('#telefono').val();
			email = $('#email').val();
			mensaje = $('#mensaje').val();

		if (nombre == "") {
            $("#nombre").focus();
            return false;
        }else if(telefono == ""){
            $("#telefono").focus();    
            return false;
        }else if(email == ""){
            $("#email").focus();
            return false;
        }else if(mensaje == ""){
            $("#mensaje").focus();
            return false;
        }else{
                // Si todo paso, aqui ira la llamada AJAX
			$('.progress').removeClass('hide');
			var datos = 'nombre='+ nombre + '&email=' + email + '&telefono=' + telefono + '&mensaje=' + mensaje;
			$.ajax({
			    type: "POST",
			    url: "php/mail.php",
			    data: datos,
			    success: function() {
			        $('.progress').hide();
			        $('.msg').text('Mensaje enviado!').addClass('msg_ok').animate({ 'right' : '130px' }, 600);  
			    },
			    error: function() {
			        $('.progress').hide();
			        $('.msg').text('Hubo un error!').addClass('msg_error').animate({ 'right' : '130px' }, 600);                 
			    }
			});
			return false;
		}
	});
});