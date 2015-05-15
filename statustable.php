<!Doctype html>
<table border="1" id="table">

    <p> <tr><th bgcolor="#9999FF"></th><th bgcolor="#9999FF">URL</th><th bgcolor="#9999FF">status</th><th bgcolor="#9999FF">Block score</th>
    <th bgcolor="#9999FF">Unblock score</th><th bgcolor="#9999FF">id</th>
    </p>
   </tr>
     
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
$c=$_GET['a'];// users name
$d=$_GET['b'];// usesrs id
$e=$_GET['c'];//  users repute
$o=$_GET['m'];// user type
if($o=='Teacher')
    {
        $blk= "blockrepute.php?a=$c&b=$d&c=$e";
        $ublk = "unblockrepute.php?a=$c&b=$d&c=$e";
    }
else
    {
        $blk= "blockreputepupil.php?a=$c&b=$d&c=$e";
        $ublk = "unblockreputepupil.php?a=$c&b=$d&c=$e";

    }

$sql = "SELECT * FROM sites";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	
        echo "<tr><td>"."<td status>". $row["URL"] ."</td>"."<td cat>".$row["status"]."</td>"."<td type>".$row["upvotes"]."</td>"."<td down>".$row["downvotes"].
        "<td id>".$row["id"]."</td>"."</td>"."</tr></td>";
    }
} 
else {  
    echo "0 results";
}
+$conn->close();
?>
           
</table>
<br>
        <FORM action = "<?php echo $blk; ?>"  method ="POST";>
         Block : <input type ="text" name = "url" /></br>
         <br>
        <input type="submit" value="Block this site." />   
         <br>
         </FORM>
         <br>   
         <FORM action = "<?php echo $ublk; ?>"  method ="POST";>
          UnBlock : <input type ="text" name = "url" /></br>
         <br>
        <input type="submit" value="Unblock this site."/>   
         <br>
         </FORM>
         <br>
         
<a href = "refresh.php">Click here to refresh status</a>
</html>