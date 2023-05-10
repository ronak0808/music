<?php
   $name = $_POST['name'];
   $password = $_POST['password'];

   //database connection

   $con = new mysqli("localhost","root","","test");
   if($con->connect_error){
      die("failed to connect:".$con->connect_error);
   } else{
      $stmt =$con->prepare("select * from login where name=?");
      $stmt->bind_param("s",name);
      $stmt->execute();
      $stmt_result= $stmt->get_result();
      if($stmt_result->num_rows>0){

          $data=$stmt_result->fetch_assoc();
          if($data['password']==$password){
            echo "<h2>LOgin Succesfully</h2>";
          }else{
            echo "<h2>Invalid email or password</h2>";
          }

      }else{
         echo "<h2>Invalid email or password</h2>";
      }

   }

   
   ?>