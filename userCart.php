<?php

		include('databaseConnection.php');

		$users=$db->query('SELECT * FROM users');
		$currentUserIDs=$db->query('SELECT * FROM currentUser');
		$productID = 0;

		$totalPrice = 0;

		foreach ($currentUserIDs as $x){
			$currentUserID = $x['userID'];
		}

		$cart=$db->query("SELECT * FROM shoes INNER JOIN cart ON cart.productID = shoes.productID WHERE cart.userID = '$currentUserID'");

?>


<html lang="en">
<div id="container">
<header>

	<style>
		html, body {
			margin: 0;
			padding: 0;

		}

		#cartItemsHeader{
			text-align: center;
		}

		#cartImage {
			border: 3px solid black;
			margin-left: 70%; /*42.5%*/
		}

		#cartName{
			text-align: center;
			font-weight: bold;
			margin-bottom: 1em;
		}

		input[type=submit]:hover{
			cursor: pointer;
		}

		h2{
			text-align: center;
		}
        #container{
                min-height: 100%;
                position: absolute;
                padding-bottom: 140px;
                width: 100%;
            }
            #body{
                padding: 10px;
                padding-bottom: 160px;
            }
            #finalfooter{
                position:absolute;
                bottom:0;
                width:100%;
                height: 160px;
                margin: 0;
                padding-bottom: 20px;
            }
            #footer{
            position: absolute;
            left: 0;
            bottom: 0;
            height: 160px;
            width: 100%;
            overflow:hidden;
            background-color: black;
            color: white;
            }
            #footer p a:after{
                color: white;
                text-decoration: none;
            }
            #footer p a:link{
                color: white;
            }
            #footer p a:hover{
                color: blue;
            }
            #footer p a:visited{
                color: white;
            }

            #middlefooter{
                float: left;
                font-size: 100%;
            }
            #middlefooter a:after{
                text-decoration: none;
                color: white;
            }
        #middlefooter a:link{
            text-decoration: none;
            color: white;
        }

        #middlefooter a:visited{
            color: white;
        }
        #middlefooter a:hover{
            color: blue;
        }

        #middlefooter ul{
            list-style-type: none;
        }
        #rightfooter{
            float:right;
            margin-right: 30px;
        }
        #rightfooter a:link{
            text-decoration: none;
            color: white;
        }
        #rightfooter a:visited{
            text-decoration: none;
            color: white;
        }

        #rightfooter a:hover{
            color:white;
        }
        #bottom{
            clear: both;
            color: white;
        }
        #bottom a:link{
            color: white;
        }
        #bottom a:hover{
            color: white;
        }
        #bottom a:visited{
            color: white;
        }
        .fab fa-instagram fa-3x{
          width: 1%;
            height: 1%;
        }
        .fab fa-twitter fa-3x{
                width: 1%;
                height: 1%;
            }

	</style>
</header>

<head>

        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="Project.css">

</head>

<body>


	<?php
			include('header.php');
    ?>

	<h1 id="cartItemsHeader">Your Cart Items </h1>


	<?php	foreach($cart as $cartItem):
		$totalPrice+=$cartItem['listPrice'];
	?>
		<table style="margin:auto">
			<tr>
				<td><img id="cartImage" src="<?php echo $cartItem['refImage']?>" width="350" height="262" style="margin: 0 0"></td>
				<td><tr>
						<td><option id="cartName" value="<?php	echo $cartItem['productName']?>"> <?php	echo $cartItem['productName']?></option></td>
					</tr>
					<tr>
						<td>$<?php	echo $cartItem['listPrice']?></td>
						<td><form action="remFromCart.php" method="post">
							<input type="hidden" name="cart_id" value=<?php echo $cartItem['cartID']?>>
							<input type="hidden" name="product_id" value=<?php echo $cartItem['productID']?>>
							<input type="hidden" name="user_id" value=<?php echo $currentUserID?>>
							<input type="submit" value="Remove from cart" style="background-color:steelblue; color:white; margin-right:105%;">
						</form></td>
					</tr>
				</td>
			</tr>
		</table>

	<?php	$productID = $cartItem['productID'];

			endforeach;?>


	<?php
			if($productID == 0){
	            ?><h2>Oops! Your cart is empty. You can add items to the cart from the Shop page!</h2><?php
			}
			else {?>
				<div style="float: left; margin-left: 90%; border:5px solid black; padding:5px 0px 0px 66px;">
					<h3>$<?php echo $totalPrice?></h3>
					<form action="placeOrder.php" method="post">
						<input type="hidden" name="user_id" value=<?php echo $currentUserID?>>
						<input type="submit" value="Place order" style="background-color:steelblue; color:white;">
				</form>
				</div><?php

			}?>

</body>


</div>
</html>
