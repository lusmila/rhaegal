 $(document).ready(function(){
        $('#send_message').click(function(e){
            
            //Stop form submission & check the validation
            e.preventDefault();
            
            // Variable declaration
            var error = false;
            var name = $('#name').val();
            var empresa = $('#empresa').val();
            var pais = $('#pais').val();
            var telefono = $('#telefono').val();
            var email = $('#email').val();
            var message = $('#message').val();
            
         	// Form field validation
            if(name.length == 0){
                var error = true;
                $('#name_error').fadeIn(500);
            }else{
                $('#name_error').fadeOut(500);
            }
            if(pais.length == 0){
                var error = true;
                $('#pais_error').fadeIn(500);
            }else{
                $('#pais_error').fadeOut(500);
            }
            if(telefono.length == 0){
                var error = true;
                $('#telefono_error').fadeIn(500);
            }else{
                $('#telefono_error').fadeOut(500);
            }
            if(empresa.length == 0){
                var error = true;
                $('#empresa_error').fadeIn(500);
            }else{
                $('#empresa_error').fadeOut(500);
            }
            if(email.length == 0 || email.indexOf('@') == '-1'){
                var error = true;
                $('#email_error').fadeIn(500);
            }else{
                $('#email_error').fadeOut(500);
            }
            if(message.length == 0){
                var error = true;
                $('#message_error').fadeIn(500);
            }else{
                $('#message_error').fadeOut(500);
            }
            
            // If there is no validation error, next to process the mail function
            if(error == false){
               // Disable submit button just after the form processed 1st time successfully.
                $('#send_message').attr({'disabled' : 'true', 'value' : 'Sending...' });
                
				/* Post Ajax function of jQuery to get all the data from the submission of the form as soon as the form sends the values to email.php*/
                $.get("/correo", $("#contact_form").serialize(),function(result){
                    //Check the result set from email.php file.
                    if(result == 'sent'){
                        //If the email is sent successfully, remove the submit button
                         $('#submit').remove();
                        //Display the success message
                        $('#mail_success').fadeIn(500);
                    }else{
                        //Display the error message
                        $('#mail_fail').fadeIn(500);
                        // Enable the submit button again
                        $('#send_message').removeAttr('disabled').attr('value', 'Enviando);
                    }
                });
            }
        });    
    });