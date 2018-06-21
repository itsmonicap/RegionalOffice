<?php 
session_start();


?>
<!DOCTYPE html>

<html>
<head>
<title>Director of Technical Education</title>
<link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap-theme.min.css" >

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
        <a href="admin/index.php"><img src="images/banner-2.jpg"  class="img1" title="Admin Login"></a>
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
  <div class="rounded">
    <nav id="mainav" class="clear" style="margin-left:7px;"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li ><a href="index.php">Home</a></li>
        <li><a class="drop" href="about.php">About Us</a>
          <ul>
            <li><a href="technicaleducation.php">Technical Education</a></li>
            <li><a href="organizationalstructure.php">Organizational Structure</a></li>
            <li><a href="officers.php">Officers/Staff</a></li>
            <li><a href="studentsection.php">Student Section</a></li>
            <li><a href="establishmentsection.php">Establishment Section</a></li>
            <li><a href="accountsection.php">Accounts Section</a></li>
            <li><a href="contact.php">Contact Us</a></li>
         </ul>
       </li>
         <li><a href="circular.php">Circulars</a></li>
         <li><a  href="notification.php">Notifications</a>
          
        </li>
         <li><a class="drop" href="#">Institute Information</a>
          <ul>
            <li><a href="diploma.php">Diploma Institute</a></li>
            <li><a href="degree.php">Degree Institutes</a></li>
            <li><a href="postgraduation.php">Post Graduation Institutes</a></li>
            
          </ul>
        </li>
         <li><a href="rti.php">RTI</a></li>
         <li><a href="citizencharter.php">Citizen Charter</a></li>
         
         <li class="active"><a href="webform.php">Web Forms</a></li>
         <li><a href="faq.php">F.A.Q.</a></li>
       
      </ul>
      <!-- ################################################################################################ --> 
    </nav>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->

<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      
      <div class="group btmspace-30"> 
      <div class="marquee-box" style="margin-bottom:10px;margin-left: -21px;margin-top: -22px;">
        <div class="marquee-heading"><span style="font-size:15px;color:#F00;"><b>Current News</b></span>
      <div class="marquee-div" style="margin-top:-4px; height:28px; width:870px; float:right"> <marquee behavior="scroll" direction="left" onMouseOver="this.stop();" onMouseOut="this.start();" scrolldelay="210"  style="margin-right:10px;margin-top: 7px;"> <span style="margin-left:20px;"><?php 
   include('config.php');
	$query = "select * from currentnews" ;
	$result1 = mysqli_query($con,$query) or die(mysqli_error($con));

while($row=mysqli_fetch_assoc($result1))
{
	$dateofposting=$row['dateofposting'];
	$subject=$row['subject'];
	$file=$row['file'];
	$type=$row['type'];
	?>

<tr style="color:#000;"><td >
<a href="download.php?filename=<?php echo $file ;?>" style="color:#000;" >
<?php echo $row['subject']; ?>
<img alt="down-icon" src="images/pdficon.gif" align="left" width="20" height="20"/></a>
<?php echo $row['dateofposting']; ?></td>




</tr>
<br><br>
<?php }?> </span>
</marquee>
</div></div>
</div>
</div>

         <h5 align="center" style="font-size:24px; color:#000;">WebForms</h5>
        <div class="one_half" style="margin-left:-74px;"> 
        
          
          <div class="sdb_holder" style="margin-right: -178px;
    margin-left: 60px;">
    
    <span style="color:#000;" ></span>
<?php
include('config.php');
if(isset($_POST['btn_submit']))
{
	if(isset($_POST['username'])&&isset($_POST['password']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		$check="select * from institutelogin where username='$username' and cpassword='$password'";
		$qry=mysqli_query($con,$check);
			 if(mysqli_num_rows($qry)==1)
			{
				$row=mysqli_fetch_assoc($qry);
				session_start();
				$_SESSION['uname_admin']=$username;
				$_SESSION['name']=$row['name'];
				echo '<script type="text/javascript">'; 

                echo 'window.location.href = "addwebform.php";';
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
      
   
      <div class="panel panel-primary"  style="width:365px;margin-left:130px;">
  <div class="panel-heading">Login Here</div>
  <div class="panel-body">
  <br><br>
    <form role="form" style="width:330px;" method="post">
  <div class="form-group">
    
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Username" name="username">
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
         
 


 </div>


          
          <!-- ################################################################################################ --> 
        </div>
        
        <div class="one_quarter sidebar"> 
          <!-- ################################################################################################ -->
          <div class="sdb_holder" style="margin-right: -312px;
    margin-left: 5px;margin-top: 137px;">
       <div class="panel panel-primary" style="width: 391px;
    margin-left: -53px;
    margin-top: -35px;">
  <div class="panel-heading">Latest Updates</div>
  <div class="panel-body" style="color:#000;">
     <marquee behavior="scroll" direction="up" onMouseOver="this.stop();" onMouseOut="this.start();" scrolldelay="210">
                    <?php 
   include('config.php');
	$query = "select * from updatelink" ;
	$result1 = mysqli_query($con,$query) or die(mysqli_error($con));

while($row=mysqli_fetch_assoc($result1))
{
	$dateofposting=$row['dateofposting'];
	$subject=$row['subject'];
	$file=$row['file'];
	$type=$row['type'];
	?>

<tr style="color:#000;"><td >
<a href="download.php?filename=<?php echo $file ;?>" style="color:#000;" >
<?php echo $row['subject']; ?>
<img alt="down-icon" src="images/pdficon.gif" align="left" width="20" height="20"/></a>
<?php echo $row['dateofposting']; ?></td>




</tr>
<br><br>
<?php }?>
                     
                     
         </marquee>
  </div>
</div>
 <div class="panel panel-primary" style="width: 391px;
    margin-left: -53px;
    margin-top: -7px;">
  <div class="panel-heading">Minority Scholarships</div>
  <div class="panel-body" style="color:#000;">
      <p><a href="http://www.dtemaharashtra.gov.in/scholarships/?did=192" style="color:#000;" target="_blank">- State Govt. Scholarship</a></p>
         			  <p><a href="http://www.momascholarship.gov.in/?did=193" style="color:#000;" target="_blank">- Central Govt. Scholarship</a></p>
                     <p><a href="http://www.dtemaharashtra.gov.in/EBCScholarship/StaticPages/HomePage.aspx" style="color:#000;" target="_blank">- EBC Concession</a></p>
  </div>
</div>


<div class="panel panel-primary" style="width: 391px;
    margin-left: -53px;
    margin-top: -8px;">
  <div class="panel-heading">Useful Links</div>
  <div class="panel-body" style="color:#000;">
      <p><a href="http://www.aicte.ernet.in/" style="color:#000;" target="_blank">- All India Council of Technical Education, Delhi</a></p>
         			  <p><a href="http://www.maharashtra.gov.in/" style="color:#000;" target="_blank">- Government of Maharashtra </a></p>
                     <p><a href="http://www.dte.org.in/" style="color:#000;" target="_blank">- Directorate of Technical Education, M.S. Mumbai</a></p>
                     <p><a href="http://www.msbte.com/" style="color:#000;" target="_blank">- Maharashtra State Board of Technical Education, Mumbai</a></p>
                     <p><a href="http://www.nmu.ac.in/" style="color:#000;" target="_blank">- North Maharashtra University, Jalgaon</a></p>
                     <p><a href="http://www.unipune.ernet.in/" style="color:#000;" target="_blank">- Pune University, Pune </a></p>
                     <p><a href="http://www.oopswatches.com/" style="color:#000;" target="_blank">- Replica Breitling Watches</a></p>
  </div>
</div>

</div>
           
    </div>
          <!-- ################################################################################################ --> 
  </div>
        
</div>
      <!-- ################################################################################################ --> 
      <!-- ################################################################################################ -->
<div class="wrapper row2" style="margin-top: 60px;">
  <div class="rounded">
    <nav id="mainav" class="clear" style="margin-left:7px;"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li ><a href="index.php">Home</a></li>
        <li><a class="drop" href="about.php">About Us</a>
          <ul>
            <li><a href="technicaleducation.php">Technical Education</a></li>
            <li><a href="organizationalstructure.php">Organizational Structure</a></li>
            <li><a href="officers.php">Officers/Staff</a></li>
            <li><a href="studentsection.php">Student Section</a></li>
            <li><a href="establishmentsection.php">Establishment Section</a></li>
            <li><a href="accountsection.php">Accounts Section</a></li>
            <li><a href="contact.php">Contact Us</a></li>
         </ul>
       </li>
         <li><a href="circular.php">Circulars</a></li>
         <li><a  href="notification.php">Notifications</a>
          
        </li>
         <li><a class="drop" href="#">Institute Information</a>
          <ul>
            <li><a href="diploma.php">Diploma Institute</a></li>
            <li><a href="degree.php">Degree Institutes</a></li>
            <li><a href="postgraduation.php">Post Graduation Institutes</a></li>
            
          </ul>
        </li>
         <li><a href="rti.php">RTI</a></li>
         <li><a href="citizencharter.php">Citizen Charter</a></li>
         
         <li class="active"><a href="webform.php">Web Forms</a></li>
         <li><a href="faq.php">F.A.Q.</a></li>
       
      </ul>
      <!-- ################################################################################################ --> 
    </nav>
  </div>
</div>         
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