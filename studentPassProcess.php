<?php

session_start();

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


$bserialno = $_POST['id'];

$_SESSION['bus2'] = $bserialno;



$date= $_POST['date'];

$_SESSION['cdate2'] = $date;



$chkpost = $_POST['checkpost'];

$_SESSION['cpost2'] = $chkpost;



$sql = "SELECT student FROM seatcheck WHERE bus_serial_no = '$bserialno' AND  date = '$date' AND check_post= '$chkpost' ";

$result= mysqli_query($con, $sql);

if ($row = mysqli_fetch_assoc($result)) {
	# code...
	$db_student = $row['student'];

	$db_student = $db_student+1;
	
	$_SESSION['student'] = $db_student;


	$sql2 = "UPDATE seatcheck SET student = '$db_student' WHERE bus_serial_no = '$bserialno' AND  date = '$date' AND check_post= '$chkpost' ";

	if (mysqli_query($con, $sql2)) {
		# code...
		
		header("Location:studentPassProcessDone.php");
	}
	else {
		echo "inserted unsucess";
	}
}else{

	echo "Wait for the checker";
}




?>