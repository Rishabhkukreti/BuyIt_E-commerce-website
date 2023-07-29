<?php
if(isset($_POST['submit'])){

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
          else{ $sql="SELECT * FROM signup WHERE email=$username AND contact=$password LIMIT 1";
                   
                   $res=$db->prepare($sql);
                   $row = $res->execute([$username,$password]);
                   if($row)
                   {  $res1=$res->fetch(PDO::FETCH_ASSOC);
                      if($res->rowCount()>0)
                       {echo"you are a registered member";
                       }
                       else{echo"you are not registered";}
                   }

                   else 
                     { echo"you are not registered";
                       echo"error:" .$sql."<br>".$conn->error;
                     }
                     $conn->close();
              }

            }
              
?>