<?php
$currentpage = 'other';
include 'header.php';
include './template/nav.php';
?>


<main class="sign-up-page common-page contact-page reservation">
	<section class="screen carousel__screen">
		<h2 class="section__title text-center">Reservation</h2>
		<div class="main__carousel">
			<div class="item">
				<a  data-fancybox="gallery" href="./gallery/rest01.jpg">
					<img src="./gallery/rest01.jpg" alt="">
				</a>
			</div>
			<div class="item"> 
				<a  data-fancybox="gallery" href="./gallery/banner02.jpg">

					<img src="./gallery/banner02.jpg" alt=""> 
				</a>

			</div>
			<div class="item"> 
				<a  data-fancybox="gallery" href="./gallery/rest01=2.jpg">

					<img src="./gallery/rest02.jpg" alt="">

				</a>
			</div>
			<div class="item"> 
				<a  data-fancybox="gallery" href="./gallery/banner04.jpg">

					<img src="./gallery/banner04.jpg" alt=""> 
				</a>

			</div>	
		</div>
	</section>
	<section class="screen">
		<div class="row">
			<aside class="col-md-7 col-lg-5 ">
				<h2 class="section__title">Book table</h2>
				<div class="login-form">
					<form action="" class="form">
						<div class="form-row">
							<div class="form-group col-sm-6 pl-0">
								<label for="name">My name</label>
								<input type="text" placeholder="Full Name" class="form-control" id="name">
							</div>
							<div class="form-group col-sm-6 pr-0">
								<label for="email">My Email</label>
								<input type="email" placeholder="Email" class="form-control" id="email">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-6 pl-0">
								<label for="date">Date</label>
								<input type="date" placeholder="" class="form-control" id="date">
							</div>
							<div class="form-group col-6 pr-0">
								<label for="time">Time</label>
								<input type="time" placeholder="" class="form-control" id="time" min="09:00" max="18:00" step="120">
							</div>
						</div>
						
						<div class="form-group">
							<label for="tel">My Number</label>
							<input type="tel" placeholder="Email" class="form-control" id="email">
						</div>
						<div class="form-group ">
							<label for="message">My Additional Message</label>

							<textarea placeholder="I want to tell ..." class="form-control" id="message"></textarea>
						</div>
						<div class="form-group">
							<button type="submit">Book a Table</button>
						</div>
					</form>
				</div>
			</aside>
			<aside class="col-md-5 col-lg-7">
				<div class="card__img">
					<img src="./gallery/banner03.jpg" alt="">
				</div>
			</aside>
			

		</div>
	</section>
</main>

<?php
include 'footer.php';
?>
<script type="text/javascript" src="./css/fancybox/jquery.fancybox.min.js"></script>
<script >
	

	$(document).ready(function(){


		$('.main__carousel').slick({
			infinite: true,
			lazyLoad: 'ondemand',
			slidesToShow: 3,
			slidesToScroll: 1,
			arrows:true,
			autoplay:false,	
			adaptiveHeight:false,
			dots:false,
			prevArrow:"<button class='slick-prev'><i class='material-icons  material-icons-outlined'>chevron_left</i></button>",
			nextArrow:"<button class='slick-next'><i class='material-icons material-icons-outlined'>chevron_right</i></button>",
			responsive: [
			{
				breakpoint: 1030
				,
				settings: {
					slidesToShow: 2,

				}
			},
			{
				breakpoint: 630
				,
				settings: {
					slidesToShow: 1.1,
					centerMode: true,

				}
			},
			]
		});





	})

</script>

</body>
</html>
