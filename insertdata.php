<?php

$servername = "localhost";
$username="root";
$password="";
$dbname = "prasanthdb";

$con = new mysqli($servername,$username,$password,$dbname);

if($con->connect_error){ 
	die ("connection unsuccessful".$con->connect_error);
		}


$sql= "INSERT INTO customer(first_name,last_name,phone_number,email) VALUES ('karun','nair','9555424422','ranjth@outlook.com')";
$sql.= "INSERT INTO customer(first_name,last_name,phone_number,email) VALUES ('rajiv','reddy','8015149428','kavin@gmail.com')";

if($con->query($sql)===TRUE){
	echo "Data inserted successfully";
}else{
	echo "Error inserting data".$con->error;	
}


?>