 <?php
    include '../Models/DBConfig.php';
    $Report="";
    $err_Report="";

    $err_db="";


$hasError = false;

     if(isset($_POST["Upreport"])){
		if(empty($_POST["Report"])){
		   $err_Report  = "Cannot be empty!";
			$hasError = true;
	    }
		else{
		     $Report = $_POST["Report"];
	    }


		
		
		if(!$hasError){
			$rs = insertreport($Report);
			if($rs === true){
				header("Location: Dashboard.php");
			}
			$err_db = $rs;
		}
	}
		
   
	
	
	
	function insertreport($Report){
		$query = "INSERT INTO `employee_report`(`Report`) VALUES ('$Report') ";
		return execute($query);
	}
	
?>