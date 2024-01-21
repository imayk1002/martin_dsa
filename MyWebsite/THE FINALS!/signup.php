<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Signup BDKR</title>
   <link rel="stylesheet" href="css/takeall.css">

</head>
<body>
	<div class="form-container">
		<form method="post">
			<h1>BKDR Signup</h1>

			<input id="text" type="text" name="user_name" required placeholder="enter your username"><br><br>
            <input id ="email"type="email" name="email" required value=""> <br>
            <input id="text" type="password" name="password" required placeholder="enter your password"><br><br>

			
			<input type="submit" value="Signup" class="form-btn"><br><br>

			<p>already have an account? <a href="login.php">Login now</a></p><br><br>
		</form>
	</div>
</body>
</html>