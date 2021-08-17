<?php

include '../Models/DBConfig.php';

$id=$_POST["id"];

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
// sql to delete a record

if(!empty($id)){
	$sql = "DELETE FROM employee WHERE E_id='$id'";
	
}else{
	echo 'Id is required';
}

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
	
} else {
  echo "Error deleting record: " . $con->error;
}

$con->close();

?>