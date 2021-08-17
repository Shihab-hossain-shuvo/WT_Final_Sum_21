<?php session_start()?>
<html>
    <head></head>
	<body>
	    <div align="center">
	    <div>
		    <h3>AdminDashboard</h3>
		</div>
		<div>
		    <h2><?php echo "welcome ".$_SESSION['uname']." to Admin page"?></h2>
		</div>
		<div>
		
			<button><a href = "AllEmployee.php" >All Employee</a></button>
			<button><a href = "AddEmployee.php" >Add Employee</a></button>
			<button><a href = "DeleteEmployee.php" >Removemployee</a></button>
			<button><a href = "EditEmployee.php" >Updatemployee</a></button>
			<button><a href = "ReteriveSalaryinfo.php" >Show_salary info</a></button>
			<button><a href = "Reterivereportinfo.php" >Showallreport</a></button>
			<button><a href = "Allcustomer.php" >All Customer</a></button>
			<button><a href = "Addcustomer.php" >Add Customer</a></button>
			<button><a href = "Deletecustomer.php" >Deletecustomer</a></button>
			<button><a href ="Employeereport.php">Employeereport</a></button>
			<button> <a href ="Addproduct.php">Addproduct</a>  </button>
			<button><a href="Updateproduct.php">Updateproduct.php</a></button>
		    <button><a href ="AddShop.php">AddShop</a></button>

             

			</div>
			<br>
			<br>
			<br>
			<div align="left"><button> <a href = "Home.php" >Logout</a> </button><button><a href ="changepass.php">Change_Password</a></button><button><a href ="voucher.php">Editvoucher percentage</a></button><button><a href ="Reteriveshopinfo.php">Show product and shops</a></button></div>

			

			
		</div>
		</div>
	</body>
</html>