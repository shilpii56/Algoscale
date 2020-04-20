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

$uname = $_POST["username"];

$pass = $_POST["password"];
$q="SELECT * FROM algoadmin WHERE Admin= '$uname'";
 $result = mysqli_query($con,$q);

$res= mysqli_num_rows($result);
echo "$res";
if($res!=0){
  echo '<br>';
    echo "username '$uname' already exists, try again with another username";   


}


else{
   $qu="INSERT INTO algoadmin (Admin, Password) VALUES ('$uname', '$pass')";
if(!mysqli_query($con,$qu)){
echo "fail";
}
    else{
        header('location:algo_admin_login.html');
}
}