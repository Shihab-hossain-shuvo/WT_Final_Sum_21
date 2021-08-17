<?php
  include '../Models/DBConfig.php';
    $conn = mysqli_connect($db_server, $db_uname, $db_pass, $db_name);
    if($conn){
    $query = "SELECT * FROM `products`";
    $result = mysqli_query($conn,$query);
   
    echo "<table border='1'>";
            echo "<tr>
                    <th>P_id</th><th>product_name</th><th>product_quantity</th><th>price</th>
                  </tr>";
        while($row = mysqli_fetch_assoc($result)){
           
            echo "<tr>";
                echo"<td>".$row["P_id"]."</td>";
                echo"<td>".$row["product_name"]."</td>";
                echo"<td>".$row["product_quantity"]."</td>";
                echo"<td>".$row["price"]."</td>";

               
            echo"</tr>";
        }
        echo "</table>";
    }
    else{
        echo mysqli_connect_error();
    }
?>
