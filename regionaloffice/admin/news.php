<?php 
session_start();
if(!isset($_SESSION['uname_admin']))
{
	header('location:index.php');
}

?>
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
  <div class="rounded">
    <nav id="mainav" class="clear" style="margin-left:7px;"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li><a href="home.php">Home</a></li>
        <li ><a class="drop" href="about.php">About Us</a>
          <ul>
            <li><a href="technicaleducation.php">Technical Education</a></li>
            <li><a href="organizationalstructure.php">Organizational Structure</a></li>
           
            <li><a href="officers.php">Officers/Staff</a></li>
            
          </ul>
        </li>
        
         <li><a href="citizencharter.php">Citizen Charter</a></li>
          <li><a href="currentnews.php">Current News</a></li>
         <li><a href="circular.php">Circulars</a></li>
          <li><a href="updates.php">Latest Updates</a></li>
         <li class="active"><a href="news.php">News</a></li>
         
      <li><a href="webform.php">Web Forms</a></li>
          <li><a  href="usefulinks.php">Useful Links</a></li>
      
        
     
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

       
     
         <h5 align="center" style="font-size:24px; color:#000;">News</h5>
        <div class="one_half" style="margin-left:-74px;"> 
        
          
          <div class="sdb_holder" style="margin-right: -178px;
    margin-left: 60px;">
      <li class='btn btn-danger btn-sm' style="float:right;margin-top: -14px;margin-right: -360px; color:#FFF;"><a href="logout.php"><span style="color:#FFF;">Logout</span></a></li>
    <span style="color:#000;" >Welcome   <?PHP echo $_SESSION['name'];?></span>
         <div class="panel panel-primary">
  <div class="panel-heading">News</div>
  <div class="panel-body" style="color:#000;">
<?php 
include('config.php');
if(isset($_POST['submit'])){
$name=$_FILES['photo']['name'];
$size=$_FILES['photo']['size'];
$type=$_FILES['photo']['type'];
//echo '$type';
$temp=$_FILES['photo']['tmp_name'];
 /*?>$caption1=$_POST['caption'];
$link=$_POST['link'];<?php */
move_uploaded_file($temp,"files/".$name);
$insert=mysqli_query($con,'insert into news(dateofposting,subject,file,type)values("'.$_POST['date'].'","'.$_POST['subject'].'","'.$name.'","'.$type.'")');

//$insert=mysqli_query($con,'insert into upload(file_name,name,type)values("'.$_POST['name1'].'","'.$name.'","'.$type.'")');
if($insert){
	echo '<script type="text/javascript">'; 
    echo 'alert("Insert successfully");'; 
	echo 'window.location.href = "news.php";'; 
    echo '</script>';
	//echo 'successfully';
//header("location:index.php");
}
else{
die(mysql_error());
}
}
?>
   
       <form action="<?php $_PHP_SELF?>" method="post" id="chng_pwd_form" name="change_pass" onSubmit="return changePass()" enctype="multipart/form-data">
       <br><br>
        <table class="table">
        <tr><td>Date of Posting: </td><td><br><br><br><input type="date" name="date" style="width:300px;margin-top: -58px;"></td><td>*</td></tr>
        
        <tr><td>Subject: </td><td><input type="text" name="subject" style="width:300px;margin-top:5px;"></td><td>*</td></tr>
        <tr>
<td >Chosse Files:</td>
<td ><label for="photo"></label><input type="file" name="photo" id="photo" style="width:300px;margin-top:10px;" /></td>
<td>*</td></tr>
       
        <tr><td> <br><br><input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success btn-sm" style="width:100px;"  /><td> <br><br><input type="reset" value="Reset" class="btn btn-danger btn-sm" style="width:100px;"></td></tr>
        </table>
        </form> 


         
 


  </div>
</div>
 
</div>
          
       
          <!-- ################################################################################################ --> 
        </div>
        <!-- / Middle Column --> 
        <!-- Right Column -->
        <div class="one_quarter sidebar"> 
          <!-- ################################################################################################ -->
          <div class="sdb_holder" style="margin-right: -312px;
    margin-left: 164px; margin-top:20px;">
         <div class="panel panel-primary">
  <div class="panel-heading">Latest Updates</div>
  <div class="panel-body" style="color:#000;">
     <marquee behavior="scroll" direction="up" onMouseOver="this.stop();" onMouseOut="this.start();" scrolldelay="210">
                     <p><a href="master-panel/files/1452232497tansha-69.pdf" target="_blank" style="color:#000;">*****Most - Urgent : Scholarship Inspections for Private Institutes  Dt.08/01/2016 <span>(08/01/2016)</span><img src="images/pdf_icon.jpg" height="16" width="16"></a></p>
  <p><a href="master-panel/files/1451559900TANSHA-3356.pdf" target="_blank" style="color:#000;">Academic Year 2015-16 online EBC Form filling..... Dt.31/12/2015 <span>(31/12/2015)</span><img src="images/pdf_icon.jpg" height="16" width="16"></a></p>
                     
         </marquee>
  </div>
</div>
 <div class="panel panel-primary">
  <div class="panel-heading">Minority Scholarships</div>
  <div class="panel-body" style="color:#000;">
      <p><a href="http://www.dtemaharashtra.gov.in/scholarships/?did=192" style="color:#000;" target="_blank">- State Govt. Scholarship</a></p>
         			  <p><a href="http://www.momascholarship.gov.in/?did=193" style="color:#000;" target="_blank">- Central Govt. Scholarship</a></p>
                     <p><a href="http://www.dtemaharashtra.gov.in/EBCScholarship/StaticPages/HomePage.aspx" style="color:#000;" target="_blank">- EBC Concession</a></p>
  </div>
</div>


<div class="panel panel-primary">
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