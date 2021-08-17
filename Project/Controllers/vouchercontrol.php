
<?php
    include '../Models/DBConfig.php';

 $voucher_no="";
    $err_voucher_no="";

    $err_db="";

    $percentage="";
  $err_percentage="";

$hasError = false;


	

 if(isset($_POST["Addvoucher"])){
		if(empty($_POST["voucher_no"])){
		     $err_voucher_no= "voucher_no Required!";
			$hasError = true;
	    }
		else{
		    $voucher_no = $_POST["voucher_no"];
	    }


		if(empty($_POST["percentage"])){
		    $err_percentage = "percentage Required!";
			$hasError = true;
	    }
		else{
		    $percentage = $_POST["percentage"];
	    }
		
		if(!$hasError){
			$rs = updatevoucher($voucher_no,$percentage);
			if($rs === true){
				header("Location: Reterivevoucherinfo.php");
			}
			$err_db = $rs;
		}
	}
		
   
	

	function updatevoucher($voucher_no,$percentage){
		$query= "UPDATE `voucher` SET `percentage`='$percentage' WHERE `voucher_no`='$voucher_no'";
		return execute($query);
	}


?>
