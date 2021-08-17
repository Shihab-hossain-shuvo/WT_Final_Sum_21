 <?php
    include '../Models/DBConfig.php';
    $name="";
    $err_name="";
	$department_id="";
    $err_department_id="";
    $dob="";
    $err_dob="";
	$credit="";
    $err_credit="";
    $cgpa="";
    $err_cgpa="";
	$err_db="";
	$hasError = false;

    if(isset($_POST["addStudent"])){
		if(empty($_POST["name"])){
		    $err_name = "Name Required!";
			$hasError = true;
	    }
		else{
		    $name = $_POST["name"];
	    }
		if(empty($_POST["dob"])){
		    $err_dob = "DOB Required!";
			$hasError = true;
	    }
		else{
		    $dob = $_POST["dob"];
	    }
		if(empty($_POST["credit"])){
		    $err_credit = "Credit Required!";
			$hasError = true;
	    }
		else{
		    $credit = $_POST["credit"];
	    }
		if(empty($_POST["cgpa"])){
		    $err_cgpa = "CGPA Required!";
			$hasError = true;
	    }
		else{
		    $cgpa = $_POST["cgpa"];
	    }
		if(empty($_POST["department_id"])){
		    $err_department_id = "Department ID Required!";
			$hasError = true;
	    }
		else{
		    $department_id = $_POST["department_id"];
	    }
		if(!$hasError){
			$rs = insertStudent($name,$dob,$credit,$cgpa,$department_id);
			if($rs === true){
				header("Location: AllStudents.php");
			}
			$err_db = $rs;
		}
	}
	
	else if(isset($_POST["updateStudent"])){
		if(empty($_POST["name"])){
		    $err_name = "Name Required!";
			$hasError = true;
	    }
		else{
		    $name = $_POST["name"];
	    }
		if(empty($_POST["dob"])){
		    $err_dob = "DOB Required!";
			$hasError = true;
	    }
		else{
		    $dob = $_POST["dob"];
	    }
		if(empty($_POST["credit"])){
		    $err_credit = "Credit Required!";
			$hasError = true;
	    }
		else{
		    $credit = $_POST["credit"];
	    }
		if(empty($_POST["cgpa"])){
		    $err_cgpa = "CGPA Required!";
			$hasError = true;
	    }
		else{
		    $cgpa = $_POST["cgpa"];
	    }
		if(!$hasError){
			$rs = updateStudent($name,$dob,$credit,$cgpa,$_POST["department_id"],$_POST["id"]);
			if($rs === true){
				header("Location: AllStudents.php");
			}
			$err_db = $rs;
		}
		
	}
	
	else if(isset($_POST["deleteStudent"])){
		if(empty($_POST["id"])){
		    $err_id = "Id is Required!";
			$hasError = true;
	    }
		else{
			$id= $_POST["id"];
		}
		if(!$hasError){
			$rs = deleteStudent($id);
			if($rs === true){
				header("Location: AllStudents.php");
			}
			$err_db = $rs;
		}
	}
	
	
	function insertStudent($id,$name,$dob,$credit,$cgpa,$department_id){
		$query = "insert into student values (NULL,'$name','$dob','$credit','$cgpa', $department_id)";
		return execute($query);
	}
	
	function getStudents(){
		$query="select * from student";
		$rs = get($query);
		return $rs;
	}
	
	function getStudent($id){
		$query="select * from student where id=$id";
		$rs = get($query);
		return $rs[0];
	}
	
	function deleteStudent($id){
		$query="delete from student where id=$id";
		$rs = execute($query);
		return $rs;
	}
	
	function getDepts(){
		$query="select * from department";
		$rs = get($query);
		return $rs;
	}
	
	function updateStudent($name,$dob,$credit,$cgpa,$department_id,$id){
		$query = "update student set name='$name', dob='$dob', credit=$credit, cgpa=$cgpa, department_id=$department_id where id=$id";
		$rs = execute($query);
		return $rs;
	}
	
?>