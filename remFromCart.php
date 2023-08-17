<?php
	include('databaseConnection.php');
	
	$cartID=$_POST['cart_id'];
	$productID=$_POST['product_id'];
	$userID=$_POST['user_id'];
	
	$query="DELETE FROM cart WHERE cartID='$cartID' AND productID='$productID' AND userID='$userID'";
	$db->exec($query);
	
	$query="UPDATE shoes SET productQuantity = productQuantity+1
			WHERE productID = '$productID'";
	$db->exec($query);
	
	include('userCart.php');
?>