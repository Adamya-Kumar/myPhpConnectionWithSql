<?php
$conn=mysqli_connect("localhost","root","","SQL");
if($conn){
	echo "successfull connection";
	
	//connecting mysql with my phpcode..
	//$query="insert into connectSQL values('adamya',22)";
	//mysqli_query($conn,$query);
	
	
	//creating of db using php code.. 
	//$query1="create database phpCodeSql";
	//$query2="use phpCodeSql";
	//$query3="create table students(name varchar(20),age int)";
	//mysqli_query($conn,$query1);
	//mysqli_query($conn,$query2);
	//mysqli_query($conn,$query3);
	
}
else{
	echo "failed connection";
}
mysqli_close($conn);
?>
