
/*Sigup*/
$('.signup').submit(function(){
	/*Delete error*/
	$('.error_signup').html('');

	var username = $('#username').val();
	var password = $('#password').val();

	/* Send data to controller procesing*/
	$.ajax({
		url: 'controllers/signup/process.php',
		type: 'post',
		dataType : 'text',
		data: {
			username: username,
			password: password
		},
		success : function(result){
			$('.error_signup').html(result);
		}
	})

	return false;
});