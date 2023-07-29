<?php

define("host", "localhost");
define("user", "root");
define("pass", "");
define("dbname", "sb");

$name=$_POST['name'];
$gender=$_POST['gender'];
$mobileno=$_POST['contact'];
$address=$_POST['address'];
$receivedate=$_POST['receivedate'];
$product=$_POST['product'];



$conn= mysqli_connect(host, user, pass, dbname);
         if(mysqli_connect_error())
         {
           die('connect error ('.mysqli_connect_error().')'.mysqli_connect_error()); 
         }
          elseif(isset($_POST["submit"]))
         {   $sql="INSERT INTO purchasing(name,gender,contact,address,receivedate,product) values('$name','$gender','$mobileno','$address','$receivedate','$product')";
                 if($conn->query($sql))
                  {echo"<h3>Thank you for purchasing our product we shortly call you for further information.</h3>";
                  }
                else 
                     {echo"error:" .$sql."<br>".$conn->error;
                     }
                  $conn->close();
           }

?>


    
  
       