<?php include 'MainHeader.php'; ?>
<?php include '../Controllers/customercontrol.php'; ?>

<html>
    <head></head>
	
	<script>
		var hasError=false;
		function get(id){
			return document.getElementById(id);
		}
		
		function validate(){
			refresh();
			if(get("name").value == ""){
				hasError = true;
				get("err_name").innerHTML = "*Name Req";
			}
			else if(get("name").value.length <=4){
				hasError = true;
				get("err_name").innerHTML = "*Name must be > 4 characters";
			}
			
			
			if(get("phone").value == ""){
				hasError = true;
				get("err_phone").innerHTML = "*Phone no Req";
			}
			else if(get("phone").value.length <=4){
				hasError = true;
				get("err_phone").innerHTML = "*Phone must be > 4 characters";
			}
			
			
			
			return !hasError;
		}
		
		function refresh(){
			hasError = false;
			get("err_name").innerHTML ="";
			get("err_phone").innerHTML ="";
			
		}
			
    </script>
	<body>
	    <div align="center">
		    <h3>Add Employee</h3>
			<h5><?php echo $err_db; ?></h5>
			<form action="" onsubmit="return validate()" method="post">
			    <div>
				    <h4>Name:</h4>
					<input id="name" type = "text" name = "name" value="<?php echo $name; ?>"/>
					<span id="err_name"> <?php echo $err_name; ?> </span>
				</div>
				<div>
				    <h4>Phone_NO:</h4>
					<input id="phone" type = "text" name = "phone" value="<?php echo $phone; ?>"/>
					<span id="err_phone"> <?php echo $err_phone; ?> </span>
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
					<input type = "submit" name = "Addcustomer" value = "Add" />
				</div>
			</form>
		</div>
	</body>
    <?php include 'Footer.php'; ?>
</html>