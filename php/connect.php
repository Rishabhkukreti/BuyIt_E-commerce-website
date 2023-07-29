<?php

define("host", "localhost");
define("user", "root");
define("pass", "");
define("dbname", "sb");

$username=filter_input(INPUT_POST,'username');
$password=filter_input(INPUT_POST,'password');

if(!empty("$username")){
    if(!empty("$password")){
  
        $conn= mysqli_connect(host, user, pass, dbname);
         if(mysqli_connect_error()){
           die('connect error ('.mysqli_connect_error().')'.mysqli_connect_error()); 
         }
          else{ $sql="INSERT INTO login(username,password) values('$username','$password')";
            if($conn->query($sql))
              {echo"new record inserted";
              }

                else 
                     {echo"error:" .$sql."<br>".$conn->error;
                     }
                  $conn->close();
                        }

    }
     else{echo"password cannnot be empty";
    die();}

}
else{echo"username cannot be empty";
  die();}

?>