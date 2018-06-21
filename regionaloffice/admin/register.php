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
<?php
include('config.php');
if(isset($_POST['btn_submit']))
{
	extract($_POST);
	$query=mysqli_query($con,"insert into register(email,password,cpassword,name,birthdate,gender) values ('$email','$password','$cpassword','$name','$birthdate','$gender')");
	 if($query)
	 {
		 echo '<script type="text/javascript">'; 
         echo 'alert("Register successful");'; 
         echo 'window.location.href = "index.php";';
         echo '</script>';
	 }
	 else
	 {
		 echo '<script type="text/javascript">'; 
         echo 'alert("Error ....");'; 
         echo 'window.location.href = "register.php";';
         echo '</script>';
	 }
}
?>
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      
      <div class="group btmspace-30"> 
       <div class="panel panel-primary">
  <div class="panel-heading"><span style="font-size:24px;color:#FFF;">Registration Form</span></div>
  <div class="panel-body" style="color:#000;"><br><br><br>
     <form class="form-horizontal" role="form" style="width:500px;" method="post">
  <div class="form-group">
    
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" style="margin-left:244px;">
    </div>
  </div>
  <br><br>
  <div class="form-group">
   
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password" style="margin-left:244px;">
    </div>
  </div>
 <br>
 <br>
 <div class="form-group">
   
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword31" name="cpassword" placeholder="Re-enter Password" style="margin-left:244px;">
    </div>
  </div>
 <br>
 <br>
 <div class="form-group">
   
    <div class="col-sm-10">
      <input type="text" class="form-control" id="input" name="name" placeholder="Enter Your Name" style="margin-left:244px;">
    </div>
  </div>
 <br>
 <br>
 <div class="form-group">
    <div class="col-sm-10">
      <input type="date" class="form-control" id="birthdate" name="birthdate" placeholder="Enter Your Birthdate" style="margin-left:244px;">
    </div>
  </div>
 
 
 <select class="form-control" name="gender" style="margin-left:244px;width:410px;margin-top: -8px;">
  <option value="">Select Gender</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  
</select>
   
 <br>
 <br><br>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" class="btn btn-success btn-sm" value="Register" style="width:100px;margin-left:208px;" name="btn_submit">
      <input type="reset" class="btn btn-danger btn-sm" value="Cancel" style="width:100px;">
    </div>
  </div>
</form>
  </div>
</div>
      </div>
</div>
</div>

       
     
        
        <div class="one_half" style="margin-left:-74px;"> 
        
          
         
 
</div>
          
          <!-- ################################################################################################ --> 
        </div>
        <!-- / Middle Column --> 
        <!-- Right Column -->
        <div class="one_quarter sidebar"> 
          <!-- ################################################################################################ -->
          <div class="sdb_holder" style="margin-right: -312px;
    margin-left: 164px;">
       

</div>
           
          </div>
          <!-- ################################################################################################ --> 
        </div>
        <!-- / Right Column --> 
      </div>
      <!-- ################################################################################################ --> 
      <!-- ################################################################################################ -->
     
<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
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