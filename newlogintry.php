  <?php
  $start=1;
  $username=$_GET['username'];
  $password=$_GET['password'];

  $con=mysqli_connect("localhost","root","","repute system");
      if(mysqli_connect_errno()){
          echo "ERROR ".mysqli_connect_error();
      } 
          //$result = mysqli_query($con,"SELECT password FROM accounts WHERE username=".$username);
      $result = mysqli_query($con,"SELECT password,username,type FROM accounts ");
      
      $new = mysqli_query($con, "SELECT name,USN,repute,acc_type,u_name FROM pupil ");
      $new1= mysqli_query($con,"SELECT name,id,repute,acc_type,u_name FROM teacher");    
       
          

          
        if(mysqli_num_rows($new)>0)
          {
           while($row = mysqli_fetch_assoc($new)) {
                  
                  $pupilaccount = $row['acc_type'];       
           

                  if(mysqli_num_rows($new1)>0)
                   {
                         while($row = mysqli_fetch_assoc($new1)) {
                             $teacheraccount = $row['acc_type'];
                            

                              if(mysqli_num_rows($result)>0)
                               {
                                    while($row = mysqli_fetch_assoc($result)) {
          
         
                                          $pass=$row['password'];
                                          $use=$row['username'];
                                          $type=$row['type'];

                                          if( $type==$teacheraccount and $password == $pass and $username==$use){
                                                   header("location: http://localhost/index.php?param=$teacheraccount&param1=$username");  
                                            exit();
                                        }
                                        else if($type==$pupilaccount and $password == $pass and $username==$use)
                                        {
                                              header("location: http://localhost/index.php?param==$pupilaccount&param1=$username");   
                                              exit();   
                                        }
                                    }
                              }         
               }
          }
        }              
          
          
            
          }
        




  ?>