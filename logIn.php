<?php
	
		include('databaseConnection.php');
				
		$users=$db->query('SELECT * FROM users');
?>


<html lang="en">

    <div id="container">
<header>
        <style>
            html,body{
                margin: 0;
                padding: 0;
                height: 100%;
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






	<div id="registrationPage">
	
	
	

	<form action="checkUserAction.php" method="post">
	
	
		<h2 id="newAccountHeader">Log In</h2>
			
		<label for="email">E-mail: </label><input class="registration" type="email" name="email" required><br>
		<label for="password">Password: </label><input class="registration" type="password" name="password" required><br>

		
		
		<input class="registrationSubmit" type="submit" id="createAccount" value="Login">
		
	</form>
	</div>



        

</body>
      <div id="finalfooter">
     <?php
			     include('footer.php');
		      ?>
    </div>
    
    </div>

</html>