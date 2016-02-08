<?php
session_start();
/*if(!isset($_SESSION['user_session'])!="")
{
	header("Location: profile.php");
}
*/
?>


<!DOCTYPE html >
<html>
<head>
<title>Account</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/validation.js"></script>

</head>
<body>
<div class = "container" >


<div class = "row">
	<div class = "col-lg-8 col-lg-offset-2">
		<h2>Account</h2>
		<ul class="nav nav-tabs">
			<li class = "active"> <a href="#login" data-toggle="tab">Login</a></li>
			<li > <a href="#signup" data-toggle="tab">Sign Up</a></li>
		</ul>
		<br>
		<div class = "tab-content">

<!-- Login Module -->

			<div class = "tab-pane fade in active" id = "login" >
				<form name = "login" method = "POST" id="login-form" >
					<div class = "form-group">
						<input type = "text" placeholder = "Username" name = "username" id = "username" class = "form-control"></input>
					</div>
					<div class="form-group">
						<input type = "password" placeholder = "Password"  name = "password" id = "password" class = "form-control"></input>
					</div>
					<div class="checkbox">
    					<label><input type="checkbox"> Remember me</label>
  					</div>
					<button id = "login-btn" type = "submit" name = "submit" class = "btn btn-info" >
					<span class="fa fa-sign-in"></span> &nbsp; Sign In</button>
					<div id="error">
        			<!-- error will be shown here ! -->
        			</div>

				</form>
				<span id = "text"></span>
			</div>
		

<!-- Signup Module -->
			<div class = "tab-pane fade" id = "signup">
				<form name = "sign_up" method = "POST" id="signup-form" >
					<div class="form-group">
						<input class = "form-control" placeholder = "Name" type = "text" name = "name"></input>
					</div>
					<div class="form-group">
						<input class = "form-control" placeholder = "E-mail" type = "text" name = "email"></input>
					</div>
					<div class="form-group">
						<input class = "form-control" placeholder = "Username" type = "text" name = "username"></input>
					</div>
					<div class="form-group">
						<input class = "form-control" placeholder = "Password" type = "password" name = "password" id = "password"></input>
					</div>
					<div class="form-group">
						<input class = "form-control" placeholder = "Re enter password" type = "password" name = "re_password" id = "re_password"></input>
					</div>
					<div class="form-group">
						<button id = "signup-button" type = "submit" name = "submit" class = "btn btn-info" >
							<span class="fa fa-sign-in"></span> &nbsp; Create account</button>
					</div>
					<div id="signup-error">
        			<!-- error will be showen here ! -->
        			</div>
				</form>
			</div>
		</div>
	</div>
</div>

</body>
</html>
