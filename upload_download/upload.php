<?php

if(isset($_POST['submit'])) {

	$file = $_FILES['file'];

	$name = $_FILES['file']['name'];
	$tmpname = $_FILES['file']['tmp_name'];	
	$size = $_FILES['file']['size'];
	$error = $_FILES['file']['error'];
	$type = $_FILES['file']['type'];

	$ext = explode('.', $name);
	$actualext = strtolower(end($ext));

	// What kinds of file extensions do we want to allow someone to upload?

	$allowed = array('jpg','jpeg','png','pdf');

// extension is (jpg jped png pdf): PERMIT
	if (in_array($ext, $allowed)) {

		if ($error === 0) {
// size is small enough: PERMIT 			
			if ($size < 1000000) {

				$namenew = uniqid('', true).".".$actualext;
				$destination = 'uploads/'.$namenew;

				move_uploaded_file($tmpname, $destination);

				header("Location: index.php?uploadsuccess");
// size is too big: DENY
			} else {
			
				echo "File size is to large.";
			
			}

		} else {

			echo "Error uploading file.";
		
		}
// extenstion is NOT (jpg jped png pdf): DENY
	} else {

		echo "File extension is not of a permited type.";
	
	}

}

?>
