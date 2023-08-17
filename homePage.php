<?php
	include('databaseConnection.php');
?>

<html lang="en">
   <div id="container">
    <header>
        <style>
        /*    html,body{
                margin: 0;
                padding: 0;
                height: 100%;
            } */
            #container{
                min-height: 100%;
                position: absolute;
                padding-bottom: 140px;
            }
           /* #body{
                padding: 10px;
                padding-bottom: 160px;
            } */
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

        <div id="main">

        </div>

				<div class="overallHike">
        <img class="hiking" src="img/hiking.png">
          <div id="hikingText">
            <h2> Want To Get Out And Enjoy Nature? </h2>
            <p>Take a look at our boot collection. </p>
            <a href="shopPage.php?category_id=2"> <input class="bootButton" type="button" value="Boots"></a>
          </div>
				</div>

        <img class="running" src="img/running.png">
          <div id="runningText">
            <h2> Run With Comfort </h2>
            <p> Get back out there and set records.</p>
            <a href="shopPage.php?category_id=1"> <input class="athleticButton" type="button" value="Athletic"></a>
          </div>

          <img class="relaxing" src="img/relaxing.png">
            <div id="comforText">
              <h2> Staying Indoors? </h2>
              <p> Relax at home with our collection. </p>
              <a href="shopPage.php?category_id=3"> <input class="comfortButton" type="button" value="Comfort"></a>
            </div>





    </body>

    <div id="finalfooter">
     <?php
			     include('footer.php');
		      ?>
    </div>


       </div>

</html>
