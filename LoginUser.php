<?php
$start=1;
$username=$_GET['username'];
$password=$_GET['password'];
$usn=$_GET['usn'];
$con=mysqli_connect("localhost","root","","repute system");
    if(mysqli_connect_errno()){
        echo "ERROR ".mysqli_connect_error();
    } 
        //$result = mysqli_query($con,"SELECT password FROM accounts WHERE username=".$username);
    $result = mysqli_query($con,"SELECT password,username,type FROM accounts ");
        
        if(mysqli_num_rows($result)>0)
        {
         while($row = mysqli_fetch_assoc($result)) {
        
        //$user=$row['username'];
        $pass=$row['password'];
        $use=$row['username'];
        $type=$row['type'];

          if( $password==$pass  and $username == $use ){
            header("location:http://localhost/index.php?param=$type&param1=$username&param2=$usn");  
            exit();
          }

        }
         echo "Wrong password or username please try again !";
      }



?>