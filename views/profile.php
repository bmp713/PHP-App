<?php require "header.php";
if( !$_SESSION["logged_in"] ){
	header("location: http://brandonmpiper.com/App");
}
?>




<style>
#profile{
	background: linear-gradient( #0000,#0000 ), url("<?php echo $_SESSION["background"]; ?>") no-repeat fixed;
	background-size: cover;
}
#contact{
	background: linear-gradient( #0000,#0000 ), url("<?php echo $_SESSION["background_2"]; ?>") no-repeat fixed;
        background-size: cover;
}
</style>




<section id="profile" class="row justify-content-center align-items-stretch">
        <div class="d-flex col-lg-6 reveal justify-content-start flex-column">
		<div>
			<h1>Profile</h1>
                	<img class="img-fluid w-100" src="<?php echo $_SESSION["profile"]; ?>"><br><br>
			<?php
				echo "
					$first $last<br>
					$user<br>
					$password<br>
					$email<br>
				";
			?>
		</div>
		<br><br>
                <img class="img-fluid w-100" src="<?php echo $_SESSION["background_2"]; ?>"><br><br>
        </div>
        <div class="d-flex col-lg-6 reveal justify-content-start flex-column">
                <h1>Posts</h1>
		<?php
			foreach( $_SESSION["posts"] as $key => $value ){
				echo "<br> " . $value . "<br>";
				//echo "<button style='width: 100px;'>Delete</button>";
			}
		?>
        </div>
</section>




<section id="contact" class="row justify-content-between align-items-stretch">
        <div id="post" class="d-flex col-lg-6 reveal justify-content-start flex-column">
                <form action="http://brandonmpiper.com/App/models/post.php" method="post" enctype="multipart/form-data">
                        <h1>New Post</h1>
                        <p>(Enter HTML or plain text)</p>
                        <textarea id="text_area" type="textarea" rows="4" name="post"></textarea><br><br>
                        <input class="submit" type="submit" value="Post" name="submit">
                </form>
        </div>
        <div id="settings" class="d-flex col-lg-6 reveal justify-content-center flex-column">
                <form id="#form" method="POST" action="http://brandonmpiper.com/App/models/update.php">
                        <h1>Settings</h1>
			Change Password<br>
                        <input type="password" name="password"><br><br>
                        Change Email<br>
                        <input type="text" name="email"><br><br>
                        Profile Image URL<br>
                        <input type="text" name="profile"><br><br>
                        Background Image URL's<br>
                        <input type="text" name="background"><br><br>
                        <input type="text" name="background_2"><br><br>
                        <input class="submit" id="submit" type="submit" name="submit" value="Update"><br><br>
                </form>
        </div>
</section>




<?php require "footer.php"; ?>
