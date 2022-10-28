<?php

$servername = "localhost";
$username="root";
$password="";
$dbname = "prasanthdb";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){ 
	die ("connection unsuccessful".$conn->connect_error);
		}

$sql = "CREATE TABLE formdata(emp_id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,user_name VARCHAR(30) NOT NULL, password INT(8) NOT NULL,emp_number INT(8),website VARCHAR(30), gender VARCHAR(10),movie VARCHAR(5))";


if($conn->query($sql)===TRUE){
	echo "Table created successfully";
}else{
	echo "Error creating table".$conn->error;	
}

?>