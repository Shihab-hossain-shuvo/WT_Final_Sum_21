<?php
  include '../Models/DBConfig.php';
    $conn = mysqli_connect($db_server, $db_uname, $db_pass, $db_name);
    if($conn){
    $query = "select * from employee";
    $result = mysqli_query($conn,$query);
        //var_dump($result);
       
        echo "<table border='1'>";
            echo "<tr>
                    <th>Name</th><th>E_phone</th><td>E_id</td>
                  </tr>";
        while($row = mysqli_fetch_assoc($result)){
           
            echo "<tr>";
                echo"<td>".$row["name"]."</td>";
                echo"<td>".$row["E_phone"]."</td>";
                echo"<td>".$row["E_id"]."</td>";
               
            echo"</tr>";
        }
        echo "</table>";
    }
    else{
        echo mysqli_connect_error();
    }
?>