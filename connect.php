<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];

	// Database connection
	
	$host = 'localhost:3306';
	$user = 'root';
	$pass = '';
	$dbname = 'test1';

	$conn = mysqli_connect($host, $user, $pass , $dbname);

	if(!$conn){
		die('Could not connect :' .mysqli_connect_error());
	}
	echo 'Connected successfully<br/>';

	
$sql = "INSERT INTO registration(firstname, lastname, gender , email , password, number)
VALUES ('$firstName', '$lastName','$gender', '$email', '$password', '$number')";


if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
  } else {
	echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  ?>