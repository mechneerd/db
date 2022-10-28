<?php

$servername = "localhost";
$username="root";
$password="";
$dbname = "prasanthdb";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){ 
	die ("connection unsuccessful".$conn->connect_error);
		}

$sql = "DROP TABLE formdata";


if($conn->query($sql)===TRUE){
	echo "Table droped successfully";
}else{
	echo "Error droping table".$conn->error;	
}

?>