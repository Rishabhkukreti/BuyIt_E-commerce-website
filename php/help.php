<?php

define("host", "localhost");
define("user", "root");
define("pass", "");
define("dbname", "test");

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mobileno=$_POST['contact'];
$area=$_POST['area'];
$help=$_POST['help'];
$feedback=$_POST['feedback'];


$conn= mysqli_connect(host, user, pass, dbname);
         if(mysqli_connect_error())
         {
           die('connect error ('.mysqli_connect_error().')'.mysqli_connect_error()); 
         }
          elseif(isset($_POST["submit"]))
         {   $sql="INSERT INTO help(fname,lname,contact,area,help,feedback)values('$fname','$lname','$mobileno','$area','$help','$feedback')";
                 if($conn->query($sql))
                  {echo"<h3>Thank you for your Feedback/complaint.</h3>";
                  }
                else 
                     {echo"error:" .$sql."<br>".$conn->error;
                     }
                  $conn->close();
           }

?>
