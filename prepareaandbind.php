<?php 

$servername = "localhost";
$username="root";
$password="";
$dbname = "prasanthdb";

$con = new mysqli($servername,$username,$password,$dbname);

if($con->connect_error){ 
	die ("connection unsuccessful".$con->connect_error);
		}


$pre = $con->prepare("INSERT INTO (first_name,last_name,phone_number,email) VALUES(?,?,?,?)");
$pre->bind_param("ssbs",$first_name,$last_name,$phone_number,$email);

$first_name = 'alex';
$last_name='ravi';
$phone_number=69818651;
$email='grezbb@gmail.com';


$pre->execute();


$con = close();

$pre = close();

?>