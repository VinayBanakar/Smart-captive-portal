<!Doctype html>
<html>
<?php
$c=$_GET['a'];// users name
$d=$_GET['b'];// usesrs id
$e=$_GET['c'];//  users repute
$ur=$_POST['url'];

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
        
        if($ur == $row['URL'] && $d != $row['id'])
        {
        $ne = $row['downvotes'] + $e;   
        $sol = mysqli_query($con, "UPDATE sites SET downvotes = $ne where URL = '$ur' AND id != '$d'");
        $bew = mysqli_query($con,"INSERT INTO v_sites(teacher_id,URL,vote,votefor) VALUES ('$d','$ur','$e','unblock')");
        echo "Upvoted the site    ";
        echo $ur;  
        exit();     
       }
    }
}
 {
    echo "Sorry before upvoting you have to unblock it first or you are trying to upvote your own report, in which you cant.";
}
?>
</html>