<?php
session_start();

include("db.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    
    if(!empty($email) && !empty($password) && !is_numeric($email))
    {
        $query = "insert into form (name, username, email, password, confirmpassword) values ('$name','$username','$email','$password','$confirmpassword')";
        
        mysqli_query($con,$query);

        echo "<script type='text/javacript'> alert('Succesfully Register') </script";

    }else
    {
        echo "<script type='text/javacript'> alert('Please Enter some valid Information') </script";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
    <title>Registration BKDR</title>
</head>
<body>
    <div class="signup">
    <h1>Registration BKDR</h1>
    <form class="" action="" method="post" autocomplete="off">
        <label for="name">Name : </label>
        <input type="name" name="name" id = "name" required value=""> <br>
        <label for="Username">Username : </label>
        <input type="username" name="username" id = "username" required value=""> <br>
        <label for="Username">Email : </label>
        <input type="email" name="email" id = "email" required value=""> <br>
        <label for="password">Password : </label>
        <input type="password" name="password" id = "password" required value=""> <br>
        <label for="confirmpassword">Confirm Password : </label>
        <input type="password" name="confirmpassword" id = "confirmpassword" required value=""> <br>
        <input type="submit" name="" value="Submit">
    </form>
    <br>
    <p>Already have a account?<a href="Login.php">Login</a> </p>
  
    </div>
</body>
</html>