<?php
$c=$_GET['a'];
$d=$_GET['b'];
$site = $_POST['url'];

// Create connection
$con=mysqli_connect("localhost","root","","repute system");
    if(mysqli_connect_errno()){
        echo "ERROR ".mysqli_connect_error();
} 
$sql = "SELECT URL FROM `blocked_sites`";
$bnk = mysqli_query($con,$sql);

    while($row = mysqli_fetch_assoc($bnk))
    {   
         if($site == $row['URL'])
         {
            echo "The site is already been bloked please check the status table";
            exit();
         }
    }



//$sql = mysqli_query($con,"SELECT name,site FROM reported_sites");
//if (mysqli_num_rows($sql) > 0) {
    // output data of each row
   // while($row = mysqli_fetch_assoc($sql)) 
    //{
        
        $sol = mysqli_query($con,"INSERT INTO reported_sites (USN, site, name,status) VALUES ('$d','$site', '$c','block')");
        $new = mysqli_query($con," INSERT INTO sites (URL,status,upvotes,downvotes,id) VALUES ('$site','block','0','0','$d')");
        echo "It is reported to be blocked";

      // }
    //}

 //else {
  //  echo "0 results";
//}


?>
