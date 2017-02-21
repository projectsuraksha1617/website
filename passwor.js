function checkPass()
{
   
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    
    var message = document.getElementById('confirmMessage');
    
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
   
    if(pass1.value == pass2.value){
        
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match"
    }else{
       
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match"
    }
}  



$(document).ready(function() {
$('#pass1').keyup(function() {
$('#result').html(checkStrength($('#pass1').val()))
})

function checkStrength(pass1) {
var strength = 0
if (pass1.length < 6) {
$('#result').removeClass()
$('#result').addClass('short')
return 'Too short'
}
if (pass1.length > 7) strength += 1
// If pass1 contains both lower and uppercase characters, increase strength value.
if (pass1.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) strength += 1
// If it has numbers and characters, increase strength value.
if (pass1.match(/([a-zA-Z])/) && pass1.match(/([0-9])/)) strength += 1
// If it has one special character, increase strength value.
if (pass1.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
// If it has two special characters, increase strength value.
if (pass1.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
// Calculated strength value, we can return messages
// If value is less than 2
if (strength < 2) {
$('#result').removeClass()
$('#result').addClass('weak')
return 'Weak'
} else if (strength == 2) {
$('#result').removeClass()
$('#result').addClass('good')
return 'Good'
} else {
$('#result').removeClass()
$('#result').addClass('strong')
return 'Strong'
}
}
});


 $(document).ready(function(){
                $('#submit').click(function(){
                   
                    var captcha = $('#captcha').val();
             
		    
                   
            
                   
                    if( msg.length == 0){
                        $('#msg').addClass('error');
			$('.msg').html("Enter expectation!").fadeIn('slow').delay(4000).fadeOut('slow');
                    }
                    else{
                        $('#msg').removeClass('error');
                    }

                    if( captcha.length == 0){
                        $('#captcha').addClass('error');
                    }
                    else{
                        $('#captcha').removeClass('error');
                    }
                    
                    if(name.length != 0 && msg.length != 0 && captcha.length != 0 && phone.length ==10 && phone.length != 0
		       && age.length !=0 && Highestqual.length != 0 && designation.length != 0 && department.length != 0 &&
		       Institution.length != 0 && areaintrst.length != 0 && email.length != 0){
                        return true;
                    }
                    return false;
                });
                var emaily= '0';
		
		if(emaily !=0)
		{
		    if(emaily=='HH'){
		    $('.cap').html("You have already Registered").fadeIn('slow').delay(3000).fadeOut('slow'); 
		}else{
		    $('.cap').html("nothing").addClass('cap_status_error').fadeIn('slow');
		}
	    }
                var capch = 'notEq';
                if(capch != 'notEq'){
                    if(capch == 'Eq'){
                        $('.cap_status').html("Your form is successfully Submitted ").fadeIn('slow').delay(3000).fadeOut('slow');
                    }else{
                        $('.cap_status').html("check verification code!").addClass('cap_status_error').fadeIn('slow');
                    }
                }
            });