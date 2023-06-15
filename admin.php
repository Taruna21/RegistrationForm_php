<!doctype html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<title>Taruna</title>
	
	<style>
	.inline-80 {
		display: inline-block; 
		width: 80px;
	}
	</style>
</head>
<body>
	<div>
		&nbsp;
	</div>
	
	<div class="container" id="menu">
		<h1> User Detail </h1>
	</div>
	
	<div>
		&nbsp;
	</div>
  
	<?php
	$host = 'localhost:3306';
	$user = 'root';
	$pass = '';
	$dbname = 'test1';

	$conn = mysqli_connect($host, $user, $pass, $dbname);

	if (!$conn) {
		die('Could not connect: ' . mysqli_connect_error());
	}


	$sql = "SELECT * FROM registration";
	$result = mysqli_query($conn, $sql);
	?>

	<div class="container" id="listing">
		<h3>List</h3>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Number</th>
				
				</tr>
			</thead>
			<tbody>
				<?php
				//if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						$firstname = $row['firstname'];
						$lastname = $row['lastname'];
						$gender = $row['gender'];
						$email = $row['email'];
						$number = $row['number'];
						?>
						<tr>
							<td><?php echo $firstname; ?></td>
							<td><?php echo $lastname; ?></td>
							<td><?php echo $gender; ?></td>
							<td><?php echo $email; ?></td>
							<td><?php echo $number; ?></td>
							
						</tr>
						<?php
          }
          ?>
				<!-- } else {
					echo "<tr><td colspan='6'>No records found</td></tr>";
				}
				?> -->
			</tbody>
		</table>
	</div>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	
