<?php

		include('databaseConnection.php');

		$currentUserIDs=$db->query('SELECT * FROM currentUser');
		$userID = 0;

		#Look through the users db to find a matching email.
		foreach ($currentUserIDs as $x){
			$currentUserID = $x['userID'];
			$userID = $currentUserID;
		}

?>

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Project.css">
    <script src="https://kit.fontawesome.com/5fbee91408.js" crossorigin="anonymous"></script>

</head>

<nav id="navigation">

    <a href="Project.html" title="Return to the site's homepage"><img src="icon/header.png" alt="The Shoe Bin"></a>
        <ul>

            <li> <a href="homePage.php">Home</a></li>
            <li> <a href="shopPage.php">Shop</a></li>
            <li> <a href="Help_Center.php">Help Center</a></li>

			<?php
					if($userID == 0){
			            ?><li> <a href="logIn.php">Login</a></li>
						<li> <a href="registration.php">Registration</a></li><?php
					}
					else{
						?><li><a href="logout.php">Log Out</a></li><li>
						<a href="userCart.php">Cart</a></li><?php
					}
			?>


    </ul>


</nav>

	
		<div class="maintimer">
			<div class="dealtimer">00 : 00 : 00 : 00</div>
			<script src="timer.js"></script>
			<a href="shopPage.php">Don't miss our holiday deals!</a>
		</div>

