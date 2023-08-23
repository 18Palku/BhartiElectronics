<?php



$link = mysqli_connect("localhost", "root", "" ,"mobile");

// check connections 
if($link===false){
die("error could not connect".mysqli_connect_error())	;}

$billingtable="create table billing1 ( id int(20) primary key auto_increment, Full_Name varchar(100), Product_Name varchar(20), 
Phone_Number int(10), Email varchar(30), Address varchar(50), City varchar(20), State varchar(10), ZIP int(10),Bought DATETIME DEFAULT CURRENT_TIMESTAMP)";
if( mysqli_query($link,$billingtable))
{
	echo"Table create successfully";
}
else{
echo"couldnot create Table".mysqli_error($link);

}

?>