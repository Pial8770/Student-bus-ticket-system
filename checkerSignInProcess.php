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

$chkName = $_POST['id'];
$chkPWD = $_POST['pwd'];


if (empty($chkName) || empty($chkPWD)) {
	# code...
	echo "Please fill the form";

}else {
	$query = "select * from checker where checkername = '$chkName'";
	$result = mysqli_query($con,$query);

	if ($row = mysqli_fetch_assoc($result)) {
		# code...
		$db_password = $row['checkerpassword'];
		$db_name = $row['checkername'];

		if (($chkPWD)==$db_password) {
			# code...

			if (($chkName)==$db_name) {
				# code...
				$message = "Welcome ".$chkName;
			echo "<script type='text/javascript'>alert('$message');</script>";
			header("Location:checkerChecking.php");
			exit();
			}
		}else{
			echo "Wrong password";
			exit();
		}


		}

	}	

?>