<?php
	include('databaseConnection.php');

	$users=$db->query('SELECT * FROM users');
	$currentUserIDs=$db->query('SELECT * FROM currentuser');
		
	foreach ($currentUserIDs as $cuID){
		$currentUserID = $cuID['userID'];
	}
	
	$productID=$_POST['product_id'];
	$size=$_POST['shoe_size'];
	
	$query="INSERT INTO cart
			(userID, productID, size) VALUES
			('$currentUserID', '$productID', '$size')";
	$db->exec($query);

	$query="UPDATE shoes SET productQuantity = productQuantity-1
			WHERE productID = '$productID'";
	$db->exec($query);



	include('userCart.php');
?>