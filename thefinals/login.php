<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];


      
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: success.php");
						die;
					}
				}
				echo "<script> alert('Wrong username or password'); </script>";
			}
			else{
			  "<script> alert('Wrong Password'); </script>";
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link rel="stylesheet" href="css/takeall.css">
	<title>Login</title>
</head>
<body>
	<div class="form-container">
		<form method="post">
      <h1>BKDR login</h1>
         <input id="text"type="text" name="user_name" required placeholder="enter your username"><br><br>
         <input id="text"type="password" name="password" required placeholder="enter your password"><br><br>

			
         <input type="submit" value="Login" class="form-btn"><br><br>

			<p>don't have an account? <a href="signup.php">Click to Signup</a></p><br>
			<p><a href="index.php">BACK</a></p>
		</form>
	</div>
</body>
</html>