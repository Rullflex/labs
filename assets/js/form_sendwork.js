
$("#form-sendlab").submit(function() { //Change
	event.preventDefault();

	let form = $('#form-sendlab')[0]; 
	var form_data = new FormData(form); 
	$("#btnSubmit").prop("disabled", true);                       
	$.ajax({
		url: '/assets/php_modules/sendftp.php', // point to server-side PHP script 
		dataType: 'text',  // what to expect back from the PHP script, if anything
		cache: false,
		enctype: 'multipart/form-data',
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
