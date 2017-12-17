<?php

$test = "nicholas jacquet";
$str = " ";

if(strpos($test, $str)) {

	echo "substring found...\n";

} else {

	echo "substring NOT found...\n";

}

echo (strlen($test));
echo "     \n";


echo substr($test, 1);
echo "     \n";

echo substr($test, 1, (strlen($test) - 2));
echo "     \n";

?>
