<?php
$unblock = 'abcde';


$con=mysqli_connect("localhost","root","","repute_system");
    if(mysqli_connect_errno()){
        echo "ERROR ".mysqli_connect_error();
}

$result= mysqli_query($con,"INSERT into reported_sites values site=".$unblock ."USN='1PI13CS083'"); 
if(mysqli_num_rows($result)>0)
{
while($row  = mysqli_fetch_assoc($result)); 
}
exit();
?>
