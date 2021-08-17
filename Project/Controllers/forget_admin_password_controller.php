<?php
	 include 'C:\xampp\htdocs\final_sum_21\Project\Models/DBConfig.php';
	 $uname="";
    $err_uname="";
	
	$hasError=false;
	$err_db="";
	
if	(isset($_POST["forget_admin_password"]))
{
	if (strlen($_POST["uname"])<2)

			{   $hasError=true;
				$err_uname="Username length must contain 2 characters!";
			}
			elseif(strpos($_POST["uname"]," "))
			{    $hasError=true;
				$err_uname="Space is not allowed!";
			}
			else
			{
				$uname=$_POST["uname"];
				
			}
			if(!$hasError){
			if(authenticateUser($uname)){
				header("Location: changepass.php");
			}
			$err_db = "Invalid User!";
		  }
		  
}  

 function authenticateUser($uname){
		$query = "select * from adminlogin where username='$uname'";
		$rs = get($query);
		if(count($rs)>0){
			
			return true;
			
		}
		return false;
	}


	?>