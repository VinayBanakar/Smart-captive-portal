<!Doctype html>
<html>
<?php
$c=$_GET['param'];// users name
$d=$_GET['param1'];// usesrs id
$e=$_GET['param2'];//  users repute


// Create connection
$con=mysqli_connect("localhost","root","","repute system");
    if(mysqli_connect_errno()){
        echo "ERROR ".mysqli_connect_error();
} 

$qwe = mysqli_query($con,"SELECT * FROM sites");
$sql = mysqli_query($con,"SELECT * FROM v_sites");
if (mysqli_num_rows($sql) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($sql)) 
    {
        
        if($d == $row['teacher_id'])
        {
            while ($raw = mysqli_fetch_assoc($qwe))
            {       
                 $rt = $row['votefor'];
                 $qt = $raw['status'];
                    if($rt == $qt)
                    {
                        $er = mysqli_query($con,"UPDATE teacher set repute = '55'  where name == '$c' ");
                        echo "updated +";
                    }
                    else 
                    {
                        $er = mysqli_query($con,"UPDATE teacher set repute = repute - '5'  where name == '$c' ");
                        echo "updated -";
                    }
            }
            
      
       }
    }
}
 
?>
</html>