<?php include 'MainHeader.php'; ?>
<?php include '../Controllers/Employeecontrol.php'; ?>

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
			
			
			
			if(get("E_phone").value == ""){
				hasError = true;
				get("err_E_phone").innerHTML = "*Phone no Req";
			}
			else if(get("E_phone").value.length <=3){
				hasError = true;
				get("err_E_phone").innerHTML = "*Phone no must be > 3 characters";
			}
			
			
			return !hasError;
		}
		
		function refresh(){
			hasError = false;
			get("err_name").innerHTML ="";
			get("err_E_phone").innerHTML ="";
			
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
					<input id="E_phone" type = "text" name = "E_phone" value="<?php echo $E_phone; ?>"/>
					<span id="err_E_phone"> <?php echo $err_E_phone; ?> </span>
				</div>
				<div>
					<input type = "submit" name = "AddEmployee" value = "Add" />
				</div>
			</form>
		</div>
	</body>
    <?php include 'Footer.php'; ?>
</html>