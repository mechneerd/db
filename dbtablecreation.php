<?php

$servername = "localhost";
$username="root";
$password="";
$dbname = "prasanthdb";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){ 
	die ("connection unsuccessful".$conn->connect_error);
		}

$sql = "CREATE TABLE customer(customer_id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,first_name VARCHAR(30) NOT NULL, last_name VARCHAR(30) NOT NULL,phone_number BIGINT(10), email VARCHAR(50))";


if($conn->query($sql)===TRUE){
	echo "Table created successfully";
}else{
	echo "Error creating table".$conn->error;	
}

?>