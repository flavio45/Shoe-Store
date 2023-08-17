<?php
	include('databaseConnection.php');
	
	$orderID=$_POST['order_id'];
	
	$query="DELETE FROM orders WHERE orderID='$orderID'";
	$db->exec($query);
	
	include('Order_Status.php');
?>