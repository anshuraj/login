$('document').ready(function(){
	$("#login-form").validate({
      rules:
	  {
			password: {
			required: true,
			},
			username: {
            required: true,
            },
	   },
       messages:
	   {
            password:{
                      required: "Enter password"
                     },
            username: "Enter username",
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
				$("#login-btn").html('<span class="fa fa-spinner fa-spin"></span> &nbsp; sending ...');
			},
			success :  function(response)
			   {						
					if(response=="ok"){
						console.log("response");		
						$("#login-btn").html('<span class="fa fa-spinner fa-spin"></span> &nbsp; Signing In ...');
						setTimeout(' window.location.href = "profile.php"; ',1000);
					}
					else{									
						$("#error").fadeIn(1000, function(){						
						$("#error").html('<div class="alert alert-danger"> <span class="fa fa-info"></span> &nbsp; '+response+' !</div>');
						$("#login-btn").html('<span class="fa fa-sign-in"></span> &nbsp; Sign In');
						});
					}
			  }
			});
			return false;
		}
	
	$("#signup-form").validate({
      rules:
	  {
	  		name: {
	  			required: true,
	  		},
	  		username: {
	  			required: true,
	  		},
			password: {
			required: true,
			},
			email: {
            required: true,
            email: true
            },
            password: {
            	required: true,
            },
            re_password: {
            	required: true,
            	//equalTo: '#password'
            },
	   },
       messages:
	   {
	   		name: {
	   			required: "Enter name"
	   		},
	   		username: {
	   			required: "Enter username"
	   		},
            password:{
                required: "Enter password"
            },
            re_password: {
            	required: "Re-enter password",
            	//equalTo: "password doesn't match !"
            },
            email: "Enter email address",
       },
	   submitHandler: submitSignUpForm	

       }); 

       function submitSignUpForm()
	   {		
				var data = $("#signup-form").serialize();
				
				$.ajax({
				
				type : 'POST',
				url  : 'sign_up.php',
				data : data,
				beforeSend: function()
				{	
					$("#signup-error").fadeOut();
					$("#signup-button").html('<span class="fa fa-spinner fa-spin"></span> &nbsp; sending ...');
				},
				success :  function(data)
						   {						
								if(data=="fail"){
									
									$("#signup-error").fadeIn(1000, function(){										
											$("#signup-error").html('<div class="alert alert-danger"> <span class="fa fa-info"></span> &nbsp; Sorry email already taken !</div>');
											
											$("#signup-button").html('<span class="fa fa-sign-in"></span> &nbsp; Create Account');										
									});
																				
								}
								else if(data=="ok")
								{
									
									$("#signup-button").html('<span class="fa fa-spinner fa-spin"></span> &nbsp; Signing Up ...');
									window.alert("Successfully registered!");
									window.location.href = "index.php";
								}
								else{
										console.log(data);
									$("#signup-error").fadeIn(1000, function(){
									$("#signup-error").html('<div class="alert alert-danger"><span class="fa fa-info"></span> &nbsp; '+data+' !</div>');
									$("#signup-button").html('<span class="fa fa-sign-in"></span> &nbsp; Create Account');
										
									});
											
								}
						   }
				});
				return false;
		}

});