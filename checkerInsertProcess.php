<?php

//session_start();

// $_SESSION['user'] = "username";
// echo $_SESSION['user'];






$con = mysqli_connect('localhost' , 'root' , '','testdb');

if (!$con) {
	# code...
	echo "not conneced";
}

if (!isset($_POST['btn'])) {
	echo "Not connected with page";
}


$checkername = $_POST['uname'];

//$_SESSION['bus'] = $bserialno;

// echo "$bserialno";

$checkerpassword= $_POST['pwd'];

//$_SESSION['cdate'] = $date;

// echo "$date";

//$chkpost = $_POST['checkpost'];

//$_SESSION['cpost'] = $chkpost;
// echo "$chkpost";

//$seat = $_POST['seat'];

//$_SESSION['seat'] = $seat;
// echo "$seat";


$sql = "SELECT checkername FROM checker WHERE checkername = '$checkername' AND  checkerpassword = '$checkerpassword' ";

// $sql = "INSERT INTO seatcheck (bus_serial_no, date, check_post, seat_occupied) VALUES ('$bserialno', '$date','$chkpost','$seat')";

$fire= mysqli_query($con, $sql) or die("Can not fire");

if (mysqli_num_rows($fire)>0) {
	# code...
	echo "Exists";
	// if (!mysqli_query($con, $sql)) {
	// 	# code...
	// 	echo "failed";

	// }else{
	// 	header("Location:checkingDone.php");
	// }

}else{
	$sql2 = "INSERT INTO checker (checkername, checkerpassword) VALUES ('$checkername', '$checkerpassword')";

	if (mysqli_query($con, $sql2)) {
		# code...
		header("Location:checker_insert_done.php");
	}
	else {
		echo "inserted unsucess";
	}


}






?>