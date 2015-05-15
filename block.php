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
$sql = "SELECT site FROM reported_sites ";
$result = $conn->query($sql);
$usn = $_POST['usn'];
$site = $_POST['url'];
$sql1 = "SELECT site FROM r_sites";
$result1 = $conn->query($sql1);
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    	if($site == $row["site"])
    	{
       echo "Site is already been reported please check the status table" ;
      }
      elseif ($result1->num_rows>0) 
        {

          while($row1 = $result1->fetch_assoc())
          {
              if($url == $row1["site"])
              {
                  echo "Site is already been reported please check the status table" ;
              }
              
            }
         } 
         else 
           $sql2 = "INSERT INTO `repute system`.`reported_sites` (`USN`, `site`) VALUES ('$usn', '$site');";      
      }
    }

if ($result1->num_rows > 0) {

    while($row = $result1->fetch_assoc()) {
      if($site == $row["site"])
      {
       echo "Site is already been reported please check the status table" ;
      }
      elseif ($result->num_rows>0) 
        {

          while($row1 = $result->fetch_assoc())
          {
              if($url == $row1["site"])
              {
                  echo "Site is already been reported please check the status table" ;
              }
              
            }
         } 
         else 
           $sql3 = "INSERT INTO `repute system`.`r_sites` (`teacherID`, `site`) VALUES ('$usn',$site');";      
      }
    }


?>
