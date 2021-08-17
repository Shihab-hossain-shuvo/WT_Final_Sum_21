<?php
  include '../Models/DBConfig.php';
    $conn = mysqli_connect($db_server, $db_uname, $db_pass, $db_name);
    if($conn){
    $query = "select * from customers";
    $result = mysqli_query($conn,$query);
        
        echo "<table border='1'>";
            echo "<tr>
                    <th>ID</th><th>name</th><th>phone</th><th>Address</th><th>c_id</th>
                  </tr>";
        while($row = mysqli_fetch_assoc($result)){
           
            echo "<tr>";
                echo"<td>".$row["ID"]."</td>";
                echo"<td>".$row["name"]."</td>";
                echo"<td>".$row["phone"]."</td>";
                echo"<td>".$row["Address"]."</td>";
                echo"<td>".$row["c_id"]."</td>";

               
            echo"</tr>";
        }
        echo "</table>";
    }
    else{
        echo mysqli_connect_error();
    }
?>
