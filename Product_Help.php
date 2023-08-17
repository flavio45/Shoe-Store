<?php
	include('databaseConnection.php');
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
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="Project.css">
      <link rel="stylesheet" type="text/css" href="Product_Help.css">
    </head>

    <body id="body">

        <?php
					include('header.php');
				?>

        <div>

            <h1> Product Help</h1>
            <p> We hope any questions or concerns can be answered with our guide. </p>

            <h2> Comfort </h2>

            <ul>
							<?php
								$query='SELECT * FROM shoes WHERE categoryID=3';
								$items=$db->query($query);
								foreach ($items as $item): ?>
									<li><a href="Contact_Us.php">
									<?php echo $item['productName'];?></a></li>
								<?php endforeach; ?>
						</ul>

            <h2> Sneakers </h2>

            <ul>
							<?php
								$query='SELECT * FROM shoes WHERE categoryID=5';
								$items=$db->query($query);
								foreach ($items as $item): ?>
									<li><a href="Contact_Us.php">
										<?php echo $item['productName'];?></a></li>
								<?php endforeach; ?>
						</ul>

            <h2> Sandals </h2>
  					<ul>
							<?php
								$query='SELECT * FROM shoes WHERE categoryID=4';
								$items=$db->query($query);
								foreach ($items as $item): ?>
									<li><a href="Contact_Us.php">
										<?php echo $item['productName'];?></a></li>
								<?php endforeach; ?>
            </ul>

            <h2> Athletic </h2>

            <ul>
							<?php
								$query='SELECT * FROM shoes WHERE categoryID=1';
								$items=$db->query($query);
								foreach ($items as $item): ?>
									<li><a href="Contact_Us.php">
										<?php echo $item['productName'];?></a></li>
								<?php endforeach; ?>
            </ul>

            <h2> Boots </h2>

            <ul>
							<?php
								$query='SELECT * FROM shoes WHERE categoryID=2';
								$items=$db->query($query);
								foreach ($items as $item): ?>
									<li><a href="Contact_Us.php">
										<?php echo $item['productName'];?></a></li>
								<?php endforeach; ?>
            </ul>

        </div>

        
    </body>
    
    <div id="finalfooter">
     <?php
			     include('footer.php');
		      ?>
    </div>
    
    </div>
</html>
