<?php
$currentpage = 'other';
include 'header.php';
include './template/arrow_nav.php';

?>



<main class="cart__page common-page">
	<section class="section-rule">
		<h2 class="section__title white">My Cart</h2>
		<div class="cart__bg">
			<div class="card  card__hr">
				<div class="card__img bg">
					<img src="./gallery/jar1.png" alt="">
				</div>
				<div class="card__body">
					<div class="text__wrapper">
						<h2 class="small__title"><a href="./single-page.php"> 20L AQUA NAWA SHRISTI</a></h2>
						<h2 class="price">Rs 35</h2>
						<button class="label">+ your stock</button>
					</div>
					
					<div class="qty">
						<div class="form-group ">
							<button class="dec">-</button>
							<input type="number" min="0" max="5" value="1" class="form-control" disabled="" id="qty">
							<button class="inc">+</button>
						</div>
					</div>

				</div>
			</div>
			<div class="card  card__hr gas">
				<div class="card__img bg">
					<img src="./gallery/cylinder1.png" alt="">
				</div>
				<div class="card__body">
					<div class="text__wrapper">
						<h2 class="small__title"><a href="./single-page.php"> Nepal Gas</a></h2>
						<h2 class="price">Rs 1,235</h2>
						<button class="label">+ your stock</button>
					</div>
					
					<div class="qty">
						<div class="form-group ">
							<button class="dec">-</button>
							<input type="number" min="0" max="5" value="1" class="form-control" disabled="" id="qty">
							<button class="inc">+</button>
						</div>
					</div>

				</div>
			</div>
			<div class="card  card__hr gas">
				<div class="card__img bg">
					<img src="./gallery/cylinder2.png" alt="">
				</div>
				<div class="card__body">
					<div class="text__wrapper">
						<h2 class="small__title"><a href="./single-page.php"> Xhgph Gas</a></h2>
						<h2 class="price">Rs 1,425</h2>
						<button class="label">+ your stock</button>
					</div>
					
					<div class="qty">
						<div class="form-group ">
							<button class="dec">-</button>
							<input type="number" min="0" max="5" value="1" class="form-control" disabled="" id="qty">
							<button class="inc">+</button>
						</div>
					</div>

				</div>
			</div>
			<div class="card  card__hr">
				<div class="card__img bg">
					<img src="./gallery/jar2.png" alt="">
				</div>
				<div class="card__body">
					<div class="text__wrapper">
						<h2 class="small__title"><a href="./single-page.php"> 20L AQUA SURE</a></h2>
						<h2 class="price">Rs 45</h2>
						<button class="label">+ your stock</button>
					</div>
					
					<div class="qty">
						<div class="form-group ">
							<button class="dec">-</button>
							<input type="number" min="0" max="5" value="1" class="form-control" disabled="" id="qty">
							<button class="inc">+</button>
						</div>
					</div>

				</div>
			</div>
			<div class="card  card__hr gas">
				<div class="card__img bg">
					<img src="./gallery/cylinder3.png" alt="">
				</div>
				<div class="card__body">
					<div class="text__wrapper">
						<h2 class="small__title"><a href="./single-page.php"> Techno Gas</a></h2>
						<h2 class="price">Rs 1,235</h2>
						<button class="label">+ your stock</button>
					</div>
					
					<div class="qty">
						<div class="form-group ">
							<button class="dec">-</button>
							<input type="number" min="0" max="5" value="1" class="form-control" disabled="" id="qty">
							<button class="inc">+</button>
						</div>
					</div>

				</div>
			</div>
			<div class="card  card__hr">
				<div class="card__img bg">
					<img src="./gallery/jar3.png" alt="">
				</div>
				<div class="card__body">
					<div class="text__wrapper">
						<h2 class="small__title"><a href="./single-page.php"> 20L Bisleri</a></h2>
						<h2 class="price">Rs 40</h2>
						<button class="label">+ your stock</button>
					</div>
					
					<div class="qty">
						<div class="form-group ">
							<button class="dec">-</button>
							<input type="number" min="0" max="5" value="1" class="form-control" disabled="" id="qty">
							<button class="inc">+</button>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
</main>
<div class="vr__footer">
	<h2 class="section__title ">Total : RS 3,625</h2>
	<button onclick="window.location.href='./checkout-page.php'">
		Check Out 
	</button>
</div>


<?php
include 'footer.php';
?>
<script>

</script>
</body>
</html>