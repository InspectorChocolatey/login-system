<?php

$dir = '/root/Desktop/test';

if(!file_exists($dir)) {
	mkdir($dir, 0777, true);
} else {
	echo "$dir already exists...\n";
}

?>
