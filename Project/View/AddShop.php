<?php include 'MainHeader.php'; ?>
<?php include '../Controllers/Shopconntroll.php'; ?>
<html>
    <head></head>
	<body>
	    <div align="center">
		    <h3><Deleteshop/h3>
			<h5><?php echo $err_db; ?></h5>
			<form action="" method="post">
			    <div>
				    <h4>Name:</h4>
					<input type = "text" name = "Shop_name" value="<?php echo $Shop_name; ?>"/>
					<span> <?php echo $err_Shop_name; ?> </span>
				</div>

				<div>
					<input type = "submit" name = "AddShop" value = "Add" />
				</div>
			</form>
		</div>
	</body>
    <?php include 'Footer.php'; ?>
</html>