<?php

//activity id
function random_num($length){

$text = "";
if($length<5)
{
	$length = 5;
}

$len = rand(4, $length);

for ($i=0; $i < $len; $i++) 
{ 
	$text .= rand(0,9);
}

return $text;
}

//date and time today
date_default_timezone_set('Asia/Manila');
$date = date('Y-m-d H:i:s');



?>
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="css/style_login.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">
	
	<link rel="shortcut icon" href="images/logo.png">

	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

	<title>DepEd Manila</title>
</head>
<body>

	<div class="front">
		
			
				
		<img src="https://img.icons8.com/color/96/000000/person-male.png" class="sign-in">
			<form action = "" method = "POST">
				<br>
			
				<input type="text" name='username' class="txb" placeholder = "Email"  required>
				<br>
				

				
				<input type="password" name='password' class="txb" placeholder = "Enter your password" required>
				<br>
				
				<input type="submit" style = "cursor: pointer;" name='login-btn' value = "LOGIN" class="button">
				<br>



<?php

	session_start();
	require('./includes/deped_inc.php');
	require('./database/db.php');

	//log in button
		
	if(isset($_SESSION['username']) && isset($_SESSION['password']))
	{
		header("location: dashboard.php");
	}

	

	if(isset($_POST['login-btn']))
	{	
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password = md5($password);
		
		$admin = $_POST['username'];
		$action = "Sign In";
		$description = "Sign in as Super Admin";
		$target = NULL;

		//function of log in
		$login = new DEPED();
		$login->login_user($date, $admin, $action, $description, $username, $password, $target);

		
	}

?>	
			</form>
		

	</div>
		
		<img src="images/logo.png" height="20%" width="20%" class="logo">

		<script type="text/javascript" src="bootstrap.min.js"></script>
		
</body>
</html>



