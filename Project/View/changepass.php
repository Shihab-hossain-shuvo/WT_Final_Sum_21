
<?php include '../Controllers/changepasswordcontroller.php'; ?>
<html>
    <head></head>
	<body>
	    <div align="center">
	    	<h3 style="background-color:Tomato;">Update Information</p>
		    
			<h5><?php echo $err_db; ?></h5>
			<form action="" method="post">
			    <div>
				    <h4>Username</h4>
					<input type = "text" name = "uname" value="<?php echo $uname; ?>"/>
					<span> <?php echo $err_uname; ?> </span>
				</div>
				<div>
				    <h4 align="center">Password</h4>
					<input type = "password"  name = "pass"/>
					<span> <?php echo $err_pass; ?> </span>
				</div>
				<div>
					<input type = "submit" name = "change" value = "Change_confirm"/>
				</div>
				
			</form>
			<h3 style="background-color:Tomato;">Update Information</p>
		</div>
	</body>
</html>
