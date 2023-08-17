<?php
	include('databaseConnection.php');
	
	if (!isset($category)) {
		$category = filter_input(INPUT_GET, 'category_id',
								 FILTER_VALIDATE_INT);
		if ($category == NULL || $category == FALSE) {
			$category = 1;
		}
	}
	
	$query='SELECT * FROM categories';
	$items=$db->query($query);
	
	$query="SELECT * FROM shoes WHERE categoryID=$category";
	$products=$db->query($query);
?>

<html lang="en">
<div id="container">
<header>

	<style>
		#main table tr td a img{
			width: 60%;
			height: 50%;
		}
		
		#main table tr table{
			width: 100%;
			float: left;

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



    <body id="body">
        
        <?php
			include('header.php');
		?>
		<head>
			<link rel="stylesheet" type="text/css" href="Shop_Page.css"> 
		</head>
    
        <div id="main">
			<ul id="categoryList">
				<?php	foreach ($items as $item):?>
					<li><a href="?category_id=<?php echo $item['categoryID'];?>"> <?php echo $item['categoryName'];?></a></li>
				<?php endforeach;?>
			</ul>
			
			<?php	foreach ($products as $product):?>
			<table id="shopItem">
				<tr>
					<td><a href="itemDisplayPage.php?product_id=<?php echo $product['productID']?>">
							<img id="shoeImage"src="<?php echo $product['refImage']?>" alt="<?php echo $product['productName']?>">
						</a>
					</td>
					<td>
						<table>
							<tr id="prodName">
								<td><?php echo $product['productName'];?></td>
							</tr>
							<tr id="brandName">
								<td><?php echo $product['productBrand'];?></td>
							</tr>
							<tr>
								<table>
									<tr id="priceView">
										<td>$<?php echo $product['listPrice'];?></td>
										<td><a href="itemDisplayPage.php?product_id=<?php echo $product['productID']?>">
										<input type="button" value="View Item"></a>
									</tr>
								</table>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<?php endforeach;?>
				
        </div>
        
        
        
    </body>
    <div id="finalfooter">
     <?php
			     include('footer.php');
		      ?>
    </div>
    </div>
</html>