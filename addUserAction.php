<?php	
	include('databaseConnection.php');
	
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$password=$_POST['password'];
	$password2=$_POST['password2'];
	$email=$_POST['email'];

	if ($password === $password2){

		$db->exec("INSERT INTO users 
			(userFirstName, userLastName, email, password) VALUES
			('$firstname', '$lastname', '$email', '$password')");
	}
	
	else {
		echo '<script type="text/javascript">';
		echo ' alert("Error: Confirm Password field needs to match Password field")';  //not showing an alert box.
		echo '</script>';
	}
	
	
	
	include('registration.php');
?>