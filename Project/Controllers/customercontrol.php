 <?php
    include '../Models/DBConfig.php';
    $name="";
    $err_name="";
    $phone="";
    $err_phone="";

     $Address="";
    $err_Address="";

    $c_id="";
    $err_c_id="";

   
    $err_db="";
    $id="";

    $err_id="";

	$hasError = false;

    if(isset($_POST["Addcustomer"])){
		if(empty($_POST["name"])){
		    $err_name = "Name Required!";
			$hasError = true;
	    }
		else{
		    $name = $_POST["name"];
	    }

	    if(empty($_POST["phone"])){
		    $err_phone = "Phone number Required!";
			$hasError = true;
	    }
		else{
		    $phone = $_POST["phone"];
	    }


if(empty($_POST["Address"])){
		    $err_Address = "Address number Required!";
			$hasError = true;
	    }
		else{
		    $Address = $_POST["Address"];
	    }


	     if(empty($_POST["c_id"])){
		    $err_c_id = "Customer identity number Required!";
			$hasError = true;
	    }
		else{
		    $c_id = $_POST["c_id"];
	    }


		
		if(!$hasError){
			$rs = insertcustomers($id,$name,$phone,$Address,$c_id);
			if($rs === true){
				header("Location: Allcustomer.php");
			}
			$err_db = $rs;
		}
	}

	 elseif(isset($_POST["Deletecustomer"])){
		if(empty($_POST["name"])){
		    $err_name = "Name Required!";
			$hasError = true;
	    }
		else{
		    $name = $_POST["name"];
	    }

		
		if(!$hasError){
			$rs =  Deletecustomer($name);
			if($rs === true){
				header("Location: Allcustomer.php");
			}
			$err_db = $rs;
		}
	}


 elseif(isset($_POST["updatecustomer"])){
		if(empty($_POST["name"])){
		    $err_name = "Name Required!";
			$hasError = true;
	    }
		else{
		    $name = $_POST["name"];
	    }


		if(empty($_POST["phone"])){
		    $err_phone = "Phone number Required!";
			$hasError = true;
	    }
		else{
		    $phone = $_POST["phone"];
	    }
	    if(empty($_POST["Address"])){
		    $err_Address = "Address  Required!";
			$hasError = true;
	    }
		else{
		    $Address = $_POST["Address"];
	    }


	     if(empty($_POST["c_id"])){
		    $err_c_id = "Customer identity number Required!";
			$hasError = true;
	    }
		else{
		    $c_id = $_POST["c_id"];
	    }
		
		if(!$hasError){
			$rs = updatecustomer($name,$phone,$Address,$c_id);
			if($rs === true){
				header("Location: Allcustomer.php");
			}
			$err_db = $rs;
		}
	}
		
   
	
	
	function insertcustomers($id,$name,$phone,$Address,$c_id){
		$query= "INSERT INTO `customers`(`ID`, `name`, `phone`, `Address`, `c_id`) VALUES (Null,'$name','$phone','$Address','$c_id')";
		return execute($query);
	}
	
	

	function Deletecustomer($name){
		$query="DELETE FROM customers WHERE name='$name'";
		$rs = execute($query);
		//$query="DELETE FROM employee WHERE name='$name'"
		return $rs;
	}

	
	


	function updatecustomer($name,$phone,$Address,$c_id){
		$query = "UPDATE `customers` SET `name`='$name',`phone`='$phone',`Address`='$Address' WHERE `c_id`='$c_id'";
		return execute($query);
	}
	
?>