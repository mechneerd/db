<!DOCTYPE html>
<html>
  <head>
    <title>FORM FOR PRATICE</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>

  <body>

<?php
$name =$pass =$web =$emp = $gen =$mov1 =$mov2='';
$usererr=$passerr=$weberr= $emperr=$generr=$moverr='';


if($_SERVER['REQUEST_METHOD']=='POST'){

	if(empty($_POST['username'])){
	$usererr = 'username is empty';
	}else{
		$name = sanitize($_POST['username']);
		if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){ $usererr='only letters and whitespace allowed';
		}
	}

	
	
	if(empty($_POST['password'])){
	$passerr = 'password is empty';
	}else{
		$pass = sanitize($_POST['password']);
		if(!preg_match("[0-9]",$pass)){ $passerr='only number are allowed';
		}
	}
	


	if(empty($_POST['employ'])){
		$emperr = 'employee id is empty';
		}else{
			$emp = sanitize($_POST['employ']);
	
	
	if(empty($_POST['gender'])){
		$generr = 'please choose one';
		}else{
			$gen = sanitize($_POST['gender']);}

	
	if(empty($_POST['website'])){
		$weberr = 'please choose a website';
		}else{
			$web = sanitize($_POST['website']);}

	$mov = $_POST['movies'];
	if(empty($mov[0])&&empty($mov[1])){
	$moverr= 'please select a movie';
	}else{
	$mov1 = $mov[0];
	$mov2 = $mov[1];
	}

}	
}


function sanitize($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
	}




?>




<h1 style="color:#A9A9A9; margin-left:300px; margin-top:50px;'">Fill the form </h1>
<div id="cont" style="background-color:#00cc99;display:flex;width:250px;height:420px;margin-left:300px;margin-top:20px;padding-left:10px;padding-top:10px;border-radius:10px;">

	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"; method="POST" >
		<lable>username</label>
		<input type="Text"  name='username'></input><span class='error'><?php echo '*'.$usererr ?></span><br><br>

		<lable>password</label>
		<input type="password" name="password"></input><span class='error'><?php echo '*'.$passerr ?></span><br><br>
	

	
	<lable>Employee number</label>
	<input type="number" name='employ' min="1" max="99999"></input><br>
	<span class='error'><?php echo '*'.$emperr ?></span><br>

	<lable>which website you want to log in to? </label>
	<select name="website" style="background-color:#6699ff;color:#ff9900">
		<option ></option>
		<option value="google">google</option>
		<option value="facebook">facebook</option>
		<option value="twitter">twitter</option>
		<option value="quora">quora</option>
	</select><span class='error'><?php echo '*'.$weberr ?></span><br>
	<br>

	<p>Gender:</p>
		<input type="radio" name = "gender" class="gender" value="Male" name="g" style="margin-left:105px;"></input>
		<label>Male</label><br>
		<input type="radio" name = "gender" class="gender" value="Female" name="g" style="margin-left:105px;"></input>
		<label>Female</label><span class='error'><br>
		<?php echo '*'.$generr ?></span><br>
		

	<lable>MovieWatched:</label>
		<input type="checkbox" name='movies[]'  value="BB">BB</input><br>
		<input type="checkbox" name='movies[]'  value="RRR" style="margin-left:105px;">RRR</input><br>
		<input type="checkbox"  name='movies[]'  value="KGF" style="margin-left:105px;">KGF</input><br>
		<span><?php echo "*".$moverr ?></span><br>
		
	<input type="submit" id='submit' style="background-color:#00cc00;" ></input><br>
	<form>

</div>


<div style = "margin-top:30px;width:250px;height:100px;margin-left:300px;text-align:center;color:#eeeee4;">


<?php 

echo $name.'<br>';
echo $pass.'<br>';
echo $emp .'<br>';
echo $web.'<br>';
echo $gen .'<br>';
echo $mov1 .'<br>';
echo $mov2 .'<br>';

$severname = 'localhost';
$username='root';
$password='';
$dbname='prasanthdb';

$con = new mysqli($servername,$username,$password,$dbname);

if($con->connect_error){
	die( 'failed connection'.$con->connect_error);}
$sql = "INSERT INTO formdata (emp_number,user_name,password,website,gender,movie) VALUES($emp,$name,$pass,$web,$gen,$mov1) ";


if($con->query($sql)===TRUE){
	echo "data inserted ";
	}else{
	echo 'error inserting data';}

?>
  </div>
  </body>
</html>

