<?php
$currentpage = 'other';
include 'header.php';
include './template/arrow_nav.php';

?>



<main class="common-page notification">
	<div class="section-rule">
		<h2 class="section__title white">Notifications</h2>
	</div>
	<div class="list-group">
		<a href="#" class="list-group-item list-group-item-action unseen">

			<h2 class="card__title">Your order has been received successfully.</h2>
			<time class="small text-muted">Recently</time>
		</a>
		<a href="#" class="list-group-item list-group-item-action">
			<h2 class="card__title">Orders are delivered sucessfully.</h2>
			<time class="small text-muted">1 day ago</time>
		</a>
		<a href="#" class="list-group-item list-group-item-action">
			<h2 class="card__title">⚠ Your stocks seems empty for now. <u> Alert Now</u></h2>
			<time class="small text-muted">1 week ago</time>
		</a>
	</div>
</main>



<?php
include 'footer.php';
?>
<script>

</script>
</body>
</html>