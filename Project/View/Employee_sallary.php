<?php include 'MainHeader.php'; ?>
<?php include '../Controllers/Sallarycontroller.php'; ?>
?>
<html>
    <head></head>
	<body>
	    <div align="center">
		    <h3>UpdateEmployee_Salary</h3>
			<h5><?php echo $err_db; ?></h5>
			<form action="" method="post">
			    <div>
				    <h4>Eployee_identity_No::</h4>
					<input type = "text" name = "E_identity" value="<?php echo $E_identity; ?>"/>
					<span> <?php echo  $err_E_identity; ?> </span>
				</div>
				<div>
				    <h4>Amount_sallary:</h4>
					<input type = "text" name = "Salary" value="<?php echo $Salary; ?>"/>
					<span> <?php echo $err_Salary; ?> </span>
				</div>
				<div>
					<input type = "submit" name = "updatesalary" value = "update_salary" />
				</div>
			</form>
		</div>
	</body>
    <?php include 'Footer.php'; ?>
</html>
