$("#form-reg").submit(function() { //Change
    event.preventDefault();

    let form = $('#form-reg')[0]; 
    var form_data = new FormData(form); 
    $("#btnSubmit").prop("disabled", true);                          
    $.ajax({
        url: 'reg/reg.php', // point to server-side PHP script 
        dataType: 'text',  // what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        success: function(php_script_response){
                $("#error_text").html(php_script_response);
                $("#form-secondary-hidden").css("display", "block");
                $("#btnSubmit").prop("disabled", false);
        }
    });
    return false;
});