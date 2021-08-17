<?php
  include '../Models/DBConfig.php';
    $conn = mysqli_connect($db_server, $db_uname, $db_pass, $db_name);
    if($conn){
    $query = "SELECT * FROM `employee` INNER JOIN sallary on sallary.E_identity=employee.E_id";
    $result = mysqli_query($conn,$query);
        //var_dump($result);
       
        echo "<table border='1'>";
            echo "<tr>
                    <th>Shop_id</th><th>Shop_id</th><th>E_id</th><th>E_identity</th><th>sallary</th>
                  </tr>";
        while($row = mysqli_fetch_assoc($result)){
           
            echo "<tr>";
                echo"<td>".$row["name"]."</td>";
                echo"<td>".$row["E_phone"]."</td>";
                echo"<td>".$row["E_id"]."</td>";
                echo"<td>".$row["E_identity"]."</td>";
                echo"<td>".$row["Salary"]."</td>";  
            
               
            echo"</tr>";
        }
        echo "</table>";
    }
    else{
        echo mysqli_connect_error();
    }
?>