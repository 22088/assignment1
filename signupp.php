<?php
$con = new mysqli("localhost", "root", "","assignment");

if(isset($_POST['submit']))
{
    $fname=$_POST['fnameT'];
    $lname=$_POST['lnameT'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $address=$_POST['address'];
    $type=$_POST['type'];
    $sql="SELECT ID from usertype WHERE Type='$type'";
    $result2 = mysqli_query($con, $sql);
    if ($result2->num_rows > 0) {
        while($row = $result2->fetch_assoc()) {
            $usertype=$row["ID"];
        }
    }
  /*  if($_POST['type']=="Seller"){
        $typee=1;
    }
  if($_POST['type']=="Buyer"){
        $typee=2;
    }
    if($_POST['type']=="Admin"){
        $typee=3;
    }
    $type=$_POST['type'];
*/
$result=mysqli_query($con,"INSERT INTO users(FirstName,LastName,Address,Email,Password,TypeID)VALUES('$fname','$lname','$address','$email','$pass','$usertype')");
header("Location:/assignment/login.html");

}
?>