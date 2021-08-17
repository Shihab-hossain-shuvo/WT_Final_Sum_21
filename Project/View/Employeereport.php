<?php include 'MainHeader.php'; ?>
<?php include '../Controllers/Reportcontroller.php'; ?>
<html>
    <head></head>
	<body>
	    <div align="center">
		    <h3>UpdateEmployee_Report</h3>
			<h5><?php echo $err_db; ?></h5>
			<form action="" method="post">
			    <div>
				    <h4>Report</h4>
					<input type = "text" name = "Report" value="<?php echo $Report; ?>"/>
					<span> <?php echo   $err_Report; ?> </span>
				</div>
				</<div>
				<input type = "submit" name = "Upreport" value = "Upreport" />
			
			</div>
				
					
			</form>
		</div>
	</body>
    <?php include 'Footer.php'; ?>
</html>