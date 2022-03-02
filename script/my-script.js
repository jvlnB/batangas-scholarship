$("#save").click( function() {
  $.post( $("#account_form").attr("action"), 
          $("#account_form :input").serializeArray(), 
          function(info){ $("#result").html(info); });
        });
 $("#account_form").submit( function() {
   return false;
 });