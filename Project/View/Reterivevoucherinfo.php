<?php
  include '../Models/DBConfig.php';
    $conn = mysqli_connect($db_server, $db_uname, $db_pass, $db_name);
    if($conn){
    $query = "SELECT * FROM `voucher`";
    $result = mysqli_query($conn,$query);
        
        echo "<table border='1'>";
            echo "<tr>
                <th>voucher_no</th><th>percentage</th>
                  </tr>";
        while($row = mysqli_fetch_assoc($result)){
           
            echo "<tr>";
                echo"<td>".$row["voucher_no"]."</td>";
                echo"<td>".$row["percentage"]."</td>";

               
            echo"</tr>";
        }
        echo "</table>";
    }
    else{
        echo mysqli_connect_error();
    }
?>
