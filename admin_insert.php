<!DOCTYPE html>
<html>
<head>
	<title>CHECKING SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="studentPass.css">
	<link rel="shortcut icon" type="image/x-icon" href="images\bus.png">
</head>
<body class="bg">
	<div class="login-box">
		<h1>Insert Admin</h1>

		<form action="adminInsertProcess.php" method="POST">
		<div class="textbox">
			<i class="fa fa-user" aria-hidden="true"></i>
			<input type="text" placeholder="Admin's Username" name="uname" value="">
			
		</div>


		<div class="textbox">
			<i class="fa fa-unlock-alt" aria-hidden="true"></i>
			<input type="text" placeholder="Admin's Password" name="pwd" value="">
			
		</div>
		

		<input class="btn" type="submit" name="btn" value="ADD">

		</form>
		<br>
		<br>


		<a href="index.php" style="text-decoration: none;"><p class="previous">Home</p></a>
			


	</div>


</body>
</html>