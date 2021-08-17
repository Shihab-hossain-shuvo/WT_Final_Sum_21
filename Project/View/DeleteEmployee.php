<?php include 'MainHeader.php'; ?>
<?php include '../Controllers/Employeecontrol.php'; ?>

<html>
    <head></head>
	<body>
	    <div align="center">
		    <h3>Delete Employee</h3>
			<h5><?php echo $err_db; ?></h5>
			<form action="" method="post">
			    <div>
				    <h4>Name:</h4>
					<input type = "text" name = "name" value="<?php echo $name; ?>"/>
					<span> <?php echo $err_name; ?> </span>
				</div>
				
					<input type = "submit" name = "DeleteEmploye" value = "Delete" />
				</div>
			</form>
		</div>
	</body>
    <?php include 'Footer.php'; ?>
</html>
