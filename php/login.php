<?php

define("host", "localhost");
define("user", "root");
define("pass", "");
define("dbname", "test");

$username=filter_input(INPUT_POST,'username');
$password=filter_input(INPUT_POST,'password');
  
        $conn= mysqli_connect(host, user, pass, dbname);
         if(mysqli_connect_error()){
           die('connect error ('.mysqli_connect_error().')'.mysqli_connect_error()); 
         }
          else{ $sql="INSERT INTO login(username,password) values('$username','$password')";
            if($conn->query($sql))
              {echo"<h3>Log in Credential inserted</h3>";
              }

                else 
                     {echo"error:" .$sql."<br>".$conn->error;
                     }
                  $conn->close();
               }

?>