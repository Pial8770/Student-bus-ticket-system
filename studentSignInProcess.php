<?php
session_start();
$con = mysqli_connect('localhost','root','','testdb');

if (!$con) {
	# code...
	echo "failed";
}


if (!isset($_POST['id'])) {
	$username = $_POST['id'];

echo "$username";
}

$studName = $_POST['id'];
$studPWD = $_POST['pwd'];




if (empty($studName) || empty($studPWD)) {
	# code...
	echo "Please fill the form";

}else {
	$query = "select * from users where username = '$studName'";
	$result = mysqli_query($con,$query);

	if ($row = mysqli_fetch_assoc($result)) {
		# code...
		$db_password = $row['password'];
		$db_name = $row['username'];

		if (($studPWD)==$db_password) {
			# code...

			if (($studName)==$db_name) {
				# code...

				$message = "Welcome ".$studName;
			echo "<script type='text/javascript'>alert('$message');</script>";

			header("Location:studentPass.php");
			exit();
			}
		}else{
			echo "Wrong password";
			exit();
		}


		}

	}	

?>



