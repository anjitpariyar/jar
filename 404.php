<?php
$currentpage = 'other';
include 'header.php';
?>
<main class="page_404"> 
	<div class="section-rule">
		<div class="row">	
			<div class="col-sm-12 text-center ">
				<div class="four_zero_four_bg ">
					<h1 class="text-center section__title">404</h1>


				</div>

				<div class="contant_box_404">
					<h3 class="h2">
						Look like you're lost
					</h3>

					<p>the page you are looking for not avaible!</p>

					<button onclick="window.location.href='./index.php'">Go to Home</button>
				</div>
			</div>
		</div>
	</div>
</main>


<script>
	window.addEventListener('DOMContentLoaded', (event) => {
		(function() {
   		 	// Add event listener
   		 	document.addEventListener("mousemove", parallax);
   		 	const elem = document.querySelector("main");
    		// Magic happens here
    		function parallax(e) {
    			let _w = window.innerWidth/2;
    			let _h = window.innerHeight/2;
    			let _mouseX = e.clientX;
    			let _mouseY = e.clientY;
    			let _depth1 = `${50 - (_mouseX - _w) * 0.1}% ${50 - (_mouseY - _h) * 0.1}%`;
    			let _depth2 = `${50 - (_mouseX - _w) * 0.3}% ${50 - (_mouseY - _h) * 0.3}%`;
    			let _depth3 = `${50 - (_mouseX - _w) * 0.2}% ${50 - (_mouseY - _h) * 0.2}%`;
    			let x = `${_depth3}, ${_depth2}, ${_depth1}`;
    			console.log(x);
    			elem.style.backgroundPosition = x;
    		}

    	})();
    });
</script>
</body>
</footer>