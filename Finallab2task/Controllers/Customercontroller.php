 <?php
    include '../Models/DBConfig.php';

$C_ID="";
$err_C_ID="";

$C_Name="";
$err_C_Name="";

$Con_Name="";
$err_Con_Name="";

$C_Address="";
$err_C_Address="";

$C_City="";
$err_City="";
$err_db="";

$hasError = false;

    if(isset($_POST["Customer"])){
		if(empty($_POST["C_Name"])){
		    $err_C_Name= "Name Required!";
			$hasError = true;
	    }
		else{
		    $C_Name = $_POST["C_Name"];
	    }

	    if(empty($_POST["Con_Name"])){
		    $err_Con_Name = " ContactName Required!";
			$hasError = true;
	    }
		else{
		    $Con_Name = $_POST["Con_Name"];
	    }
		
 if(empty($_POST["C_Address"])){
		    $err_C_Address = " Address Required!";
			$hasError = true;
	    }
		else{
		    $C_Adress = $_POST["C_Address"];
	    }


if(empty($_POST["C_City"])){
		    $err_C_City = " C_City Required!";
			$hasError = true;
	    }
		else{
		    $C_City = $_POST["C_City"];
	    }
		

		
		if(!$hasError){
			$rs = insertCoustomer($C_Name,$Con_Name,$C_Address,$C_City);
			if($rs === true){
				header("Location: Dashboard.php");
			}
			$err_db = $rs;
		}
	}
	
	else if(isset($_POST["customers"])){
		if(empty($_POST["C_Name"])){
		    $err_C_Name= "Name Required!";
			$hasError = true;
	    }
		else{
		    $C_Name = $_POST["C_Name"];
	    }

	    if(empty($_POST["Con_Name"])){
		    $err_Con_Name = " ContactName Required!";
			$hasError = true;
	    }
		else{
		    $Con_Name = $_POST["Con_Name"];
	    }
		
 if(empty($_POST["C_Address"])){
		    $err_C_Address = " C_Adress Required!";
			$hasError = true;
	    }
		else{
		    $C_Adress = $_POST["C_Adress"];
	    }


if(empty($_POST["C_City"])){
		    $err_C_City = " C_City Required!";
			$hasError = true;
	    }
		else{
		    $C_City = $_POST["C_City"];
	    }
	
		if(!$hasError){
			$rs = updateCoustomer($C_Name,$Con_Name,$C_Address,$C_City);
			if($rs === true){
				header("Location: Dashboard.php");
			}
			$err_db = $rs;
		}
		
	}
	
	else if(isset($_POST["deleteCoustomer"])){
		if(empty($_POST["C_Name"])){
		    $err_C_Name = "Id is Required!";
			$hasError = true;
	    }
		else{
			$C_Name = $_POST["C_Name"];
		}
		if(!$hasError){
			$rs = deleteCoustomer($C_Name);
			if($rs === true){
				header("Location: Dashboard.php");
			}
			$err_db = $rs;
		}
	}
	
	
	function insertCoustomer($C_Name,$Con_Name,$C_Address,$C_City){
		$query = "insert into customers values (NULL,'$C_Name','$Con_Name','$C_Address','$C_City')";
		return execute($query);
	}
	
	function getCoustomer(){
		$query="select * from customers";
		$rs = get($query);
		return $rs;
	}
	
	function deleteCoustomer($C_Name){
		$query="delete from student where CoustomerName=$C_Name";
		$rs = execute($query);
		return $rs;
	}
	
	
	function updateCoustomer($C_Name,$Con_Name,$C_Address,$C_City){
		$query = "update coustomer set CoustomerName='$C_Name', ContactName='$Con_Name',Address='$C_Address', City='$C_City' where CoustomerName='$C_Name'";
		$rs = execute($query);
		return $rs;
	}
	
?>