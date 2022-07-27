

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Signup</title>
	<link rel = "icon" href = "Images/Title logo.jpg" type = "image/x-icon">
	<a href="index.html">Back to Home</a>
</head>

<body>
	

	<style type="text/css">
		
		#text{
			height: 25px;
			border-radius: 5px;
			padding: 4px;
			border: solid dotted #aaa ;
			width: 100%;
			text-align: center;
			
		}
		#button{
			padding: 10px;
			width: 100px;
			color: white;
			background-color: lightblue;
			border: none;
			font-size: 25px;
		}
		#button:hover{
			background-color: burlywood;
		}
		#box{
			background-color: grey;
			margin: auto;
			width: 300px;
			padding: 20px;
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
		.signup{
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
		.signup h1{
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
		hr{
			margin-top: 20px;
			width: 80%;
		}
		img{
			width: 70px;
			margin-top: -50px;
		}
		


	</style>
<div class="signup">
	<img src="user image.png">
<form method="post">
	<div style="font-size: 20px;margin: 10px;color: white;"><h1>Signup Now</h1></div>
	<input id="text" class = "input"type="text" name="user_name" placeholder="Enter your Username"><br><br>
    <input id="text" class= "input" type="password" name="password" placeholder="Enter your Password"><br><br>
    
    <input id="text" class= "input" type="text" name="email" placeholder="Enter your E-mail"><br><br>
    <input id="text" class= "input" type="text" name="phone" placeholder="Enter your Phone no."><br><br>
    

    <hr>
<p>Remember your password as you cannot reset or change it.</p>
<hr>
	
	<input class="button" type="submit"  value="Signup"><br><br>

	<a href="login.php" class="text">Already a user? Login</a><br><br> 
</form>
</div>
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
 	$email = $_POST['email'];
 	$phone = $_POST['phone'];

 	if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) 
 	{
 		$user_id = random_num(20);
 		$query = "insert into users (user_id,user_name,password,email,phone) values ('$user_id','$user_name','$password','$email','$phone')";

 		mysqli_query($con, $query);
 		header("Location: login.php");
 		die;
 	}
 	else{
 		echo "Please enter some valid information!";
 	}
 }
?>