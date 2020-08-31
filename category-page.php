<?php
$currentpage = 'other';
include 'header.php';
include './template/nav.php';
?>

<main class="category-page">
	<div class="top--part section-rule">
		<ul class="d-flex">
			<li>Trending Search :</li>
			<li><a href="./category-page.php" class="tags active">Banana bread </a></li>
			<li><a href="./category-page.php" class="tags">Pizza dough </a></li>
			<li><a href="./category-page.php" class="tags">French toast </a></li>
			<li><a href="./category-page.php" class="tags">Chocolate cake </a></li>
			<li><a href="./category-page.php" class="tags">Dalgona coffee</a></li>
			<li><a href="./category-page.php" class="tags">Chicken breast </a></li>
			<li><a href="./category-page.php" class="tags">Ground beef </a></li>
			<li><a href="./category-page.php" class="tags">Fried rice</a></li>
		</ul>
	</div>
	<section class="main__part">
		<div class="section-rule">
			<div class="row">
				<aside class="pl-0 filter col-lg-3">
					<div class="sticky">
						

						<div class="card card--panel">
							<div class="title__wrapper">
								<h2 class="card__title">Short By</h2>
								<a href="#"> Clear All</a>
							</div>
							<ul class="d-flex">

								<li><a href="#!" class="tags">A-Z</a></li>
								<li><a href="#!" class="tags">Z-A</a></li>
								<li><a href="#!" class="tags">High to Low (Price)</a></li>
								<li><a href="#!" class="tags">Low to High (Price)</a></li>
								<li><a href="#!" class="tags">Latest</a></li>
								<li><a href="#!" class="tags">Offer</a></li>
								<li><a href="#!" class="tags">Positive Review</a></li>
								<li><a href="#!" class="tags">Popular</a></li>
							</ul>
						</div>
						<div class="card card--panel">
							<form class="form-inline">
								<div class="form-group">
									<label for="min">Min Rs</label>
									<input type="number" class="form-control" id="min">
								</div>
								<div class="form-group">
									<label for="max">Max Rs</label>
									<input type="number" class="form-control" id="max">
								</div>
								<button type="submit"><span class="material-icons">
									keyboard_arrow_right
								</span></button>
							</form>
						</div>
						<div class="card card--panel">
							<ul class="list">
								<li><a href="#">Seasonal <span class="material-icons">arrow_right_alt</span></a></li>
								<li><a href="#">Hot<span class="material-icons">arrow_right_alt</span></a></li>
								<li><a href="#">Special<span class="material-icons">arrow_right_alt</span></a></li>
							</ul>
						</div>
						<div class="card card--panel">

							<h2 class="card__title">Other Categories</h2>

							<ul class="list">
								<li><a href="#">Newari <span class="material-icons">arrow_right_alt</span></a></li>
								<li><a href="#">Pizza <span class="material-icons">arrow_right_alt</span></a></li>
								<li><a href="#">Chickens <span class="material-icons">arrow_right_alt</span></a></li>
								<li><a href="#">Chinese <span class="material-icons">arrow_right_alt</span></a></li>
								<li><a href="#">Japanese <span class="material-icons">arrow_right_alt</span></a></li>
								<li><a href="#">Momo <span class="material-icons">arrow_right_alt</span></a></li>
							</ul>
						</div>
					</div>
				</aside>
				<aside class="pr-0 special col-lg-9">

					<h2 class="section__title">Burgers</h2>
					<div class="row">
						<article class="col-sm-6 col-lg-4">
							<div class="card">
								<div class="card__img">
									<img src="./gallery/card__img/img01.jpg" alt="card__title">
								</div>
								<div class="card__body">
									<h2 class="price">Rs 250</h2>

									<h2 class="card__title"><a href="./single-page.php">Classic Fried wings 4Pcs </a></h2>
									<button class="cart">
										<i class="material-icons material-icons-rounded  material-icons-outlined">
											add
										</i>
										<span>Order Now</span>
									</button>


								</div>

							</div>

						</article>
						<article class="col-sm-6 col-lg-4">
							<div class="card">
								<div class="card__img">
									<img src="./gallery/card__img/img02.jpg" alt="card__title">
								</div>
								<div class="card__body">
									<h2 class="price">Rs 150</h2>

									<h2 class="card__title"><a href="./single-page.php">Oven Grilled Wings 2pcs </a></h2>
									<button class="cart">
										<i class="material-icons material-icons-rounded  material-icons-outlined">
											add
										</i>
										<span>Order Now</span>
									</button>


								</div>

							</div>

						</article>
						<article class="col-sm-6 col-lg-4">
							<div class="card">
								<div class="card__img">
									<img src="./gallery/card__img/img03.jpg" alt="card__title">
								</div>
								<div class="card__body">
									<h2 class="price">Rs 550</h2>

									<h2 class="card__title"><a href="./single-page.php">3 Naked Nutella Waffle + 1 Free Delight</a></h2>
									<button class="cart">
										<i class="material-icons material-icons-rounded  material-icons-outlined">
											add
										</i>
										<span>Order Now</span>
									</button>


								</div>

							</div>

						</article>
						<article class="col-sm-6 col-lg-4">
							<div class="card">
								<div class="card__img">
									<img src="./gallery/card__img/img04.jpg" alt="card__title">
								</div>
								<div class="card__body">
									<h2 class="price">Rs 200</h2>

									<h2 class="card__title"><a href="./single-page.php">Chicken Garlic Twist ( Large ) </a></h2>
									<button class="cart">
										<i class="material-icons material-icons-rounded  material-icons-outlined">
											add
										</i>
										<span>Order Now</span>
									</button>


								</div>

							</div>

						</article>
						<article class="col-sm-6 col-lg-4">
							<div class="card">
								<div class="card__img">
									<img src="./gallery/card__img/img05.jpg" alt="card__title">
								</div>
								<div class="card__body">
									<h2 class="price">Rs 150</h2>

									<h2 class="card__title"><a href="./single-page.php">Classic Fried wings 4Pcs </a></h2>
									<button class="cart">
										<i class="material-icons material-icons-rounded  material-icons-outlined">
											add
										</i>
										<span>Order Now</span>
									</button>


								</div>

							</div>

						</article>
						<article class="col-sm-6 col-lg-4">
							<div class="card">
								<div class="card__img">
									<img src="./gallery/card__img/img06.jpg" alt="card__title">
								</div>
								<div class="card__body">
									<h2 class="price">Rs 250</h2>

									<h2 class="card__title"><a href="./single-page.php">BigB Burger </a></h2>
									<button class="cart">
										<i class="material-icons material-icons-rounded  material-icons-outlined">
											add
										</i>
										<span>Order Now</span>
									</button>


								</div>

							</div>

						</article>
						<article class="col-sm-6 col-lg-4">
							<div class="card">
								<div class="card__img">
									<img src="./gallery/card__img/img01.jpg" alt="card__title">
								</div>
								<div class="card__body">
									<h2 class="price">Rs 250</h2>

									<h2 class="card__title"><a href="./single-page.php">Classic Fried wings 4Pcs </a></h2>
									<button class="cart">
										<i class="material-icons material-icons-rounded  material-icons-outlined">
											add
										</i>
										<span>Order Now</span>
									</button>


								</div>

							</div>

						</article>
						<article class="col-sm-6 col-lg-4">
							<div class="card">
								<div class="card__img">
									<img src="./gallery/card__img/img02.jpg" alt="card__title">
								</div>
								<div class="card__body">
									<h2 class="price">Rs 150</h2>

									<h2 class="card__title"><a href="./single-page.php">Oven Grilled Wings 2pcs </a></h2>
									<button class="cart">
										<i class="material-icons material-icons-rounded  material-icons-outlined">
											add
										</i>
										<span>Order Now</span>
									</button>


								</div>

							</div>

						</article>
						<article class="col-sm-6 col-lg-4">
							<div class="card">
								<div class="card__img">
									<img src="./gallery/card__img/img03.jpg" alt="card__title">
								</div>
								<div class="card__body">
									<h2 class="price">Rs 550</h2>

									<h2 class="card__title"><a href="./single-page.php">3 Naked Nutella Waffle + 1 Free Delight</a></h2>
									<button class="cart">
										<i class="material-icons material-icons-rounded  material-icons-outlined">
											add
										</i>
										<span>Order Now</span>
									</button>


								</div>

							</div>

						</article>
						<article class="col-sm-6 col-lg-4">
							<div class="card">
								<div class="card__img">
									<img src="./gallery/card__img/img04.jpg" alt="card__title">
								</div>
								<div class="card__body">
									<h2 class="price">Rs 200</h2>

									<h2 class="card__title"><a href="./single-page.php">Chicken Garlic Twist ( Large ) </a></h2>
									<button class="cart">
										<i class="material-icons material-icons-rounded  material-icons-outlined">
											add
										</i>
										<span>Order Now</span>
									</button>


								</div>

							</div>

						</article>
						<article class="col-sm-6 col-lg-4">
							<div class="card">
								<div class="card__img">
									<img src="./gallery/card__img/img05.jpg" alt="card__title">
								</div>
								<div class="card__body">
									<h2 class="price">Rs 150</h2>

									<h2 class="card__title"><a href="./single-page.php">Classic Fried wings 4Pcs </a></h2>
									<button class="cart">
										<i class="material-icons material-icons-rounded  material-icons-outlined">
											add
										</i>
										<span>Order Now</span>
									</button>


								</div>

							</div>

						</article>
						<article class="col-sm-6 col-lg-4">
							<div class="card">
								<div class="card__img">
									<img src="./gallery/card__img/img06.jpg" alt="card__title">
								</div>
								<div class="card__body">
									<h2 class="price">Rs 250</h2>

									<h2 class="card__title"><a href="./single-page.php">BigB Burger </a></h2>
									<button class="cart">
										<i class="material-icons material-icons-rounded  material-icons-outlined">
											add
										</i>
										<span>Order Now</span>
									</button>


								</div>

							</div>

						</article>

					</div>
				</aside>
			</div>
		</div>
	</section>

</main>

<?php
include 'footer.php';
?>

<script type="text/javascript">
	$(document).ready((e)=>{
		$('.tags').click(function(e){
			console.log('df')
			$(this).toggleClass('active');
		})
	})
</script>


</body>
</html>
