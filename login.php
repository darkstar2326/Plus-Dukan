



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel = "icon" href = "Images/Title logo.jpg" type = "image/x-icon">
	<a href="index.html">Back to Home</a>
</head>
<body>
	<style type="text/css">
		
		#text{
			height: 25px;
			border-radius: 5px;
			padding: 4px;
			border: solid thin #aaa;
			width: 100%;
			text-align: center;
		}
		#button{
			padding: 10px;
			width: 100px;
			color: white;
			background-color: lightblue;
			border: none;
		}
		#box{
			background-color: grey;
			margin: auto;
			width: 300px;
			padding: 20px;
		}
		.login{
			width: 300px;
			box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.3);
			background: #fff;
			padding: 20px;
			margin: 8% auto 0 ;
			text-align: center;
			border-radius: 50px;
		}
		.text{
			font-size: 25px;
		}
		.login h1{
			color: #1c8adb;
			margin-bottom: 30px;
		}
		.input{
			border-radius: 20px;
			padding: 10px;
			margin: 10px 0;
			width: 100%;
			border: 1px solid #999;
			outline: none;
		}
		.button{
			color: #fff;
			width: 100%;
			padding: 10px;
			border-radius: 20px;
			font-size: 15px;
			margin: 10px 0;
			border: none;
			outline: none;
			cursor: pointer;
			background-color: #1c8adb;
			transition:  1s;

		}
		.button:hover{
			background-color: #6734eb;
		}
		a{
			text-decoration: none;
			font-size: 20px;
		}
		img{
			width: 70px;
			margin-top: -50px;
		}
		body{
			margin: 0;
			padding: 0;
			font-family: sans-serif;
			background-image: url(photo.jpg);
			background-size: cover;
			background-position: center;
			text-align: center;
		}
	</style>
<div class="login">
	<img src="user image.png">
<form method="post">
	<div style="font-size: 20px;margin: 10px;color: white;"><h1>Login Now</h1></div>
	<input id="text" type="text" name="user_name" placeholder="Enter the Username"><br><br>
    <input id="text"type="password" name="password" placeholder="Enter the Password "><br><br>

	<input class="button"type="submit" value="Login"><br><br>

	<a href="signup.php">Not a user? Sign up</a><br><br> 
</form>
</div>
</body>
</html>










<?php
session_start();
include("connection.php");
include("functions.php");
 if ($_SERVER['REQUEST_METHOD'] == "POST") {
 	// code...
 	$user_name = $_POST['user_name'];
 	$password = $_POST['password'];

 	if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) 
 	{
 		
 		$query = "select  * from users where user_name = '$user_name' limit 1 ";

 		$result = mysqli_query($con, $query);
		if($result)
		{
			if ($result && mysqli_num_rows($result) > 0) {
			$user_data = mysqli_fetch_assoc($result);
			if($user_data['password'] === $password){
				
				$_SESSION['user_id'] = $user_data['user_id'];
				header("Location: afterloginindex.php");
 				die;

			}
		}
	}
		}

 		echo "Wrong username or password. Correct it and try again!";
 		
 	}
 	else{
 		echo "Wrong username or password. Correct it and try again!";
 	}
 
?>