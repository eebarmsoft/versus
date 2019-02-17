<?php
 include ("connection.php");

  session_start();
   $checkuser= $_SESSION['username'];
   
   $query =  "select * from login where username = '$checkuser'";
    $data = mysqli_query($con , $query);
    $result = mysqli_fetch_assoc($data);
    echo $result['name'];
     
   if($result['role']=='admin')
   {
       header('location:admin.php');
   }else{
          if($result['role']=='clint')
          {
              header('location:clint.php');
          }else
          {
              if($result['role']=='user')
              {
                  header('location:user.php');
              }
          }
       
       
   }



?>