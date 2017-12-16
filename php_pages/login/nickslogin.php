<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$uid = "phpmyadmin";
$pwd = "password";

$conn = mysqli_connect("127.0.0.1", $uid, $pwd, "logindb" );

if(!$conn) {
	die("Connection failed: ". mysqli_connect_error());
} else {
	#$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
	$sql = "SELECT * FROM user ;";
	$result = mysqli_query($conn, $sql);
	
	
if(!$result) {

      echo "Your username or password is incorrect!";

} else {

		$row = mysqli_fetch_row($result);

		echo "You are logged in!\n";
		
		echo "\n$row[0]";
		echo "\n$row[1]";
		echo "\n$row[2]";
		echo "\n$row[3]";
		echo "\n$row[4]\n";

		//$_SESSION['id'] = $row['id'];
	}
}

?>

</body>
</html>
