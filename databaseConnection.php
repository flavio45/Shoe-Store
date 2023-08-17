<?php
	$dsn='mysql:host=localhost; dbname=shoebin_ecomm';
	$username='root';
	$password='';
	
	
	try{
		$db = new PDO($dsn, $username, $password);
	}
	catch(PDOException $e){
		$error = $e->getMessage();
	
?>

	<p> Unable to connect database </p>
	<p><?php echo $error?></p>
	
<?php
		exit();
	}
?>

