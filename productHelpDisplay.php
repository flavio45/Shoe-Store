<?php
	include('databaseConnection.php');

  $productID = $_GET["product_id"];

	$query="SELECT * FROM shoes WHERE productID=$productID";
	$products=$db->query($query);
?>

<html lang="en">

    <header>
        <style>
            html,body{
                margin: 0;
                padding: 0;
            }
        </style>
    </header>
		<head>
			<link rel="stylesheet" href="productHelpDisplay.css">
		</head>

    <body id="body">

    <?php
			include('header.php');
		?>

		<?php foreach ($products as $product): ?>
		<div id="image">
		<img src="<?php echo $product['refImage']?>"
		</div>
		<div class="overallTxt">
			<div id="name">
			<?php echo $product['productName']?>
			</div>
			<div id="desc">
			<?php echo $product['productDesc']?>
		 	</div>
 		</div>
		<?php endforeach;?>

</html>
