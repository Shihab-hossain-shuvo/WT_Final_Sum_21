<?php include 'main_header.php'; ?>
<?php include '../Controller/usercontrol.php'; ?>
<?php $categories = getAllCategories(); ?>
<html>
    <head></head>
	<body>
	    <div align="center">
		    <h3>All Categories</h3>
			<h5><?php echo $err_db; ?></h5>
			<table>
			    <thead>
				    <th>SL#</th>
					<th>Name</th>
					
				</thead>
				<tbody>
				    <?php
                        $i = 1;
						foreach($categories as $c){
							echo "<tr>";
							    echo "<td>$i</td>";
								echo "<td>".$c["cname"]."</td>";
								echo '<td><a href = 'EditCategory.php?id='.$c["id"]'">Edit</td>';
							echo "</tr>";
							$i++;
						}
					?>
				</tboady>
			</table>
		</div>
	</boady>
    <?php include 'main_footer.php'; ?>
</html>