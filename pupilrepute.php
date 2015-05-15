<!Doctype html>
<table border="1" id="table">

    <p> <tr><th bgcolor="#9999FF">My repute</th>
    </p>
   </tr>
     
<?php
$c=$_GET['a'];
$d=$_GET['b'];
$tr=$_GET['j'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "repute system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection_aborted(oid)
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name,repute FROM pupil ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     
     if($c== $row['name'])
     {   
            echo "<tr><td Repute: >   " . $row["repute"]. "</tr></td>";
            $rep=$row['repute'];
     }
    }
} 
else {
    echo "0 results";
}
echo '</table>';
$conn->close();
$some = "<a href = 'index.php?param=$tr&param1=$c&param2=$d&param3=$rep'>Click here to go back</a>";
echo $some;
?>

</html>