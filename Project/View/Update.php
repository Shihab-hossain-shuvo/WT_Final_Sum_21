<?php include 'MainHeader.php'; ?>
<?php include '../Controllers/customercontrol.php'; ?>
?>
<html>
    <head></head>
	<body>
	    <div align="center">
		    <h3>Add Employee</h3>
			<h5><?php echo $err_db; ?></h5>
			<form action="" method="post">
			    <div>
				    <h4>Name:</h4>
					<input type = "text" name = "name" value="<?php echo $name; ?>"/>
					<span> <?php echo $err_name; ?> </span>
				</div>
				<div>
				    <h4>Phone_NO:</h4>
					<input type = "text" name = "phone" value="<?php echo $phone; ?>"/>
					<span> <?php echo $err_phone; ?> </span>
				</div>
				<div>
				    <h4>Address:</h4>
					<input type = "text" name = "Address" value="<?php echo $Address; ?>"/>
					<span> <?php echo $err_Address; ?> </span>
				</div>

				<div>
				    <h4>Customer identity No:</h4>
					<input type = "text" name = "c_id" value="<?php echo $c_id; ?>"/>
					<span> <?php echo $err_c_id; ?> </span>
				</div>

				<div>
					<input type = "submit" name = "updatecustomer" value = "update" />
				</div>
			</form>
		</div>
	</body>
    <?php include 'Footer.php'; ?>
</html>