



<footer id="footer" class="row justify-content-center align-items-stretch">
        <div class="col-lg-3">
                <p>CONTACT<br><br>
		<a href="tel:(310) 555-5555">(310) 555-2222</a><br>
                <a href="mailto:bmp713@yahoo.com">contactus@mail.com</a><br>
		</p>
        </div>
        <div class="col-lg-3">
                <p>OUR SERVICES<br><br>
		<a href="#">About Us</a><br>
                <a href="#">Company</a><br>
                <a href="#">Contact</a><br>
		</p>
        </div>
        <div class="col-lg-3">
                <p>LEGAL</p>
		<a href="terms.html">Terms of Use</a><br>
                <a href="privacy.html">Privacy Policy</a><br>
                <a href="cookie.html">Cookie Policy</a><br>
        </div>
        <div class="col-lg-3 text-left">
                <span class="text-left reveal">
			<h1>Thinker.</h1>
			<h5><?php echo $_SESSION["first"]." ".$_SESSION["last"]?></h5>
                </span>
                <hr>
        </div>
</footer>




</div>
<script>
window.addEventListener("DOMContentLoaded", () => {


	window.addEventListener("scroll", () => {
	        if( window.matchMedia("(min-width: 900px)").matches ){
		}
	});


	window.sr = new ScrollReveal();
        sr.reveal("nav", { duration: 2000, distance: '200px', origin:'top', delay:0 });
	sr.reveal(".reveal:nth-of-type(1)", { duration: 2000, distance: '200px', origin:'left', delay:500 });
	sr.reveal(".reveal:nth-of-type(2)", { duration: 2000, distance: '200px', origin:'bottom', delay:0 });
	sr.reveal(".reveal:nth-of-type(3)", { duration: 2000, distance: '200px', origin:'bottom', delay:1000 });
	sr.reveal(".reveal:nth-of-type(4)", { duration: 2000, distance: '200px', origin:'bottom', delay:1500 });
        sr.reveal(".reveal img:nth-of-type(1)", { duration: 2000, distance: '200px', origin:'bottom', delay:1500 });
        sr.reveal(".reveal img:nth-of-type(2)", { duration: 2000, distance: '200px', origin:'bottom', delay:1500 });
        sr.reveal(".reveal img:nth-of-type(3)", { duration: 2000, distance: '200px', origin:'bottom', delay:1500 });


        $('.navbar-nav>li>a').on('click', function(){
                $('.navbar-collapse').collapse('hide');
        });
});
</script>
</body>
</html>
