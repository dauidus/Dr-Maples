$(document).ready(function(){
$("#ajax-contact-form").submit(function(){

var str = $(this).serialize();

   $.ajax({
   type: "POST",
   url: "js/contact/contact.php",
   data: str,
   success: function(msg){
    
$("#note").ajaxComplete(function(event, request, settings){

if(msg == 'OK')
{
result = '<div class="notification_ok">Your message has been sent. Thank you!</div>';
$("#fields").hide();
}
else
{
result = msg;
}

$(this).html(result);

});

}

 });

return false;

});

});