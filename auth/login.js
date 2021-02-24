$("#form-auth").submit(function() { //Change
    event.preventDefault();

    let form = $('#form-auth')[0]; 
    var form_data = new FormData(form); 
    $("#btnSubmit").prop("disabled", true);                          
    $.ajax({
        url: 'auth/login.php', // point to server-side PHP script 
        dataType: 'text',  // what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        success: function(php_script_response){
			if (php_script_response == '') {
				$("#form-danger-hidden").css("display", "none");
				$("#form-success-hidden").css("display", "block");
				$("#btnSubmit").prop("disabled", false);
			}
			else {
				$("#error_num").html(php_script_response);
				$("#form-success-hidden").css("display", "none");
				$("#form-danger-hidden").css("display", "block");
				$("#btnSubmit").prop("disabled", false);
				
            }
        }
    });
    return false;
});