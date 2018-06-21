<!DOCTYPE html>

<html>
<head>
<title>Director of Technical Education</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap-3.3.5-dist/js/bootstrap.min.js" ></script>
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-16x16.png">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/style.css" rel="stylesheet" type="text/css">
</head>
<body id="top">
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row0">
<div class="logo"><a href="#"><img src="images/dte-logo.jpg" /></a></div>
          <div class="text-logo-div"><h2 style="margin-top:-11px;">Joint Director of Technical Education </h2>
        <h3 style="margin-bottom:10px;">Regional Office Nashik (M.S.)</h3>
		<h3 style="font-size:21px;">सहसंचालक तंत्रशिक्षण विभागीय कार्यालय, नाशिक</h3>
         <img src="images/banner-2.jpg"  class="img1">
       </div>
        <div style="clear:both"></div>

  <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
  
    <!-- ################################################################################################ --> 
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    
   
    <!-- ################################################################################################ --> 
  </header>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row2">
  </div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->

<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row3">
 
</div>
</div>
<?php
include('config.php');
if(isset($_POST['btn_submit']))
{
	if(isset($_POST['email'])&&isset($_POST['password']))
	{
		$email=$_POST['email'];
		$password=$_POST['password'];
		
		$check="select * from register where email='$email' and cpassword='$password'";
		$qry=mysqli_query($con,$check);
			 if(mysqli_num_rows($qry)==1)
			{
				$row=mysqli_fetch_assoc($qry);
				session_start();
				$_SESSION['uname_admin']=$email;
				$_SESSION['name']=$row['name'];
				echo '<script type="text/javascript">'; 

                echo 'window.location.href = "home.php";';
                echo '</script>'; 
			}
			else
			{
				echo '<script type="text/javascript">'; 
echo 'alert("Wrong Username Or Password");'; 
echo 'window.location.href = "index.php";';
echo '</script>';
			}
	}
}

?>
<div class="panel panel-primary"  style="width:365px;margin-left:505px;">
  <div class="panel-heading">Login Here</div>
  <div class="panel-body">
  <br><br>
    <form role="form" style="width:330px;" method="post">
  <div class="form-group">
    
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
  </div>
  <br><br>
  <div class="form-group">
    
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <br>
   <input type="submit" class="btn btn-success btn-sm" value="Login" name="btn_submit" style="width:100px; margin-left:60px;">
   <input type="reset" class="btn btn-danger btn-sm" value="Cancel" style="width:100px;">
   <br>
     
</form>
  </div>
</div>

       
     
                 
        
      <!-- ################################################################################################ --> 
      <!-- ################################################################################################ -->
     
<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    
    <br><br><br><br><br><br><br><br><br>
     <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved </p>
    <p class="fl_right">Maintain By: IT Section, RO Nashik. </p>
    <!-- ################################################################################################ --> 
  </div>
</div>
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>
</body>
</html>