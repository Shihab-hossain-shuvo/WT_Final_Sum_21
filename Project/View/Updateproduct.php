<?php include 'MainHeader.php'; ?>
<?php include '../Controllers/productcontrol.php'; ?>

<html>
    <head></head>
	<body>
	    <div align="center">
		    <h3>updateproduct</h3>
			<h5><?php echo $err_db; ?></h5>
			<form action="" method="post">
				 <div>
				    <h4>product_id</h4>
					<input type = "text" name = "P_id" value="<?php echo $P_id; ?>"/>
					<span> <?php echo $err_P_id; ?> </span>
				</div>

				 <div>
				    <h4>product_name</h4>
					<input type = "text" name = "product_name" value="<?php echo $product_name; ?>"/>
					<span> <?php echo $err_product_name; ?> </span>
				</div>

				 <div>
				    <h4>Product_quantity</h4>
					<input type = "text" name = "product_quantity" value="<?php echo $product_quantity; ?>"/>
					<span> <?php echo $err_product_quantity; ?> </span>
				</div>


				 <div>
				    <h4>Product_price</h4>
					<input type = "text" name = "price" value="<?php echo $price; ?>"/>
					<span> <?php echo $err_price; ?> </span>
				</div>

			    
					<input type = "submit" name = "updateproduct" value = "updateproductstatus" />
				</div>
			</form>
		</div>
	</body>
    <?php include 'Footer.php'; ?>
</html>

