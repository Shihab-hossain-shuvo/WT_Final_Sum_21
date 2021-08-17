<?php include 'MainHeader.php'; ?>
<?php include '../Controllers/Employeecontrol.php'; ?>
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
					<input type = "text" name = "E_phone" value="<?php echo $E_phone; ?>"/>
					<span> <?php echo $err_E_phone; ?> </span>
				</div>
				<div>

					<input type = "submit" name = "updateEmploye" value = "Update" />
				</div>
			</form>
		</div>
	</body>
    <?php include 'Footer.php'; ?>
</html>