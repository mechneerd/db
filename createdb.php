<?php


$servername = "localhost";
$username="root";
$password="";

$con = new mysqli($servername,$username,$password);

if($con->connect_error){ 
	die ("connection unsuccessful".$con->connect_error);
}

$sql ="CREATE DATABASE prasanthdb";


if($con->query($sql)===TRUE){
	echo "database created successfully";
}else{
	echo "erroe creating databse".$con->error;
}


$con->close();


?>