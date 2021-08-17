<?php include 'MainHeader.php'; ?>
<?php include 'AdminHeader.php'; ?>
<?php include '../Controllers/StudentControl.php'; ?>
<?php $students = getStudents(); ?>
<html>
    <head></head>
	<body>
	    <div align="center">
		    <h3>All Students</h3>
			<h5><?php echo $err_db; ?></h5>
			<table>
			    <thead>
				    <th>SL_no</th>
					<th>Name:</th>
					<th>ID:</th>
					<th>DOB:</th>
					<th>Credit:</th>
					<th>CGPA:</th>
					<th>Department:</th>
					<th></th>
					<th></th>
					
				</thead>
				<tbody>
				    <?php
                        $i = 1;
						foreach($students as $s){
							echo "<tr>";
							    echo "<td>$i</td>";
								echo "<td>".$s["name"]."</td>";
								echo "<td>".$s["id"]."</td>";
								echo "<td>".$s["dob"]."</td>";
								echo "<td>".$s["credit"]."</td>";
								echo "<td>".$s["cgpa"]."</td>";
								echo "<td>".$s["department_id"]."</td>";
								echo '<td><a href = "EditStudent.php?id='.$s["id"].'">Edit</td>';
								echo '<td><a href = "DeleteStudent.php?id='.$s["id"].'">Delete</td>';
							echo "</tr>";
							$i++;
						}
					?>
				</tbody>
			</table>
		</div>
	</body>
    <?php include 'Footer.php'; ?>
</html>