 <?php
    include '../Models/DBConfig.php';
    $name="";
    $err_name="";
    $E_phone="";
    $err_E_phone="";
    $err_db="";
    $E_id="";
    $err_E_id="";

	$hasError = false;

    if(isset($_POST["AddEmployee"])){
		if(empty($_POST["name"])){
		    $err_name = "Name Required!";
			$hasError = true;
	    }
		else{
		    $name = $_POST["name"];
	    }

	    if(empty($_POST["E_phone"])){
		    $err_phone = "Phone number Required!";
			$hasError = true;
	    }
		else{
		    $E_phone = $_POST["E_phone"];
	    }
		
		if(!$hasError){
			$rs = insertemployee($name,$E_phone,$E_id);
			if($rs === true){
				header("Location: AllEmployee.php");
			}
			$err_db = $rs;
		}
	}

	 elseif(isset($_POST["DeleteEmploye"])){
		if(empty($_POST["name"])){
		    $err_name = "Name Required!";
			$hasError = true;
	    }
		else{
		    $name = $_POST["name"];
	    }

		
		if(!$hasError){
			$rs =  DeleteEmploye($name);
			if($rs === true){
				header("Location: AllEmployee.php");
			}
			$err_db = $rs;
		}
	}


 elseif(isset($_POST["updateEmploye"])){
		if(empty($_POST["name"])){
		    $err_name = "Name Required!";
			$hasError = true;
	    }
		else{
		    $name = $_POST["name"];
	    }



		if(empty($_POST["E_phone"])){
		    $err_name = "Phone number Required!";
			$hasError = true;
	    }
		else{
		    $E_phone = $_POST["E_phone"];
	    }
		
		if(!$hasError){
			$rs = updateEmploye($name,$E_phone);
			if($rs === true){
				header("Location: AllEmployee.php");
			}
			$err_db = $rs;
		}

		
	}
		
   
	
	
	function insertemployee($name,$E_phone,$E_id){
		$query = "INSERT INTO `employee`(`name`, `E_phone`, `E_id`) VALUES ('$name','$E_phone',Null)";
		return execute($query);
	}
	
	function getemployee(){
		$query="select * from employee";
		$rs = get($query);
		return $rs;
	}

	function DeleteEmploye($name){
		$query="DELETE FROM employee WHERE name='$name'";
		$rs = execute($query);
		//$query="DELETE FROM employee WHERE name='$name'"
		return $rs;
	}

	function getemployees($E_id){
		$query="select * from employee where E_id=$E_id";
		$rs = get($query);
		return $rs[0];
	}
	


	function updateEmploye($name,$E_phone){
		$query = "UPDATE `employee` SET `E_phone`='$E_phone'WHERE `name`='$name'";
		$rs = execute($query);
		return $rs;
		//return execute($query);
	}
	
?>