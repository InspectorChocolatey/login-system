<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

/*
	https://stackoverflow.com/questions/32770373/how-to-use-mysqli-query-in-php
*/

$uid = "phpmyadmin";
$pwd = "password";

$link = mysqli_connect("127.0.0.1", $uid, $pwd, "logindb" );


$result = mysqli_query($link,"DESCRIBE user");


while ($row = $result->fetch_assoc())
{
    foreach($row as $value) echo "<td>$value</td>";
}



// getting all the rows from the query
// note that handy feature of OOP syntax
$data = $link->query("DESC user")->fetch_all(MYSQLI_ASSOC);
// getting keys from the first row
$header = array_keys(reset($data));
// printing them
foreach ($header as $value) echo "<td>$value</td>";
// finally printing the data
foreach ($data as $row)
{
    foreach($row as $value) echo "<td>$value</td>";
}

?>
</body>
</html>
