#!/bin/bash

function starts()
{
	/etc/init.d/mysql restart;
	/etc/init.d/apache2 restart; 
}

function movechilditems() 
{
path="$1";
destination="$2";
files=$(ls $path);
for i in $files; do
	echo "$path/$i";
	mv "$path/$i" "$destination" -v;
done
}

function getchilditems()
{
  obj="$1";
  ls $obj;
}

function ff()
{
	url="$1";
	firefox "$url";
}

#moves all the php_pages into /var/www/html
movechilditems "/$USER/Desktop/login-system/php_pages" "/var/www/html";


starts;

parent="/var/www/html";
myarray=$(getchilditems "$parent");
cd "$parent";

for each in $myarray; do
	#echo -e "script: $each";
	ff "127.0.0.1/$each";
done		


