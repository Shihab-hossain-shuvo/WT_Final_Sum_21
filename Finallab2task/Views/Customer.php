<?php include 'MainHeader.php'; ?>
<?php include 'AdminHeader.php'; ?>
<?php include '../Controllers/Customercontroller.php'; ?>
<?php
    
?>
<html>
    <head></head>
	<body>
	    <div align="center">
		    <h3>Edit Coutomer</h3>
			<h5><?php echo $err_db; ?></h5>
			<for action="" method="post">
				
				<div>
				    <h4>Coustomer Name</h4>
					<input type = "text" name = "C_Name" value="<?php echo $C_Name;?>"/>
					<span> <?php echo $err_C_Name; ?> </span>
				</div>

				<div>
				    <h4>Contact Name</h4>
					<input type = "text" name = "Con_Name" value="<?php echo $Con_Name;?>"/>
					<span> <?php echo $err_Con_Name; ?> </span>
				</div>

				<div>
				    <h4>Address</h4>
					<input type = "text" name = "C_Address" value="<?php echo $C_Address;?>"/>
					<span> <?php echo $err_C_Address; ?> </span>
				</div>

			   <div>  	
					<input type = "submit" name = "customers" value = "Update"/>
				</div>
			</form>
		</div>
	</body>
    <?php include 'Footer.php'; ?>
</html>