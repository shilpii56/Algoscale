<?php
$con = mysqli_connect("localhost","root","","algo");

 //Make sure we connected successfully
if (mysqli_connect_errno())
{
echo "Connetion attempt Failed :".mysqli_connect_error;
}
else{
echo "Connection Status: Connected Successfully";
}

$uname = $_POST["name"];

$q="DELETE FROM algoadmin WHERE Admin='$uname'";
 $result = mysqli_query($con,$q);

    header('location:algo_admin_portal.php');
echo "$uname";


 