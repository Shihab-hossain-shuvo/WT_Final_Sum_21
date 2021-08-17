<?php include 'MainHeader.php'; ?>
<?php include '../Controllers/customercontrol.php'; ?>
?>
<html>
    <head></head>
	<body>
	    <div align="center">
		    <h3><Deletecustomer/h3>
			<h5><?php echo $err_db; ?></h5>
			<form action="" method="post">
			    <div>
				    <h4>Name:</h4>
					<input type = "text" name = "name" value="<?php echo $name; ?>"/>
					<span> <?php echo $err_name; ?> </span>
				</div>

				<div>
					<input type = "submit" name = "Deletecustomer" value = "Remove" />
				</div>
			</form>
		</div>
	</body>
    <?php include 'Footer.php'; ?>
</html>