<?php
	include('databaseConnection.php');

    $productID = $_GET["product_id"];

	$currentUserIDs=$db->query('SELECT * FROM currentUser');
	$userID = 0;

	#Look through the users db to find a matching email.
	foreach ($currentUserIDs as $x){
		$currentUserID = $x['userID'];
		$userID = $currentUserID;
	}

	$query="SELECT * FROM shoes WHERE productID='$productID'";
	$products=$db->query($query);
?>

<html lang="en">
<div id="container">
     <header>
        <style>
            /*html,body{
                margin: 0;
                padding: 0;
                height: 100%;
            } */
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

    <body id="body">

        <?php
			include('header.php');
		?>
		<head>
			<link rel="stylesheet" href="Item_Page.css">
		</head>

        <div id="main">
			<?php	foreach ($products as $product):?>
			<table id="shopItem">
				<tr>
					<td><img src="<?php echo $product['refImage']?>" alt="<?php echo $product['productName']?>"></td>
					<td>
						<table>
							<tr>
								<th id="prodName"><?php echo $product['productName'];?></th>
							</tr>
							<tr>
								<td id="brandName"><?php echo $product['productBrand'];?></td>
							</tr>
							<tr>
								<td id="listPrice">$<?php echo $product['listPrice'];?></td>
							</tr>
							<tr>
								<?php
								if($userID == 0){
								?>
									<td><a href="logIn.php">
										<input type="button" id="addToCart"
													<?php if($product['productQuantity']<=0) {?>
														disabled="disabled" value="Out of Stock" style="background-color:gray;"
													<?php } else {?>
														value="Add to Cart" style="background-color:steelblue;"
													<?php }?>>
									</a></td>
								<?php
								}
								else{?>
								<td>
								<form class="form-inline" action="addToCart.php" method="post">
									<table id="formTable">
										<tr>
											<td>
												<div style="float:left">
													<label for="shoe_size">Size: </label>
												</div>
												<div style="float:left">
													<select name="shoe_size">
													<optgroup>
														<option value="5">5</option>
														<option value="5.5">5.5</option>
														<option value="6">6</option>
														<option value="6.5">6.5</option>
														<option value="7">7</option>
														<option value="7.5">7.5</option>
														<option value="8">8</option>
														<option value="8.5">8.5</option>
														<option value="9">9</option>
														<option value="9.5">9.5</option>
														<option value="10">10</option>
														<option value="10.5">10.5</option>
														<option value="11">11</option>
														<option value="11.5">11.5</option>
														<option value="12">12</option>
														<option value="12.5">12.5</option>
														<option value="13">13</option>
													</optgroup>
													</select>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<input type="hidden" name="product_id" value=<?php echo $product['productID'];?>>
												<input type="submit" id="addToCart"
													<?php if($product['productQuantity']<=0) {?>
														disabled="disabled" value="Out of Stock" style="background-color:gray;"
													<?php}  else {?>
														value="Add to Cart" style="background-color:steelblue;"
													<?php }?>>
											</td>
										</tr>
										<tr>
											<td>[<?php echo $product['productQuantity'];?> remaining]</td>
										</tr>
										<tr>
											<td id="prodDesc"><?php echo $product['productDesc'];?></td>
										</tr>
									</table>
								</form>
								</td>
								<?php
								}?>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		<?php endforeach ?>
        </div>



    </body>

    <div id="finalfooter">
     <?php
			     include('footer.php');
		      ?>
    </div>

    </div>
</html>
