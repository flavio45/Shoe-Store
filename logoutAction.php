<?php	
	include('databaseConnection.php');
	
	
	
	$db->query('TRUNCATE TABLE currentuser');
	
	include('homePage.php');
?>