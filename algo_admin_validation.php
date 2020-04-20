<?php


$uname = $_POST["username"];

$pass = $_POST["password"];

echo "$pass";
//Connect to the database
$con = mysqli_connect("localhost","root","","algo");

 //Make sure we connected successfully
if (mysqli_connect_errno())
{
echo "Connetion attempt Failed :".mysqli_connect_error;
}
else{
echo "Connection Status: Connected Successfully";
echo "<br>";
echo "<br>";
}

$q="SELECT * FROM algoadmin WHERE Admin= '$uname' and Password= '$pass'";
 $result = mysqli_query($con,$q);


$res= mysqli_num_rows($result);
if($res==1){
    echo "LOGIN SUCCESSFUL :) :)";
     header('location:algo_admin_portal.php');

   

}
else
{
  echo "LOGIN not SUCCESSFUL :) :)";
     header('location:algo_signup.html');

    
   
}



?>