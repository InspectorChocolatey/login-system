<?php
session_start();
include 'dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

/*
echo $first."<br>";
echo $last."<br>";
echo $uid."<br>";
echo $pwd."<br>";
*/

$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)) {
	echo "Your username or password is incorrect!";
} else {
	//echo "You are logged int!";
	$_SESSION['id'] = $row['id'];
}

//header("Location: index.php");

?>
