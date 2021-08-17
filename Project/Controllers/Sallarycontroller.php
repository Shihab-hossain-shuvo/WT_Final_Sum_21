 <?php
    include '../Models/DBConfig.php';
    $Salary="";
    $err_Salary="";

    $err_db="";

    $E_identity="";
  $err_E_identity="";

$hasError = false;

     if(isset($_POST["updatesalary"])){
		if(empty($_POST["E_identity"])){
		   $err_E_identity  = "Employee_identity_NO: Required!";
			$hasError = true;
	    }
		else{
		    $E_identity = $_POST["E_identity"];
	    }


		if(empty($_POST["Salary"])){
		    $err_Salary = "Salary amount Required!";
			$hasError = true;
	    }
		else{
		    $Salary = $_POST["Salary"];
	    }
		
		if(!$hasError){
			$rs = updatesalary($E_identity,$Salary);
			if($rs === true){
				header("Location: Show_Employee salaryinfo.php");
			}
			$err_db = $rs;
		}
	}
		
   
	
	
	
	function updatesalary($E_identity,$Salary){
		$query = "UPDATE `sallary` SET `E_identity`='$E_identity',`Salary`='$Salary' WHERE E_identity = $E_identity ";
		return execute($query);
	}
	
?>