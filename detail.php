<?php 
  require("inc/header_inc.php");
  require("flowers.php");
  define("BASED_URL", "https://services.hanselandpetal.com/photos/");
  $print = true;

	if(isset($_GET["id"])){
		$flowers_object = new Flowers();
		$flower_prdoduct_id = $_GET["id"];
		$flower = $flowers_object->getFlower($flower_prdoduct_id);
		if(sizeof($flower) == 0){
			$print = false;
		}
	}else{
		$print = false;
	}
  
?>
<?php if($print): ?>
<div class="container-fluid">
	<div class="row d-flex justify-content-center g-1 p-3">
		<div class="col-md-6 col-lg-4">
			<div class="card">
					<img src="<?php echo BASED_URL . $flower["photo"];?>" class="card-img-top" alt="<?php echo $flower["photo"]; ?>">
					<div class="card-body">
					<h5 class="card-title"><?php echo $flower["name"];?></h5>
					<h5 class="card-subtitle">price: <?php echo $flower["price"]; ?></h5>
					<p class="card-text"><?php echo $flower["instructions"];?></p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<?php
  require("inc/footer_inc.php");
?>
