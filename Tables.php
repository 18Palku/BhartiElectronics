<?php



$link = mysqli_connect("localhost", "root", "" ,"mobile");

// check connections 
if($link===false){
die("error could not connect".mysqli_connect_error())	;}

$vivobrand="create table vivo (id int(20) primary key auto_increment, Name varchar(20), version varchar(20),Price int(20))";
if( mysqli_query($link,$vivobrand))
{
	echo"Table create successfully";
}
else{
echo"couldnot create Table".mysqli_error($link);

}



$link = mysqli_connect("localhost", "root", "" ,"mobile");

// check connections 
if($link===false){
die("error could not connect".mysqli_connect_error())	;}

$oppobrand="create table oppo (id int(20) primary key auto_increment, Name varchar(20), version varchar(20),Price int(20))";
if( mysqli_query($link,$oppobrand))
{
	echo"Table create successfully";
}
else{
echo"couldnot create Table".mysqli_error($link);

}


$link = mysqli_connect("localhost", "root", "" ,"mobile");

// check connections 
if($link===false){
die("error could not connect".mysqli_connect_error())	;}

$oneplusbrand="create table oneplus (id int(20) primary key auto_increment, Name varchar(20), version varchar(20),Price int(20))";
if( mysqli_query($link,$oneplusbrand))
{
	echo"Table create successfully";
}
else{
echo"couldnot create Table".mysqli_error($link);

}





$link = mysqli_connect("localhost", "root", "" ,"mobile");

// check connections 
if($link===false){
die("error could not connect".mysqli_connect_error())	;}

$redmibrand="create table redmi (id int(20) primary key auto_increment, Name varchar(20), version varchar(20),Price int(20))";
if( mysqli_query($link,$redmibrand))
{
	echo"Table create successfully";
}
else{
echo"couldnot create Table".mysqli_error($link);

}









?>