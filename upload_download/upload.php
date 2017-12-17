<?php

if(isset($_POST['submit'])) {

	$file = $_FILES['file'];
	#printr($file);
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];	
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	// What kinds of file extensions do we want to allow someone to upload?

	$allowed = array('jpg', 'jpeg', 'png', 'pdf');

// extension is (jpg jped png pdf): PERMIT
	if (in_array($fileActualExt, $allowed)) {

		if ($fileError === 0) {
// size is small enough: PERMIT 			
			if ($fileSize < 1000000) {

				$fileNameNew = uniqid('', true).".".$fileActualExt;
				$fileDestination = 'uploads/'.$fileNameNew;

				move_uploaded_file($fileTmpName, $fileDestination);

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
