<?php
$currentpage = 'other';
include 'header.php';
include './template/nav.php';
?>

<main class="sign-up-page common-page">
	<section class="screen">
		<div class="row">
			<aside class="col-md-6 pl-0">
				<div class="card__img">
					<img src="./gallery/banner03.jpg" alt="">
				</div>
			</aside>
			<aside class="col-md-6 ">
				<h2 class="section__title">Create Your Account</h2>
				<div class="login-form">
					<div class="d-flex">
						<button class="facebook">Signup with <i class="fab fa-facebook-f"></i></button>
						<button class="google">Signup with <i class="fab fa-google-plus-g" aria-hidden="true"></i></button>
					</div>
					<span>Or</span>
					<form action="" class="form">
						<div class="form-group">
							<label for="email">My Email</label>
							<input type="email" placeholder="Email" class="form-control" id="email">
						</div>
						<div class="form-group ">
							<label for="pass">My Password</label>

							<input type="password" placeholder="Password" class="form-control" id="pass">
						</div>
						<div class="form-group">
							<button type="submit">Create Account</button>
						</div>

					</form>
					
					<p class="mb-0">Already have a account? <a href="#" class="login--btn" data-toggle="modal" data-target="#login">Login</a>.</p>
				</div>
			</aside>

		</div>
	</section>
</main>

<?php
include 'footer.php';
?>


</body>
</html>
