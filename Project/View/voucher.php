<?php include 'MainHeader.php'; ?>
<?php include '../Controllers/vouchercontrol.php'; ?>
<html>
    <head></head>
	<body>
	    <div align="center">
		    <h3>Update_Voucher_info</h3>
			<h5><?php echo $err_db; ?></h5>
			<form action="" method="post">
			    <div>
				    <h4>Voucher_No:</h4>
					<input type = "text" name = "voucher_no" value="<?php echo $voucher_no; ?>"/>
					<span> <?php echo  $err_voucher_no; ?> </span>
				</div>
				<div>
				    <h4>Percentage_Discount:</h4>
					<input type = "text" name = "percentage" value="<?php echo $percentage; ?>"/>
					<span> <?php echo  $err_percentage; ?> </span>
				</div>
				<div>
					<input type = "submit" name = "Addvoucher" value = "Addvoucher" />
				</div>
			</form>
		</div>
	</body>
    <?php include 'Footer.php'; ?>
</html>
