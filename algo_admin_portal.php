
  
    
 



<html>
<body >
<br><br><br><font color="white" size="2" padding="10px" style="font-family:Lucida Sans Unicode, Lucida Grande, sans-serif;  left: 5%;
  margin-left: 40px">**Do not leave the choices empty.</font></br>
<style>

.v4{
 position: absolute;
  left: 2%;
  margin-left: 10px;
  top: 29%;
}
    body{
        background-color: black;
    }
     .blink {
      animation: blinker 0.6s linear infinite;
      color: #1c87c9;
      font-size: 30px;
      font-weight: bold;
      font-family: sans-serif;
      }
      @keyframes blinker {  
      50% { opacity: 0; }
      }
      .blink-one {
      animation: blinker-one 2s linear infinite;
      }
      @keyframes blinker-one {  
      0% { opacity: 0; }
      }
      .blink-two {
      animation: blinker-two 2.0s linear infinite;
      }
      @keyframes blinker-two {  
      100% { opacity: 0; }
      }
</style>

<div class="v4">


<br><br>
<b><font color="orange" size="6" padding="10px" style="font-family:Lucida Sans Unicode, Lucida Grande, sans-serif">Admin Portal</font><br>
<br>
<font size="3" color="white" style="font-family:Lucida Sans Unicode, Lucida Grande, sans-serif">You will be redirected again to this page<br> with modified users list after deletion<br>
</font><br>
</b>
   <a href="userportal.html" style="font-size:22px; text-decoration: none ;">  <p class="blink blink-two" style="color:orange; font-family:fantasy"> log out</p></a> 
 
</div>
 
<style>

.v3{
 position: absolute;
  left: 55%;
  margin-left: -3px;
  top: 15%;
color: white;
    box-shadow: 10px white;
}

</style>
<div class="v3">

<br>
<h4><font size="4" color="white" style="font-family:Tahoma, Geneva, sans-serif"> Please select a user to delete their credentials</font></h4>

<?php

$conn = mysqli_connect('localhost', 'root', '', 'algo') 
or die ('Cannot connect to db');

$q="DELETE FROM algoadmin WHERE Admin='' or Password =''";
 $result = mysqli_query($conn,$q);

    $result = $conn->query("select Admin, Password from algoadmin");
    
    echo "<html>";
    echo "<body>";
 echo '<form method="POST" action="algo_delete.php">';
    echo "<select name='name'>";

    while ($row = $result->fetch_assoc()) {

                  unset($Admin, $Password);
                  $name = $row['Admin'];
                  $pass = $row['Password']; 
                  echo '<option value="'.$name.'">'.$name.'</option>';
      
       
}
echo '</form>'; 
    echo "</select>";
 


    echo "</body>";

    echo "</html>";
?>
   
<br><br><br><br><br><br><br>
<h4><font size="4" color="white" style="font-family:Tahoma, Geneva, sans-serif"> Submit your choice here</font></h4>

<input type="submit" name="delete" value="Delete" >
</form>
</div>


</body>
</html>