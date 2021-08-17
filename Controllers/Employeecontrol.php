 <?php
    include '../Models/DBConfig.php';
	
$name=$_POST["name"];
$E_phone=$_POST["E_phone"];
	
if(!empty($name)&&!empty($E_phone)){
$sql = "INSERT INTO employee (name,E_phone)
VALUES ('".$_POST["name"]."','".$_POST["E_phone"]."')";
}
else
{
	echo "Registration failed!!!All fields are required";
	die();
}



if ($con->query($sql) === TRUE) {
    echo "Registration successful";
	
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();

?>