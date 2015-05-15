<?php
$start=1;
$username=$_GET['username'];
$password=$_GET['password'];

$con=mysqli_connect("localhost","root","","repute_system");
    if(mysqli_connect_errno()){
        echo "ERROR ".mysqli_connect_error();
    } 
        //$result = mysqli_query($con,"SELECT password FROM accounts WHERE username=".$username);
    $result = mysqli_query($con,"SELECT password FROM accounts");
        
        if(mysqli_num_rows($result)>0)
        {
         while($row = mysqli_fetch_assoc($result)) {
        
        //$user=$row['username'];
        $pass=$row['password'];
      

          if( $password==$pass){
            header("location:http://localhost/index.php?param=$id&param1=$UserName");  
            exit();
          }
        }
      }



?>