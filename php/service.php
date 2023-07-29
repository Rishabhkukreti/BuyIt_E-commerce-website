<?php

define("host", "localhost");
define("user", "root");
define("pass", "");
define("dbname", "sb");

$product=filter_input(INPUT_POST,'product');
$mobileno=filter_input(INPUT_POST,'mobileno');
$address=filter_input(INPUT_POST,'address');
$servicedate=filter_input(INPUT_POST,'servicedate');
$servicetime=filter_input(INPUT_POST,'servicetime');

        $conn= mysqli_connect(host, user, pass, dbname);
         if(mysqli_connect_error())
         {
           die('connect error ('.mysqli_connect_error().')'.mysqli_connect_error()); 
         }
          else
          { $sql="INSERT INTO service(product,mobileno,address,servicedate,servicetime) values('$product','$mobileno','$address','$servicedate','$servicetime')";
            if($conn->query($sql))
              {echo"<h3>Your Service request has been booked and we shortly reach you!</h3>";
          
               }

                else 
                     {echo"error:" .$sql."<br>".$conn->error;
                     }
                  $conn->close();
           }

        
     


  

?>