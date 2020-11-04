<?php require "header.php"; ?>




<section id="contact" class="row justify-content-between align-items-center">
        <div class="col-lg-6 reveal">
                <h1>Show off your new profile</h1>
                <p>
		Log in after creating your new account.
                </p><br><br>
                <a id="create" href="http://brandonmpiper.com/App/views/login.php">Login</a>
        </div>
        <div class="col-lg-6 text-right reveal">
                <!--<form class="col" id="#form" method="POST" action="http://brandonmpiper.com/App/models/register.php">-->
                <form class="col" id="form">
                        <h1>Create New Account</h1><br>
                        <input type="text" required name="first" placeholder="First Name"><br><br>
                        <input type="text" required name="last" placeholder="Last Name"><br><br>
                        <input type="text" required name="email" placeholder="Email"><br><br>
                        <input type="text" required name="user" placeholder="User Name"><br><br>
                        <input type="password" required name="password" placeholder="Password"><br><br>
                        <input id="submit" type="submit" name="submit" value="Submit"><br><br>
			<span id="message"></span>
                </form>
        </div>
</section>




<script>
document.querySelector("#form").addEventListener("submit", (event) => {
	event.preventDefault();


	// XMLHttpRequest
	const form = new FormData( document.querySelector("#form") );
	const req = new XMLHttpRequest();
	req.open("POST", "http://brandonmpiper.com/App/models/register.php");
	req.onload = () => {}
	//req.send( form );


	// Fetch
        const formData = new FormData( document.querySelector("#form") );
	fetch("http://brandonmpiper.com/App/models/register.php", {
		method: 'POST',
		body: formData
	})
	.then( (response) => {
		console.log( response );
	});



	// Registration notification
	document.querySelector("#message").style.display = "block";
	document.querySelector("#message").innerHTML = `
		Thank you for registering!<br><br>
		A confirmation email has been sent.
	`;


});
</script>




<?php require "footer.php"; ?>
