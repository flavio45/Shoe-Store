<?php
	include('databaseConnection.php');

	$userID=$_POST['user_id'];
	$productID=0;
	$size=0;
	
	$cartItems=$db->query("SELECT * FROM cart WHERE userID='$userID'");

	foreach ($cartItems as $item) {
		$productID = $item['productID'];
		$size = $item['size'];
		$query="INSERT INTO orders
			(userID, productID, size) VALUES
			('$userID', '$productID', '$size')";
		$db->exec($query);
	}

	$query="DELETE FROM cart WHERE userID='$userID'";
	$db->exec($query);

	include('orderPlaced.php');
?>