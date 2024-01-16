
<?php
session_start();
include("db.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
  $email = $_POST['email'];
  $password = $_POST['password'];

  if(!empty($email) && !empty($password) && !is_numeric($email))
  {
    $query = "select * from form where email = '$email' limit1";
    $result = mysql_query($con,$query);

    if($result)
    {
      if($result && mysqli_num_rows($result) > 0)
      {
        $user_data = mysql_fetch_assoc($result);

        if($user_data['pass'] == $password)
        {
          header("location: success.php");
          die;
        }
      }
    }
    echo "<script> alert('Wrong Password'); </script>";
  }
  else{
    "<script> alert('Wrong Password'); </script>";

  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>BKDR LOGIN</title>
</head>
<body>

    
    <div class="container">
        <form method="POST" action="login.php">
            <h1> BKDR Login</h1>
            <span id="error"></span>
            <div class="input-group">        
                <input id="txtEmail" type="email" placeholder="Email">
            </div>
            <div class="input-group">
                <input id="txtPass" type="password" placeholder="Password">
            </div>

            <div class="form">
                <button id="btnLogin" type="submit">Sign in</button>
            </div>  
            <div class="new">
                <a href="signup.php">Sign Up</a>
            </div>
            <div>
                <a href="index.php">Back to Home</a>
            </div>
        </form>
    </div>
    <!-- <script src="index.js "></script> -->
    
</body>
</html>