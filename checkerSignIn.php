<!DOCTYPE html>
<html>
<head>
	<title>CHECKING SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="style2.2.css">
	<link rel="shortcut icon" type="image/x-icon" href="images\bus.png">
</head>
<body class="bg">
	<div class="login-box">
		<h1>Login</h1>

		<form action="checkerSignInProcess.php" method="POST">
		<div class="textbox">
			<i class="fa fa-user" aria-hidden="true"></i>
			<input type="text" placeholder="Checker username" name="id" value="">
			
		</div>


		<div class="textbox">
			<i class="fa fa-lock" aria-hidden="true"></i>
			<input type="password" placeholder="Password" name="pwd" value="">
		</div>
		

		<input class="btn" type="submit" name="" value="Sign in">
		</form>	
		<br>
		<br>

		<a href="index.php" style="text-decoration: none;"><p class="previous">Previous page</p></a>
			


	</div>


</body>
</html>