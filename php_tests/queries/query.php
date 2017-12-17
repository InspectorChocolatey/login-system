<?php

$sql = $argv[1];
#echo "$str\n";

#$db = "logindb"

#$uid = "phpmyadmin";
#$pwd = "password";

$conn = mysqli_connect("127.0.0.1", "phpmyadmin", "password", "logindb" );

if(!$conn) {
	die("Connection failed: ". mysqli_connect_error());
} else {
	#$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
	#$sql = "SELECT * FROM user ;";
	$result = mysqli_query($conn, $sql);
	
	
if(!$result) {

      echo "Could not connect to database: $db";

} else {


		echo "Query executed: $sql";

		//$_SESSION['id'] = $row['id'];
	}
}

?>
