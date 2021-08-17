<?php
  include '../Models/DBConfig.php';
    $conn = mysqli_connect($db_server, $db_uname, $db_pass, $db_name);
    if($conn){
    $query = "SELECT * FROM `employee_report`";
    $result = mysqli_query($conn,$query);
   
    echo "<table border='1'>";
            echo "<tr>
                    <th>Report_id</th><th>Report</th>
                  </tr>";
        while($row = mysqli_fetch_assoc($result)){
           
            echo "<tr>";
                echo"<td>".$row["Report_id"]."</td>";
                echo"<td>".$row["Report"]."</td>";
               
            echo"</tr>";
        }
        echo "</table>";
    }
    else{
        echo mysqli_connect_error();
    }
?>