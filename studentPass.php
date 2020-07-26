<!DOCTYPE html>
<html>
<head>
	<title>CHECKING SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="studentPass.css">
	<link rel="shortcut icon" type="image/x-icon" href="images\bus.png">
</head>
<body class="bg">
	<div class="login-box">
		<h1>Checking info</h1>

		<form action="studentPassProcess.php" method="POST">
		<div class="textbox">
			<i class="fa fa-bus" aria-hidden="true"></i>
			<input type="text" placeholder="Bus serial number" name="id" value="">
			
		</div>

		<div class="textbox">
			<i class="fa fa-calendar" aria-hidden="true"></i>
			<input type="date" placeholder="Date" name="date" value="">
		</div>

		<div class="textbox">
			<i class="fa fa-map-marker" aria-hidden="true"></i>


			<select name="checkpost">
				<option>---Checkpost---</option>
				<option value="Azampur">Azampur</option>
				<option value="Dhanmondi">Dhanmondi</option>
				<option value="Azimpur">Azimpur</option>
				<option value="Chourasta">Chourasta</option>


				


			</select>
			

		</div>
		

		<input class="btn" type="submit" name="btn" value="Halfpass">

		</form>
		<br>
		<br>


		<a href="index.php" style="text-decoration: none;"><p class="previous">Home</p></a>
			


	</div>


</body>
</html>