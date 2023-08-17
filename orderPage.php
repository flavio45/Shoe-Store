<?php
	
		include('databaseConnection.php');
		
		$orderID=$_POST['order_id'];
		$email=$_POST['email'];
		$userID=0;
		
		$totalPrice=0;
		
		$users=$db->query("SELECT * FROM users");
		foreach ($users as $user) {
			if($user['email'] == $email) {
				$userID=$user['userID'];
			}
		}			
		
		$query="SELECT COUNT(*) AS rowCount FROM shoes INNER JOIN orders ON orders.productID = shoes.productID WHERE orders.userID = '$userID' AND orders.orderID = '$orderID'";
		$counts=$db->query($query);
		foreach ($counts as $count) {
			$rowCount=$count['rowCount'];
		}
		
		$query="SELECT * FROM shoes INNER JOIN orders ON orders.productID = shoes.productID WHERE orders.userID = '$userID' AND orders.orderID = '$orderID'";
		$order=$db->query($query);
		
?>


<html lang="en">
<div id="container">
<header>
	<style>
		html, body {
			margin: 0; 
			padding: 0;
            height: 100%;
		}	

		#cartItemsHeader{
			text-align: center;
		}

		#cartImage{
			border: 3px solid black;
			margin-left: 42.5%;
		}

		#cartName{
			text-align: center;
			font-weight: bold;
			margin-bottom: 1em;
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
    
	if($rowCount == 0) {?>
		<h1 id="cartItemsHeader">We couldn't find order #<?php echo $orderID?></h1>
	<?php
	}
	else {?>
	
		<h1 id="cartItemsHeader">Order #<?php echo $orderID?></h1>

		<?php	
		foreach($order as $orderItem):
			$totalPrice+=$orderItem['listPrice'];
		?>
			<table style="margin:auto">
				<tr>
					<td><img id="cartImage" src="<?php echo $orderItem['refImage']?>" width="350" height="262" style="margin: 0 0"></td>
				</tr>
				<tr>
					<td><option id="cartName" value="<?php	echo $orderItem['productName']?>"> <?php echo $orderItem['productName']?></option></td>
				</tr>
				<tr>
					<td>$<?php	echo $orderItem['listPrice']?></td>
					<td>Size <?php echo $orderItem['size']?></option></td>
				</tr>
			</table>
			
		<?php	
		endforeach;?>
		

		<h2 style="margin: 2em 0">
			Total: $<?php echo $totalPrice ?>
			<form action="cancelOrder.php" method="post" style="margin-top:0.25em">
				<input type="hidden" name="order_id" value=<?php echo $orderID?>>
				<input type="submit" value="Cancel Order" style="background-color=steelblue; color=white">
			</form>
		</h2>
		
	<?php
	}?>


		
        



    </body>

    <div id="finalfooter">
            <?php
			     include('footer.php');
		      ?>
    </div>
    
    </div>

</hml>