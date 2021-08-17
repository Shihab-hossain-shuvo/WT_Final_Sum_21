<?php include 'MainHeader.php'; ?>
<?php include '../Controllers/Admincontroll.php'; ?>
 <html>
    <head></head>
	
	<script>
		var hasError=false;
		function get(id){
			return document.getElementById(id);
		}
		
		function validate(){
			refresh();
			if(get("uname").value == ""){
				hasError = true;
				get("err_uname").innerHTML = "*Name Req";
			}
			else if(get("uname").value.length <=4){
				hasError = true;
				get("err_uname").innerHTML = "*Name must be > 4 characters";
			}
			
			
			if(get("pass").value == ""){
				hasError = true;
				get("err_pass").innerHTML = "*Password Req";
			}
			else if(get("pass").value.length <=3){
				hasError = true;
				get("err_pass").innerHTML = "*Password must be > 3 characters";
			}
									
			return !hasError;
		}
		
		function refresh(){
			hasError = false;
			get("err_uname").innerHTML ="";
			get("err_pass").innerHTML ="";
			
		}
			
    </script>
	
	<body>
	    <div align="center">
		    <h3>Login</h3>
			<h5><?php echo $err_db; ?></h5>
			<form action="" onsubmit="return validate()" method="post">
			    <div>
				    <h4>Username</h4>
					<input id="uname" type = "text" name = "uname" value="<?php echo $uname; ?>"/>
					<span id="err_uname"> <?php echo $err_uname; ?> </span>
				</div>
				
				
				
				
				
				
				<div>
				    <h4 align="center">Password</h4>
					<input id="pass" type = "password"  name = "pass"/>
					<span id="err_pass"> <?php echo $err_pass; ?> </span>
				</div>
				<div>
					<input type = "submit" name = "login" value = "login"/>
				</div>
				
			</form>
		</div>
	</body>
    <?php include 'Footer.php'; ?>
</html>