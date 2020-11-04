<?php require "header.php"; ?>




<section id="contact" class="row justify-content-center align-items-center">
        <div class="col-lg-6 reveal">
                <form id="#form" method="POST" action="http://brandonmpiper.com/App/models/login.php">
                        <h1>Log In</h1>
                        Username<br>
                        <input type="text" name="user" placeholder="User" value="steve"><br><br>
                        Password<br>
                        <input type="password" name="password" placeholder="Password" value="Welcome123"><br><br>
                        <input id="submit" type="submit" name="submit" value="Submit"><br><br>
                        <a href="http://brandonmpiper.com/App/views/forgot.php">Forgot user name/password?</a>
                </form>
        </div>
        <div class="col-lg-6 text-right reveal">
		<h1>Create New Account</h1><br><br>
                <a id="create" href="http://brandonmpiper.com/App/views/register.php">New Account</a>
                <br><br><br>
                <p>
                Create a new account and you will receive a confirmation email. Log in, then add
                profile and background images, change your settings, and start adding posts
                in text or HTML.
                <br><br>
                Think Different. Be creative.
                </p>
        </div>
</section>
<script>




document.querySelector("#submit").addEventListener("click", () => {
	e.preventDefault();
	console.log("SUBMIT");

/*
	var xhr = new XMLHttpRequest();
	var data = new FormData(document.querySelector("form"));
	xhr.open("POST", "php/login.php", true);
	xhr.addEventListener("readystatechange", function() {
		if(xhr.readyState === 4 && xhr.status === 200) {
			if(xhr.responseText === "true") {
				window.location = "index.php";
			}
			else {
				alert("Incorrect username or password");
			}
		}
	});
	xhr.send(data);
*/



});
</script>




<?php require "footer.php"; ?>
