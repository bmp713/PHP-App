<?php require "header.php"; ?>




<section id="contact" class="row justify-content-between align-items-stretch">
        <div class="col-lg-6 reveal">
                <form id="#form" method="POST" action="http://brandonmpiper.com/App/models/forgot.php">
                        <h1>Enter Username</h1>
			<p>An email with your password and account information will be sent.</p>
                        <input type="text" name="user" placeholder="Username"><br><br>
                        <input id="submit" type="submit" name="submit" value="Submit"><br><br>
                </form>
        </div>
        <div class="col-lg-6 reveal">
        </div>
</section>




<?php require "footer.php"; ?>
