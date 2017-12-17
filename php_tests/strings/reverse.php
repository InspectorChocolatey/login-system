<?php

$str = "Once upon a time there was a turtle";

$words = explode(' ', $str);

$words = array_reverse($words);

$str = implode(' ', $words);

echo "$str\n";

?>
