<!Doctype html>
<table border="1" id="table">

    <p> <tr><th bgcolor="#9999FF">My reported sites</th><th bgcolor="#9999FF"> status</th>
   </tr>
     
<?php
$b=$_GET['a'];

// Create connection
$con=mysqli_connect("localhost","root","","repute system");
    if(mysqli_connect_errno()){
        echo "ERROR ".mysqli_connect_error();
} 

$sql = mysqli_query($con,"SELECT name,site,status FROM reported_sites");
if (mysqli_num_rows($sql) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($sql)) 
    {
        
        if($b == $row['name']){
        echo "<td reported>". $row["site"]."</td>"."<td chap>".$row["status"]."</tr></td>";
        
       }
    }
} else {
    echo "0 results";
}
?>
</table>

</html>