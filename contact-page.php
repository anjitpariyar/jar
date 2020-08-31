<?php
$currentpage = 'other';
include 'header.php';
include './template/nav.php';
?>

<main class="sign-up-page common-page contact-page">
	<section class="screen">
		<div class="row">
			<aside class="col-md-5 ">
				<h2 class="section__title">Send Us Message</h2>
				<div class="login-form">
					<form action="" class="form">
						<div class="form-group">
							<label for="name">My name</label>
							<input type="text" placeholder="Full Name" class="form-control" id="name">
						</div>
						<div class="form-group">
							<label for="email">My Email</label>
							<input type="email" placeholder="Email" class="form-control" id="email">
						</div>
						<div class="form-group ">
							<label for="message">My Message</label>

							<textarea placeholder="I want to tell ..." class="form-control" id="message"></textarea>
						</div>
						<div class="form-group">
							<button type="submit">Send</button>
						</div>
					</form>
				</div>
			</aside>
			<aside class="col-md-7">
				<div class="card__img">
					<img src="./gallery/banner03.jpg" alt="">
				</div>
			</aside>
			

		</div>
	</section>
	<section class="contact">
		<div class="section-rule">
			<div class="row">
				<aside class="col-md-6">
					<div class="card__img">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.5616756954287!2d114.16264101502752!3d22.294587885326536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x340400f2d068663b%3A0x3d2c44f6cf94a2f!2sHEXA!5e0!3m2!1sen!2snp!4v1596009653334!5m2!1sen!2snp" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</aside>
				<aside class="col-md-6">
					<div class="card__panel">
						<h2 class="section__title">Contact Us</h2>
						<ul>
							<li><a href="tel:9825131071"><span class="material-icons">
								call
							</span>9825131071</a></li>
							<li><a href="tel:9825131071"><span class="material-icons">
								call
							</span>9825131071</a></li>
							<li><a href="mailto:hexareturant@gmail.com"><span class="material-icons">
								mail
							</span>hexareturant@gmail.com</a></li>
							<li><a href="mailto:hexareturant@gmail.com"><span class="material-icons">
								mail
							</span>hexareturant@gmail.com</a></li>
							<li class="d-flex">
								<a href="#" target="_blank"><i class="fab fa-facebook-square" aria-hidden="true"></i></a>
								<a href="#" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a>
								<a href="#" target="_blank"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
								<a href="#" target="_blank"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
								<a href="#" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a>
							</li>
						</ul>

						<ul class="d-flex location">
							<li>Available Locations: </li>
							<li>Banepa</li>
							<li>Dhulikhel</li>
							<li>Panauti</li>
							<li> Sanga</li>
						</ul>
					</div>
				</aside>
			</div>
		</div>
	</section>
</main>

<?php
include 'footer.php';
?>


</body>
</html>
