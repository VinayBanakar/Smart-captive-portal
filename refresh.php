//Refresh
<!Doctype html>
<html>
<?php
//$c=$_GET['a'];// users name
//$d=$_GET['b'];// usesrs id
//$e=$_GET['c'];//  users repute
//$ur=$_POST['url'];

// Create connection
$con=mysqli_connect("localhost","root","","repute system");
    if(mysqli_connect_errno()){
        echo "ERROR ".mysqli_connect_error();
} 

$sql = mysqli_query($con,"SELECT * FROM sites");
if (mysqli_num_rows($sql) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($sql)) 
    {
        $up = $row['upvotes'];
        $down = $row['downvotes'];
        if($up > $down )
        {
            $sol = mysqli_query($con, "UPDATE sites SET status = 'block' where upvotes between '$down' and '$up' ");
        }
        else if ($up < $down)
        {
            $sol1 = mysqli_query($con, "UPDATE sites SET status = 'unblock' where upvotes between '$up' and '$down' ");
        }
        else
        {
            $sol = mysqli_query($con, "UPDATE sites SET status = 'block' where upvotes ='$down' ");
        }
    }
} else {
    echo "errrrr";
}
?>
</html>