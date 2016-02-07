$('document').ready(function(){
console.log("Hey");

	$("#login-form").validate({
      rules:
	  {
			password: {
			required: true,
			},
			user_email: {
            required: true,
            email: true
            },
	   },
       messages:
	   {
            password:{
                      required: "Please enter your password"
                     },
            user_email: "Please enter your email address",
       },
	   submitHandler: submitForm	
       });  
	

	function submitForm()
	   {		
			var data = $("#login-form").serialize();
				console.log("Inside submit");
			$.ajax({
				
			type : 'POST',
			url  : 'login.php',
			data : data,
			beforeSend: function()
			{	
				$("#error").fadeOut();
				$("#login-btn").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
			},
			success :  function(response)
			   {						
					if(response=="ok"){
						console.log("response");		
						$("#login-btn").html('<img src="btn-ajax-loader.gif" /> &nbsp; Signing In ...');
						setTimeout(' window.location.href = "profile.php"; ',1000);
					}
					else{
									
						$("#error").fadeIn(1000, function(){						
						$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
						$("#login-btn").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
									});
					}
			  }
			});
				return false;
		}








});