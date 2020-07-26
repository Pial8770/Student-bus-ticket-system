<?php
session_start();
// echo $_SESSION['bus'];

// echo $_SESSION['cpost'];

// echo $_SESSION['cdate'];
 
// echo $_SESSION['seat']

$con = mysqli_connect('localhost','root','','testdb');

if (!$con) {
	# code...
	echo "failed";
}

$bus_s_no = $_SESSION['bus'];
$chkpost = $_SESSION['cpost'];
$chkdate = $_SESSION['cdate'];
$seatno = $_SESSION['seat'];

$sql = "SELECT * FROM seatcheck WHERE bus_serial_no = '$bus_s_no' AND date = '$chkdate' ";

$result = mysqli_query($con, $sql);
if (!$result) {
	# code...
	echo "Failed again";

}

$row = mysqli_fetch_assoc($result);

$db_chkpost = $row['check_post'];
$db_seat = $row['seat_occupied'];
$db_date = $row['date'];
$db_bserialno = $row['bus_serial_no'];



?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="checkingDoneStyle.css">
</head>
<body class="bg">

	<!-- <p class="para" ><b>Done :)</b></p> -->

	<br>


<div class="divH">
	<h1>Your input</h1>

	<br><br><br><br><br><br>

	<div class="div">
	<label class="l1">Bus serial no : <?php echo "$db_bserialno"; ?>
	 </label>

	 <br><br>

	 <label>Date : <?php echo "$db_date"; ?>
	 </label>

	 <br><br>

	 <label>Checkpost : <?php echo "$db_chkpost"; ?>
	 </label>

	 <br><br>

	 <label>Seat occupied : <?php echo "$db_seat"; ?>
	 </label>

	 <br><br>
	 
	 <a href="index.php" class="anchor">Logout</a>

	 <br><br>
	

	</div>

</div>

</body>
</html>


<!-- <?php
$_SESSION['user'] = "username";
echo $_SESSION['user'];


?> -->