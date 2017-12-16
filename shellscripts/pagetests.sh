#!/bin/bash

function ff()
{
	url="$1";
	firefox "$url";
}


for each in "localhost" "127.0.0.1" "127.0.0.1/phpmyadmin"; do
	ff "$each";
done

#ff "127.0.0.1/phpmyadmin";
