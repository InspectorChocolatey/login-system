<?php

$dir = '/root/Desktop/test';

if (!is_dir($dir)) {
	mkdir($dir);
} else {
	rmdir($dir);
}

//rmdir('examples');
?>
