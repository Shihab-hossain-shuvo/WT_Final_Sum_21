<?php
    include 'controllers/product_controller.php';
	$key = $_GET["key"];
	$products = searchProduct($key);
	
	if(count($products)>0){
		foreach($product as $p){
			echo "<p>".$p["name"]."</p>";
		}
	}
?>