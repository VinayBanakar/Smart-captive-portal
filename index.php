<!DOCTYPE html>
<html lang="en">
<?php 
 $ty=$_GET['param'];
$name=$_GET['param1'];
$ind=$_GET['param2'];
$rep1=$_GET['param3'];
if($ty=='Teacher')
{
   $web = "<a href='teacherrepute.php?a=$name&b=$ind&j=$ty'>My repute score</a>"; 
   $rep = "<a href='teacherreported.php?a=$name'>My reported sites</a>";
   $blk = "newtryblockteacher.php?a=$name&b=$ind";
   $unblk = "newtryunblockteacher.php?a=$name&b=$ind";
   $stat = "<a href = 'statustable.php?a=$name&b=$ind&c=$rep1&m=$ty'> Status table</a>";
   
}
else
{
    $web = "<a href='pupilrepute.php?a=$name&b=$ind&j=$ty'>My repute score</a>"; 
    $rep = "<a href='pupilreported.php?a=$name'>My reported sites</a>";
    $blk = "newblocktrypupil.php?a=$name&b=$ind";
    $unblk = "newtryunblockpupil.php?a=$name&b=$ind";
    $stat = "<a href = 'statustable.php?a=$name&b=$ind&c=$rep1&m=$ty'> Status table</a>";
}
// $type=$_GET['param2'];
$courseA='A';
$courseB='B';
?>
<head>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Smart crowd sourcing internet portal</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">about</a>
                    </li>
                    <li>
                        <a href="#">feedback</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
      
            <div class="col-md-3">
                <p class="lead"><br><?php echo $name; ?></p>
                <div class="list-group">
                    <a href="repute.php" > <?php echo $web; ?></a>
                    <br><a href="#" ><?php echo $ty; ?></a>
                    <br><a href="reporttable.html"><?php echo $rep; ?></a>
                    <br>
                    <a href="statustable.php" ><?php echo $stat; ?></a>
                </div>
            </div>

            <div class="col-md-9">
   
                <div class="row carousel-holder">

    


<form action = "load.php" method="POST" target = "_blank";>
<br>    
 URL : <input type ="text" name = "url" /></br>
 <br>
 <input type="submit" value="load" />

 </form>

              
</br>                    

            <FORM action = "<?php echo $blk; ?>"  method ="POST";>
         Block : <input type ="text" name = "url" /></br>
         <br>
        <input type="submit" value="block" />   
         <br>
         </FORM>
         <br>   
         <FORM action = "<?php echo $unblk; ?>"  method ="POST";>
         UnBlock : <input type ="text" name = "url" /></br>
         <br>
        <input type="submit" value="Unblock" />   
         <br>
         </FORM>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->
 <br><br><br><br><br><br><br><br>
    <div class="container">

        <hr>


        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p><h2>Smart captive portal</h2></p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
