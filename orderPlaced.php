<?php
	include('databaseConnection.php');

	$currentUserIDs=$db->query('SELECT * FROM currentUser');
	$currentUserID =0;
	foreach ($currentUserIDs as $x){
		$currentUserID = $x['userID'];
	}

	$query="SELECT orderID FROM orders WHERE userID='$currentUserID'";
	$orders=$db->query($query);
	$length=$db->query("Count orderID FROM orders WHERE userID='$currentUserID'")

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

		#pastOrder a:link{
			text-decoration: none;
			text-align: center;
			color: black;
			margin-left: 45%;
		}

		#pastOrder a:visited{
			text-decoration: none;
		  color: black;
		}

		#pastOrder a:hover{
			color: gray;
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


	<h1 id="cartItemsHeader">Your Order Has Been Placed! </h1>
	<h2 style="text-align: center;">Order ID(s):

	<?php $counter = 0;
	 foreach ($orders as $y){
		 	$counter++;

			if($counter == ($length - 1)){
			 echo $y['orderID'];
		 }
			else {
				echo $y['orderID'];?> | <?php
			 }
	} ?>
	</h2>

	<div id="pastOrder">
	<a href="Order_Status.php">Check or Cancel Past Orders </a>
	</div>

</body>
<div id="finalfooter">
     <?php
			     include('footer.php');
		      ?>
    </div>

    </div>
</html>
