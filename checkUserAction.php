<?php	
	include('databaseConnection.php');
	
	$password=$_POST['password'];
	$email=$_POST['email'];

	$flag = FALSE;
	$userID = 0;
	
	#Look through the users db to find a matching email. 
	$users=$db->query('SELECT * FROM users');
	foreach ($users as $user){
		if($user['email'] == $email){
			$flag = TRUE;
			#get the current user id associated with their email
			$userID=$user['userID'];
			break;
		}
	}
	
	
	
	
	if($flag == TRUE){
		#Clear currentUser, add the user associated with this email
		#redirect to cart page
		$db->query('TRUNCATE TABLE currentUser');
		$db->query("INSERT INTO currentUser (userID) VALUES ('$userID')");
		include('userCart.php');
		
	}
	
	else{
		#send the user back to login and throw an error box
		echo '<script type="text/javascript">';
		echo ' alert("Error: User not found")';
		echo '</script>';	
		include('login.php');
	}

?>