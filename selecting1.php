<?php 

$servername = "localhost";
$username="root";
$password="";
$dbname = "prasanthdb";

$con = new mysqli($servername,$username,$password,$dbname);

if($con->connect_error){ 
	die ("connection unsuccessful".$con->connect_error);
		}


$sql = "SELECT first_name ,email FROM CUSTOMER ";

$result = $con->query($sql);


if($result->num_rows > 0){
	while ($rows = $result->fetch_assoc()){
		echo "first name is ".$rows['first_name'].' and your email id is '.$rows['email'].'<br>';
	}

}else{
	echo '0 result';	
	}

$con->close();


?>