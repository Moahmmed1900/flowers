<?php 
	require("inc/header_inc.php");
	require("flowers.php");
	define("BASED_URL", "https://services.hanselandpetal.com/photos/");

	$flowers = new Flowers();
	$flowers = $flowers->getFlowers();
?>

<div class="row justify-content-center g-1 p-3">

	<?php foreach($flowers as $flower): ?>

		<div class="col-md-6 col-lg-4">
			<div class="card">
				<img src="<?php echo BASED_URL . $flower["photo"];?>" class="card-img-top" alt="<?php echo $flower["photo"]; ?>">
				<div class="card-body">
					<h5 class="card-title"><?php echo $flower["name"];?></h5>
					<h5 class="card-subtitle">price: <?php echo $flower["price"]; ?></h5>
					<br>
					<a href="detail.php?id=<?php echo $flower["productId"]?>" class="btn btn-outline-info">More details</a>
				</div>
			</div>
		</div>

	<?php endforeach; ?>

</div>

<?php 
	require("inc/footer_inc.php");
?>