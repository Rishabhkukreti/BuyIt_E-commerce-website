<?php

if(isset($_POST['submit'])){
define("host", "localhost");
define("user", "root");
define("pass", "");
define("dbname", "test");
      

    
          $username=filter_input(INPUT_POST,'username');
          $password=filter_input(INPUT_POST,'password');
        
          $conn= mysqli_connect(host, user, pass, dbname);
         if(mysqli_connect_error())
         {
           die('connect error ('.mysqli_connect_error().')'.mysqli_connect_error()); 
         }
         
          else
          {
               
              $sql= "SELECT * FROM signup WHERE email='$username' AND contact='$password'";
              $result = mysqli_query($conn,$sql);
              if (mysqli_num_rows($result) == 1) 
              {
                   
                 
                 header("location:product1.html");
                 // echo"You are Logged In!";
                 
              }
             
              else {
                header("location:signup.html");
      
                  echo"Username or password incorrect";
              }
          
         }
        }
 ?>