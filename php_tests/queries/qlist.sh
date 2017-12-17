#!/bin/bash

q='INSERT into user (first, last, uid, pwd) values ("Donald","Trump", "trump4prez", "fuckU");';
php "/$USER/Desktop/login-system/php_tests/queries/query.php" "$q";
