#!/bin/bash

a='INSERT into user (first, last, uid, pwd) values ("Donald","Trump", "trump4prez", "fuckU");';
b='INSERT into user (first, last, uid, pwd) values ("Barrack","Obama", "nig", "nog");';
php "/$USER/Desktop/login-system/php_tests/queries/query.php" "$a";
php "/$USER/Desktop/login-system/php_tests/queries/query.php" "$b";
