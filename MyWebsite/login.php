<?php
  session_start();

  include("db.php");
  
  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(!empty($email) && !empty($password) && !is_numeric($email))
    {
      $squery = "select from from where email = '$gmail' limit 1";
      $result = mysqli_query($con, $query);

      if($result)
      {
        if($result && mysql_num_rows($result) > 0)
        {
          $user_data = mysqli_fetch_assoc($result);

          

        }
      }
      echo "<script type='text/javacript'> alert('wrong username or password') </script";
    }
    else{
      echo "<script type='text/javacript'> alert('wrong username or password') </script";
   }
 }
  
?>
<?php
require 'success.php';
if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $result = mysql_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email ='$usernameemail'");
    $row = mysqli_fetch_assoc($result);
    if(mysql_num_rows($result) > 0){
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: error.php");
        }
        else{
            echo
            "<script> alert('Wrong Password'); </script>";
        }
    }
     else{
        echo
        "<script> alert('User Not Registered'); </script>";
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
    
    
    
    <h1>HELLO WELCOME!</h1>
    
    <div class="container">
    
        <form action="post">
            <h1>Login</h1>
            <span id="error">Invalid username or password!</span>
            <div class="form">        
                <input id="txtEmail" type="email" placeholder="Username">
            </div>
            <div class="form">
                <input id="txtPass" type="password" placeholder="Password">
            </div>
            <div class="remember">
                <input type="checkbox" placeholder="checkbox">
                <label>remember me</label>
            </div>
            <div class="forgot-pass">       
                <a href="#">Forgot password?</a>
            </div>
            <div class="form">
                <button id="btnLogin" type="button" onclick="login()">Sign in</button>
            </div>  
            <div class="new">
                <a href="signup.php">Sign Up</a>
            </div>
            <div>
                <a href="index.php">Back to Home</a>
            </div>
        </form>
    </div>

    <script src="index.js "></script>

</body>
</html>