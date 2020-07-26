<?php

$con = mysqli_connect('localhost','root','','testdb');

if (!$con) {
	# code...
	echo "failed";
}


if (!isset($_POST['id'])) {
	$username = $_POST['id'];

echo "$username";
}

$adminName = $_POST['id'];
$adminPWD = $_POST['pwd'];


if (empty($adminName) || empty($adminPWD)) {
	# code...
	echo "Please fill the form";

}else {
	$query = "select * from admin where adminname = '$adminName'";
	$result = mysqli_query($con,$query);

	if ($row = mysqli_fetch_assoc($result)) {
		# code...
		$db_password = $row['adminpassword'];
		$db_name = $row['adminname'];

		if (($adminPWD)==$db_password) {
			# code...

			if (($adminName)==$db_name) {
				# code...

				$message = "Welcome ".$adminName;
			echo "<script type='text/javascript'>alert('$message');</script>";
			header("Location:adminInsert.php");
			exit();
			}
		}else{
			echo "Wrong password";
			exit();
		}


		}

	}	

?>