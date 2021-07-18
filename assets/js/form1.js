$(function()
{   
    $("#success_message").dialog({
        autoOpen: false,
        modal: true,
        title: "Details",
        buttons: {
            Close: function () {
                $(this).dialog('close');
            }
        }
    });
    $("#error_message").dialog({
        autoOpen: false,
        modal: true,
        title: "Details",
        buttons: {
            Close: function () {
                $(this).dialog('close');
            }
        }
    });
    function after_form_submitted(data) 
    {
        if(data.result == 'success')
        {
            $('#success_message').dialog('open');
            $('#error_message').dialog('close');
        }
        else
        {
            $('#success_message').dialog('open');
            $('#error_message').dialog('close');
    }
	$('#reused_form').submit(function(e)
      {
            $.ajax({
                type: "POST",
                url: 'handler.php',
                data: $form.serialize(),
                success: after_form_submitted
            });   
      });
});