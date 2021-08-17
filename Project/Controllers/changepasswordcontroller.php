<?php
    include '../Models/DBConfig.php';
    
    $uname="";
    $err_uname="";
    $pass="";
    $err_pass="";
	$err_db="";
	$hasError = false;

	
	if(isset($_POST["change"])){
		
		if(empty($_POST["uname"])){
		    $err_uname = "Username Required!";
			$hasError = true;
	    }
       
		else{
		    $uname = $_POST["uname"];
			setcookie("name","$uname",time()-60);
	    }
		
		
		if(empty($_POST["pass"])){
		    $err_pass = "Password Required!";
			$hasError = true;
	    }
		else{
		    $pass = $_POST["pass"];
	    }
		if(!$hasError){
			if(updatepassword($uname,$pass)){
				header("Location: Adminlogin.php");
			}
			$err_db = "Invalid User!";
		}
	}


	function updatepassword($uname,$pass){
		$query = "UPDATE `adminlogin` SET `password`='$pass' WHERE `username`='$uname'";
		return execute($query);
	}
   
?>