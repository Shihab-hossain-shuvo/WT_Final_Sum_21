<?php include 'C:\xampp\htdocs\final_sum_21\Project\Controllers/forget_admin_password_controller.php'; ?>
<html>
	<head></head>
	<body>
		<center>
		<form action=""  method="post">
		<fieldset>
		<legend align="center"><h1 style="background-color:red;"><b>Admin Forget Password Pannel</b></h1></legend>
			<table>
				
				<tr>
					<td><span >Username:</span></td>
					<td></td>
					<td><input type="text" name="uname" value="<?php echo $uname;?>"> </td><td><span ><span><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
			   
			   <td>
			   <input type="Submit" name="forget_admin_password" value="confirm">
			   </td>
			   </tr>
			   </table>
	</fieldset>
		</form>
		</center>
	</body>
</html>