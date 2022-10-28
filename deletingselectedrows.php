<?php 

$servername = "localhost";
$username="root";
$password="";
$dbname = "prasanthdb";

$con = new mysqli($servername,$username,$password,$dbname);

if($con->connect_error){ 
	die ("connection unsuccessful".$con->connect_error);
		}


$del = "DELETE FROM formdata WHERE password=0";


if($con->query($del)===TRUE){
	echo 'Deleted the selected row';
}else{
	echo 'error deleting the selected row'.$con->error;}

$con->close();


?>