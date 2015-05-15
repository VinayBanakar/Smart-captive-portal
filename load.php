<?php
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

$url = $_POST['url'];
$sql = "SELECT * FROM sites " ;

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	$stat = $row['status'];
    	if($stat == 'block' && $url == $row['URL'])
    	{
       echo "This site is blocked" ;
       die();
      }
    }

    header("Location: $url");
}
?>
