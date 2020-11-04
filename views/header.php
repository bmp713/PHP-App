<?php
session_start();
$first     = $_SESSION["first"];
$last  	   = $_SESSION["last"];
$user  	   = $_SESSION["user"];
$password  = $_SESSION["password"];
$email     = $_SESSION["email"];
?>




<!DOCTYPE html>
<html lang="en">
<head>
<title>Thinker.</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Lato" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<link rel="stylesheet" href="http://brandonmpiper.com/App/views/site.css">
</head>
<body>




<div id="page" class="container-fluid">
<a id="up" href="#page">
        <img class="img-fluid" width="50px" src="http://brandonmpiper.com/assets/images/PNG/arrows_white.png">
</a>





<nav class="navbar navbar-expand-lg navbar justify-content-left fixed-top">
	<a class="navbar-brand" href="http://brandonmpiper.com/App">
	        <span class="col-6 text-left">
			Thinker.
	        </span>
	</a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
                <span class="col-6 text-left reveal">
			<a><i class="nav-btn material-icons">sort</i></a>
                </span>
  	</button>
	<div class="collapse navbar-collapse" id="navbar">
    		<ul class="navbar-nav ml-auto">
			<?php
				if( isset( $_SESSION["logged_in"] ) ){
					$profile = $_SESSION["profile"];
					$first = $_SESSION["first"];
                                        $last = $_SESSION["last"];
               	       			echo "
                                                <li class='nav-item'>
							<a class='nav-link'>
								<div style='overflow:hidden; position:relative; height:25px; width:25px; border-radius:50% 50%'>
									<img style='position:absolute; left:-25%; top:0%;' height='25px' src='$profile'>
								</div>
							</a>
						</li>
						<li class='nav-item'><a class='nav-link' href='http://brandonmpiper.com/App/views/profile.php'>$first $last</a></li>
                                                <li class='nav-item'><a class='nav-link' href='#profile'>Posts</a></li>
                                                <li class='nav-item'><a class='nav-link' href='#contact'>Settings</a></li>
                      				<li class='nav-item'><a class='nav-link' href='http://brandonmpiper.com/App/views/logout.php'>Logout</a></li>
					";
				}else{
					echo "
						<li class='nav-item'><a class='nav-link' href='http://brandonmpiper.com/App/views/login.php'>Login</a></li>
                                        	<li class='nav-item'><a class='nav-link' href='http://brandonmpiper.com/App/views/register.php'>New Account</a></li>
					";
				}
			?>
    		</ul>
  	</div>
</nav>




