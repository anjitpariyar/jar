<?php
$currentpage = 'other';
include 'header.php';
include './template/arrow_nav.php';

?>



<main class="common-page single-page">
	<div class="section-rule">
		<h2 class="section__title white">20L Aqua Sure</h2>
	</div>
		<div class="card">
			<div class="card__img">
				<img src="./gallery/jar2.png" alt="">
			</div>

			<div class="card__body">
				<div class="qty">
					<div class="form-group ">
						<button class="dec">-</button>
						<input type="number" min="0" max="5" value="1" class="form-control" disabled="" id="qty">
						<button class="inc">+</button>
					</div>
				</div>
				<div class="text__wrapper d-flex">
					<h2 class="price">Rs 1,235</h2>
					<button class="label">+ your stock</button>
				</div>
				<h2 class="card__title">Product Specification :</h2>
				<table class="table table-borderless">
					<tbody>
						<tr>
							<th >Capacity :</th>
							<td>20 Litre</td>
						</tr>
						<tr>
							<th >Best Before :</th>
							<td>30 Days </td>
						</tr>
						<tr>
							<th >Features :</th>
							<td >With Added Minerals </td>
						</tr>
						<tr>
							<th >Usage/Application :</th>
							<td >Drinking Water </td>
						</tr>
					</tbody>
				</table>

				<h2 class="card__title">Product Description :</h2>
				<p class="para">
					Due to our proficiency of this field, we are engaged in presenting 20 Liter Aqua Sure Packaged Drinking Water. We are presenting these products to customers within given time-frame.
				</p>

			</div>
		</div>
		
	
</main>
<div class="vr__footer">
	<h2 class="section__title "><a href="#!">Buy Now</a></h2>
	<button onclick="window.location.href='#'" class="cart">
		Add to cart
	</button>
</div>


<?php
include 'footer.php';
?>
<script>

</script>
</body>
</html>