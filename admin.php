<?php 
$con = new mysqli("localhost", "root", "","assignment");



       if(isset($_POST['display'])) {
        $sql= "SELECT * from users ";
        $result=mysqli_query($con,$sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        echo $row["ID"].' '. $row["FirstName"].' '. $row["LastName"].' '. $row["Address"].' '. $row["Email"].' '. $row["Password"]. $row["TypeID"];
        echo '<br>';
       }
       
    }
}


       ?>