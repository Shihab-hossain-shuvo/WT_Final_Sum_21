 <?php
    include '../Models/DBConfig.php';
    $Sh_id="";
    $err_Sh_id="";
    $Shop_name="";
    $err_Shop_name="";                 
    $err_db="";
                          

	$hasError = false;

    if(isset($_POST["AddShop"])){
    	if(empty($_POST["Shop_name"])){
		    $err_Shop_name = " please Enter a name for the shop";
			$hasError = true;
	    }
		else{
		    $Shop_name = $_POST["Shop_name"];
	    }

		
		if(!$hasError){
			$rs = insertshhop($Shop_name);
			if($rs === true){
				header("Location: Shopinfo.php");
			}
			$err_db = $rs;
		}
	}


		

	
	function insertshhop( $Shop_name){
	$query = "INSERT INTO `shops`(`Shop_name`) VALUES ('$Shop_name')";
		return execute($query);
	}


		
	
?>