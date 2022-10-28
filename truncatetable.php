<?php 

$servername = "localhost";
$username="root";
$password="";
$dbname = "prasanthdb";

$con = new mysqli($servername,$username,$password,$dbname);

if($con->connect_error){ 
	die ("connection unsuccessful".$con->connect_error);
		}


$sql = "TRUNCATE TABLE formdata";



if($con->query($sql)===TRUE){
	echo 'table truncated';
	

}else{
	echo 'error truncating table';	
	}

$con->close();


?>