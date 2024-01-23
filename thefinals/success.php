<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/success.css">
	<title>Document</title>
</head>
<body>
<section>
        <div class="content">
            <div class="main-content">
                <h2 data-aos="fade-right" data-aos-duration="2000">Hello, <?php echo $user_data['user_name']; ?></h2>
                <h1 data-aos="fade-left" data-aos-duration="2000" data-aos-delay="200">Welcome to BKDR</h1>
				
                <h4 data-aos="fade-right" data-aos-duration="2000" data-aos-delay="400">MAKE ENJOY THE DRINK!</h4>
                <p data-aos="flip-down" data-aos-duration="2000" data-aos-delay="600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa ullam ut nostrum, incidunt quisquam fugiat corporis omnis blanditiis voluptatum placeat iure maiores velit nulla earum, vel suscipit vero, magni impedit.</p>
					
				<br><p>already to logout? <a href="index.php">LOGOUT</a></p><br><br>
            
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        offset:1
      });
    </script>


	
	Hello, <?php echo $user_data['user_name']; ?>
	
</body>
</html>