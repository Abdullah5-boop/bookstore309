<?php

$conn = new mysqli('localhost', 'root', '', 'bookstore309');
// Create a connection to the database
// $conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
	$phone =$_POST["phone"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Prepare and execute the SQL query to insert data into the database
    $sql = "INSERT INTO bookstore1 (name,phone, email, message) VALUES ('$name','$phone','$email', '$message')";
   

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="asif.css">

	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,800;1,900&display=swap" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Contact Section</title>
</head>
<body>
	<div class="container">
		<main class="row">
			
			

			<section class="col left">
				
				

				<div class="contactTitle">
					<h2>Book Store Info</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
				</div>


				<div class="contactInfo">
					
					<div class="iconGroup">
						<div class="icon">
							<i class="fa-solid fa-phone"></i>
						</div>
						<div class="details">
							<span>Phone</span>
							<span>+880 110 000 00</span>
						</div>
					</div>

					<div class="iconGroup">
						<div class="icon">
							<i class="fa-solid fa-envelope"></i>
						</div>
						<div class="details">
							<span>Email</span>
							<span>asif@gmail.com</span>
						</div>
					</div>

					<div class="iconGroup">
						<div class="icon">
							<i class="fa-solid fa-location-dot"></i>
						</div>
						<div class="details">
							<span>Location</span>
							<span>Dhaka,Bangladesh</span>
						</div>
					</div>

				</div>

				

			

			</section>

			

			<section class="col right">
				
				

				<div class="contact-form">
					<h1>Contact Me</h1>
					<form action="index.php" method="post">
						<label for="name">Name:</label>
						<input type="text" id="name" name="name" required>
						<label for="Phone">Phone Number:</label>
						<input type="phone" id="phone" name="phone" required>
						<label for="email">Email:</label>
						<input type="email" id="email" name="email" required>
						<label for="message">Message:</label>
						<textarea id="message" name="message" required></textarea>
						<button type="submit">Submit</button>
					</form>
				</div>

				
			</section>

			
			
		</main>
	</div>
	<footer>
		<p>&copy; 2023 Book Store. All rights reserved......</p>
		<div class="socialMedia">
			<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
			<a href="#"><i class="fa-brands fa-twitter"></i></a>
			<a href="#"><i class="fa-brands fa-instagram"></i></a>
			<a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
		</div>
	</footer>
</body>
</html>
=======
echo"hello world";
echo "This is asif";
echo "hello world asifvbvnbnv  ";
echo " aaaaaaaaaa"
?>
>>>>>>> 5ce1e9fa0101b099902b6fdf8fc6fd6588ec9c8e
