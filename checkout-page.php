<?php
$currentpage = 'other';
include 'header.php';
include './template/arrow_nav.php';

?>



<main class="common-page checkout-page">
	<section class="section-rule">
		<h2 class="section__title white">Checkout (3)</h2>
		<div class="card__wrapper">
			<article class="card  card__hr">
				<div class="card__img bg">
					<img src="./gallery/jar1.png" alt="">
				</div>
				<div class="card__body">
					<div class="text__wrapper">
						<h2 class="small__title"><a href="./single-page.php"> 20L AQUA NAWA SHRISTI</a></h2>
						<h2 class="price">Rs 35</h2>
						<p class="qu">Quantity: 2</p>
					</div>
				</div>
			</article>
			<article class="card  card__hr gas">
				<div class="card__img bg">
					<img src="./gallery/cylinder1.png" alt="">
				</div>
				<div class="card__body">
					<div class="text__wrapper">
						<h2 class="small__title"><a href="./single-page.php"> Nepal Gas</a></h2>
						<h2 class="price">Rs 1,235</h2>
						<p class="qu">Quantity: 1</p>
					</div>
				</div>
			</article>
		</div>
		<hr>
		<ul class="text__wrapper">
			<li><p class="small__title">Total Item : 3</p></li>
			<li><p class="small__title">Shipping: Rs 0</p></li>
			<li><p class="small__title">Discount: Rs 50</p></li>
			<li><p class="small__title">Total Price: 1,500</p></li>
			<li><p class="small__title" >vat, tax all included</p></li>

		</ul>
		<hr>
		<ul class="text__wrapper">
			<li><h2 class="section__title">Shipping Address</h2></li>
			<li><p class="small__title">123 Newroad XXX</p></li>
			<li><p class="small__title">Kathmandu , Nepal</p></li>
			<li><a class="small__title link" href="#">No , Ship to the different Location</a></li>

		</ul>
		<hr>
		<ul class="text__wrapper">
			<h2 class="section__title">Payment Method</h2>

			<div class="form-check active">
				<input type="radio" class="form-check-input" id="materialUnchecked" name="materialExampleRadios" checked="">
				<label class="form-check-label" for="materialUnchecked">cash On delivery <span class="material-icons">chevron_right</span></label>
			</div>

			<div class="form-check ">
				<input type="radio" class="form-check-input" id="materialChecked" name="materialExampleRadios">
				<label class="form-check-label" for="materialChecked">E-sewa(Digital Idea) <img src="./gallery/esewa_logo.png" alt=""></label>
			</div>
			<div class="form-check">
				<input type="radio" class="form-check-input" id="kalti" name="materialExampleRadios">
				<label class="form-check-label" for="kalti">Khalti <img src="./gallery/Khalti.png" alt=""></label>
			</div>
		</ul>
	</section>
</main>
<div class="vr__footer">
	<h2 class="section__title ">Total : RS 1,500 <br><small>no extra charges</small></h2>
	<button onclick="window.location.href='./thank.php'">
		Check Out 
	</button>
</div>


<?php
include 'footer.php';
?>
<script>
	$(window).on('load', ()=>{
		
		$('.text__wrapper .form-check input').click(function(){
			if($(this).prop("checked") == true){
				$('.text__wrapper .form-check').removeClass('active');
				$(this).parent().addClass('active')
			}
		})
	})
	
</script>
</body>
</html>