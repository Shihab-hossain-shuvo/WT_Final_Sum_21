<?php session_start()?>
<?php
    include '../Models/DBConfig.php';
    $name="";
    $err_name="";
    $uname="";
    $err_uname="";
    $pass="";
    $err_pass="";
	$err_db="";
	$hasError = false;

	
	if(isset($_POST["login"])){
		
		if(empty($_POST["uname"])){
		    $err_uname = "Username Required!";
			$hasError = true;
	    }
       
		else{
		    $uname = $_POST["uname"];
			$_SESSION['uname']=$_POST["uname"];
	    }
		if(empty($_POST["pass"])){
		    $err_pass = "Password Required!";
			$hasError = true;
	    }
		else{
		    $pass = $_POST["pass"];
			
	    }
		if(!$hasError){
			if(authenticateUser($uname,$pass)){
				header("Location: Dashboard.php");
			}
			$err_db = "Invalid User!";
		}
	}
	
	function authenticateUser($uname,$pass){
		$query = "select * from adminlogin where username='$uname' and password='$pass'";
		$rs = get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
	}
?>