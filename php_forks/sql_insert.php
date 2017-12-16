<?php

/* 
    topic: How to Insert data into MySQL database Table Using PHP
      url: https://www.tutorialrepublic.com/php-tutorial/php-mysql-insert-query.php

    Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) 

*/

$link = mysqli_connect("localhost", "root", "", "demo");
    

// Check connection
if($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt insert query execution
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('Peter', 'Parker', 'peterparker@mail.com')";

if(mysqli_query($link, $sql)) {
    echo "Records inserted successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);

?>
