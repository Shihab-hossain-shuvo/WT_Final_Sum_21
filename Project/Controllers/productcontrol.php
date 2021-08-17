 <?php
    include '../Models/DBConfig.php';
    $P_id="";
    $err_P_id="";
    $product_name="";
    $err_product_name="";                 
    $err_db="";
    $product_quantity="";
    $err_product_quantity="";

    $price="";
    $err_price="";


	$hasError = false;

    if(isset($_POST["Addproduct"])){
    	if(empty($_POST["P_id"])){
		    $err_P_id = " product identity no: Required!";
			$hasError = true;
	    }
		else{
		    $P_id = $_POST["P_id"];
	    }

		if(empty($_POST["product_name"])){
		    $err_product_name = " productName Required!";
			$hasError = true;
	    }
		else{
		    $product_name = $_POST["product_name"];
	    }

	    if(empty($_POST["product_quantity"])){
		    $err_product_quantity = "product_quantity Required!";
			$hasError = true;
	    }
		else{
		    $product_quantity = $_POST["product_quantity"];
	    }

	   if(empty($_POST["price"])){
		    $err_price = "product_price Required!";
			$hasError = true;
	    }
		else{
		    $price = $_POST["price"];
	    }
		
		if(!$hasError){
			$rs = insertproduct($P_id,$product_name,$product_quantity,$price);
			if($rs === true){
				header("Location: Allproduct.php");
			}
			$err_db = $rs;
		}
	}



 elseif(isset($_POST["updateproduct"])){

 	if(empty($_POST["P_id"])){
		    $err_P_id = " product identity no: Required!";
			$hasError = true;
	    }
		else{
		    $P_id = $_POST["P_id"];
	    }

		if(empty($_POST["product_name"])){
		    $err_product_name = " productName Required!";
			$hasError = true;
	    }
		else{
		    $product_name = $_POST["product_name"];
	    }

	    if(empty($_POST["product_quantity"])){
		    $err_product_quantity = "product_quantity Required!";
			$hasError = true;
	    }
		else{
		    $product_quantity = $_POST["product_quantity"];
	    }

	     if(empty($_POST["price"])){
		    $err_price = "product_price Required!";
			$hasError = true;
	    }
		else{
		    $price = $_POST["price"];
	    }
		
		if(!$hasError){
			$rs = updateproduct($P_id,$product_name,$product_quantity,$price);
			if($rs === true){
				header("Location: Allproduct.php");
			}
			$err_db = $rs;
		}
		
		
	}
		
   
	
	
	function insertproduct($P_id,$product_name,$product_quantity,$price){
	$query = "INSERT INTO `products`(`P_id`, `product_name`, `product_quantity`, `price`) VALUES ('$P_id','$product_name','$product_quantity','$price')";
		return execute($query);
	}
	

	function updateproduct($P_id,$product_name,$product_quantity,$price){
		$query = "UPDATE `products` SET `product_name`='$product_name',`product_quantity`='$product_quantity',`price`='$price' WHERE `P_id`='$P_id'";
		$rs = execute($query);
		return $rs;
	}
	
?>