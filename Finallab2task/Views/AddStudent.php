<?php include 'MainHeader.php'; ?>
<?php include 'AdminHeader.php'; ?>
<?php include '../Controllers/StudentControl.php';
    $depts = getDepts();
?>
<html>
    <head></head>
	<boady>
	    <div align="center">
		    <h3>Add Student</h3>
			<h5><?php echo $err_db; ?></h5>
			<form action="" method="post">
			    <div>
				    <h4>Name:</h4>
					<input type = "text" name = "name" value="<?php echo $name; ?>"/>
					<span> <?php echo $err_name; ?> </span>
				</div>
				<div>
				    <h4>DOB:</h4>
					<input type = "text" name = "dob" value="<?php echo $dob; ?>"/>
					<span> <?php echo $err_dob; ?> </span>
				</div>
				<div>
				    <h4>Credit:</h4>
					<input type = "text" name = "credit" value="<?php echo $credit; ?>"/>
					<span> <?php echo $err_credit; ?> </span>
				</div>
				<div>
				    <h4>CGPA:</h4>
					<input type = "text" name = "cgpa"/>
					<span> <?php echo $err_cgpa; ?> </span>
				</div>
				<div>
			        <h4>Department:</h4> 
			            <select name="department_id">
				            <option disabled selected>Choose</option>
				                <?php
					                foreach($depts as $d){
						                echo "<option value='".$d["id"]."'>".$d["name"]."</option>";
					                }
				                ?>
			            </select>
						<span> <?php echo $err_department_id; ?> </span>
		        </div>
				<div>
					<input type = "submit" name = "addStudent" value = "Add Student" />
				</div>
			</form>
		</div>
	</boady>
    <?php include 'Footer.php'; ?>
</html>