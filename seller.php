<?php
$con = new mysqli("localhost", "root", "","assignment");
session_start();
if(isset($_POST['update'])) {
    $sql= "SELECT * from users WHERE ID='" .$_SESSION["ID"] . "'";
    $result=mysqli_query($con,$sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

     echo '<form  action="seller.php" method="POST">'.
     '<input  type="text"id="xx" name="fname" value='.$row["FirstName"].'>'.'<br>'
     .  '<input  type="text"id="xx" name="lname" value='.$row["LastName"].'>'.'<br>'
     .  '<input  type="text"id="xx" name="add" value='.$row["Address"].'>'.'<br>'
     .  '<input  type="text"id="xx" name="email" value='.$row["Email"].'>'.'<br>'
     .  '<input  type="text"id="xx" name="pass" value='.$row["Password"].'>'.'<br>'
     ;
     
    
  //  echo $row["ID"].' '. $row["FirstName"].' '. $row["LastName"].' '. $row["Address"].' '. $row["Email"].' '. $row["Password"]. $row["TypeID"];
   // echo '<br>';
   }
   echo '<input  type="submit" id="xx" name="saveedit" >'
   .'</form>';
   
}
}
if(isset($_POST['saveedit']))
{
   
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $address=$_POST['add'];
    $email=$_POST['email'];
    $password=$_POST['pass'];


    $sql= "UPDATE  users SET FirstName='$fname', LastName='$lname', Address='$address',Email='$email',Password='$password' WHERE ID='" .$_SESSION["ID"] . "'" ;
$result=mysqli_query($con,$sql);
echo "update is done";
}
?>