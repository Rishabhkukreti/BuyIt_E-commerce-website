<?php

define("host", "localhost");
define("user", "root");
define("pass", "");
define("dbname", "test");

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$mobileno=$_POST['contact'];
$email=$_POST['email'];


$conn= mysqli_connect(host, user, pass, dbname);
         if(mysqli_connect_error())
         {
           die('connect error ('.mysqli_connect_error().')'.mysqli_connect_error()); 
         }
          elseif(isset($_POST["submit"]))
         {   $sql="INSERT INTO signup(fname,lname,age,gender,contact,email)values('$fname','$lname','$age','$gender','$mobileno','$email')";
                 if($conn->query($sql))
                  {echo"<h3>Thank you for signing In use your email as username and mobile number as password.</h3>";
                  }
                else 
                     {echo"error:" .$sql."<br>".$conn->error;
                     }
                  $conn->close();
           }

?>
