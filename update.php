<?php 

$servername = "localhost";
$username="root";
$password="";
$dbname = "prasanthdb";

$con = new mysqli($servername,$username,$password,$dbname);

if($con->connect_error){ 
	die ("connection unsuccessful".$con->connect_error);
		}


$sql = "DELETE FROM formdata WHERE password=0 ";




if($con->query($sql)===TRUE){
	echo 'db updated successfully';
	}else{
	echo 'error updating db';}
	

$con->close();


?>