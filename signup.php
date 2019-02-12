<html>

    <body>
        
    <form action="signupp.php" method="POST">
<label>
    FirstName
</label>
<input name="fnameT" type="text">
<br>
<label>
        LastName
    </label>
    <input name="lnameT" type="text">
    <br>
    <label>
            Email
        </label>
        <input name="email" type="email">
        <br>
        <label>
                Password
            </label>
            <input name="pass"type="password">
            <br>
            <label>
                Address
            </label>
            <input name="address" type="text">
            <br>
            <label>
                Type
            </label>
          <select  name="type">
                <?php
                $conn = new mysqli("localhost", "root", "","assignment");
                $sql = "SELECT Type from usertype  ";
                $result = mysqli_query($conn, $sql);
                while ($row = $result->fetch_assoc()){
                  
                 echo "<option >" . $row['Type'] . "</option>";
                }
                
                 ?>

            </select>
            <br>
            <input type="submit" name="submit">
    </form>
</body>
</html>