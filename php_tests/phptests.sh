#!/bin/bash
dir="/$USER/Desktop/login-system/php_tests";
cd "$dir";

# todo getchilditem function and for loop
function getchilditem()
{
  obj="$1";
  ls $obj;
}

function runphp()
{
	script="$1";
	clear;
	echo -e "\nphp script: $script\n";
	cat "$script";
	echo -e "\n";
	read

	php "$script" ;

	read
	clear ;
}


function loop()
{

parent="/root/Desktop/login-system/php_tests";
myarray=$(getchilditem "$parent");
cd "$parent";




for each in $myarray; do
	#echo -e "script: $each";
	runphp "$each";
done		
}




  

php args.php "Nicholas" "Jacquet";

