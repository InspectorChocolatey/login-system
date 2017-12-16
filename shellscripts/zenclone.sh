#!/bin/bash

function clone()
{
	repo="$1"
	url="https://github.com/InspectorChocolatey/$repo";
	git clone "$url" "$repo";	
}

function doit()
{
	arg="$1";
	repo="$2";
	echo "Cloning to $arg";
	clone "$repo";
}

function dontdoit()
{
	arg="$1";
	echo "$rep already found at: $arg"; 
}

function testdir()
{
	[ -d $1 ] && echo "True" || echo "False";
}

function nest()
{
	rep="$1";
	path="/$USER/Desktop/$rep";
	test=$(testdir $path);
	[ $test != "True" ] && doit "$path" "$rep" || dontdoit "$path";
}

function zenclone()
{
desktop="/$USER/Desktop";
cd "$desktop";
str=$(zenity --entry --text="Enter a repository name:");
clear;
nest "$str";
}

zenclone;
