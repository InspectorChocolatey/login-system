<?php
$mystr = '';

if(empty($mystr)) {

	echo "My string string is empty\n";

} else {

	echo "My string is not empty...\n";

}

/*
   topic: time();	
     url: http://php.net/manual/en/function.time.php
*/

$nextWeek = time() + (7 * 24 * 60 * 60);

echo 'Now:       '. date('Y-m-d') ."\n";
echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";
// or using strtotime():
echo 'Next Week: '. date('Y-m-d', strtotime('+1 week')) ."\n";

time();

?>
