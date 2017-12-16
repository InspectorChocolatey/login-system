<?php

$t = date("H");

if($t < "10") {
    echo "Have a good morning!\n";
} elseif ($t < "20") {
    echo "Have a good day!\n";
} else {
    echo "Have a good night!\n";
}

?> 
