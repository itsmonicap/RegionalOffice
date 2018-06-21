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
        <li class="active"><a class="drop" href="about.php">About Us</a>
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
         
         
         <li><a href="webform.php">Web Forms</a></li>
          <li><a href="addinstitute.php">Register Institute</a></li>
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

     
         <h5 align="center" style="font-size:24px; color:#000;">Officers Staff</h5>
        <div class="one_half" style="margin-left:-74px;"> 
        
          
          <div class="sdb_holder" style="margin-right: -178px;
    margin-left: 86px;">
      <li class='btn btn-danger btn-sm' style="float:right;margin-top: -14px;margin-right: -360px; color:#FFF;"><a href="logout.php"><span style="color:#FFF;">Logout</span></a></li>
    <span style="color:#000;" >Welcome   <?PHP echo $_SESSION['name'];?></span>
         <div class="panel panel-primary">
  <div class="panel-heading">Officers Staff</div>
  <div class="panel-body" style="color:#000;">
     <div id="content-wrapper" style="margin-top:0px;"><h1>Staff at Regional Office Nashik & their telephone Nos. </h1>
         
        <table width="76%" border="1" align="center" cellpadding="1" cellspacing="1" class="zebra">
          <thead>
  <tr>
    <th width="1.8%" align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbspSr.No</th>
    <th width="14%" align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbspName of Employee</th>
    <th width="14%"align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbspDesignation</th>
    <th width="8%"align="left" style="background-color:#FFF;color:#000;" >&nbsp;&nbsp;&nbsp;&nbspPhone </th>
    <th width="2%" align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbspExt. </th>
    </tr>
   </thead>
 
<tr>

    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbsp<font face="Times New Roman">1</font></th>
   <th align="left" style="background-color:#FFF;color:#000;"><strong>&nbsp;&nbsp;&nbsp;&nbspShri. Dhyandeo P. Nathe </strong></th>
    <th align="left" style="background-color:#FFF;color:#000;"><strong>&nbsp;&nbsp;&nbspI/c Joint Director</strong></th>
    <th align="Left" style="background-color:#FFF;color:#000;"><strong><font face="Times New Roman">0253-2460114(P)</font></strong></hd>
    <th-></th>
    </tr>
 
<tr>

    <th style="background-color:#FFF;color:#000;"> </th>
   <th style="background-color:#FFF;color:#000;"><strong> </strong></th>
    <th style="background-color:#FFF;color:#000;"><strong></strong></th>
    <th align="Left" style="background-color:#FFF;color:#000;"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<font face="Times New Roman">-2461479</font></strong></a></th>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp<font face="Times New Roman">118</font></th>
    </tr>
  

<tr>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbsp<font face="Times New Roman">2</font></th>
  <th align="left" style="background-color:#FFF;color:#000;"><strong>&nbsp;&nbsp;&nbsp;&nbspShri. Anil V. Pawar</strong></th>
    <th align="left" style="background-color:#FFF;color:#000;"><strong>&nbsp;&nbsp;&nbspAsstt. Director</strong></th>
    <th align="left" style="background-color:#FFF;color:#000;"><strong><font face="Times New Roman">0253-2455302(P)</font> </strong></a></th>
  
<tr>

    <th style="background-color:#FFF;color:#000;"> </th>
   <th style="background-color:#FFF;color:#000;"><strong> </strong></th>
    <th style="background-color:#FFF;color:#000;"><strong></strong></th>
    <th align="left" style="background-color:#FFF;color:#000;"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<font face="Times New Roman">- 2461479</font></strong></a></th>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp<font face="Times New Roman">116</font></th>
    </tr>
  

<tr>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbsp<font face="Times New Roman">3</font></th>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbspShri. Harichandra D. Chavan</th>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbspAdministrative Office</th>
 <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<font face="Times New Roman">-2461479</font></a></th>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp<font face="Times New Roman">102</font></th>
    </tr>
 
<tr>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbsp<font face="Times New Roman">4</th>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbsp-------</th>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbspAssistant Director (Non. Tech)</th>
 <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<font face="Times New Roman">-2461479</font></a></th>
    <th align="Center" style="background-color:#FFF;color:#000;">-</th>
    </tr>
 
<tr>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbsp<font face="Times New Roman">5</font></th>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbspShri. Bharat J. Dhangar</th>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbspSteno</th>
       <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<font face="Times New Roman">-2461479</font></a></th>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp<font face="Times New Roman">101</font></th>
    </tr>
  
<tr>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbsp<font face="Times New Roman">6</font></th>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbspSmt. Madhavi U. Khare</th>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbspProgrammer</th>
  <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<font face="Times New Roman">-2461479</font></a></th>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp<font face="Times New Roman">117</font></th>
    </tr>
  
<tr>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbsp<font face="Times New Roman">7</font></th>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbsp-------</th>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbspOffice Suprenetendent</th>
     <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<font face="Times New Roman">-2461479</font></a></th>
    <td align="Center" style="background-color:#FFF;color:#000;">-</td>
    </tr>
 
<tr>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbsp<font face="Times New Roman">8</font></th>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbspShri. Vinayak L. Kedare</th>
  <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbspOffice Suprenetendent (A/c Sec.)</th>
 <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<font face="Times New Roman">-2461479</font></a></th>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp<font face="Times New Roman">104</font></th>
    </tr>
 
<tr>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbsp<font face="Times New Roman">9</font></th>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbspShri. Hiraman K. Thakare</th>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbspHead Clerk (Estt/Stud.Sec.)</th>
  <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<font face="Times New Roman">-2461479</font></a></th>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp<font face="Times New Roman">109</font></th>
    </tr>
 
<tr>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbsp<font face="Times New Roman">10</font></th>
   <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbspShri. Kevalsing G. Rajput</th>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbspSr. Clerk (Cashior)</th>
 <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<font face="Times New Roman">-2461479</font></a></th>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp<font face="Times New Roman">103</font></th>
    </tr>
 
<tr>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbsp<font face="Times New Roman">11</font></th>
   <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbspSmt. Surekha B. Shinde</th>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbspJr. Clerk (Account Sec.)</th>
 <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<font face="Times New Roman">-2461479</font></a></th>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp<font face="Times New Roman">107</font></th>
    </tr>
 
<tr>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbsp<font face="Times New Roman">12</font></th>
   <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbspSmt. Savita D. Godse</th>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbspSr. Clerk (Estt. Sec.)</th>
  <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<font face="Times New Roman">-2461479</font></a></th>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp<font face="Times New Roman">108</font></th>
    </tr>
 
<tr>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbsp<font face="Times New Roman">13</font></th>
   <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbspShri. Kailas K. Dhatrak</th>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbspJr. Clerk (Student Sec.)</th>
   <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<font face="Times New Roman">-2461479</font></a></th>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp<font face="Times New Roman">111</font></th>
    </tr>
 
<tr>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbsp<font face="Times New Roman">14</font></th>
   <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbspShri. Anil R. Bhavsar</th>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbspJr. Clerk (Student Sec.)</th>
  <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<font face="Times New Roman">-2461479</font></a></th>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp<font face="Times New Roman">110</font></th>
    </tr>
 
<tr>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbsp<font face="Times New Roman">15</font></th>
   <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbspShri. Sachin A. Godse</th>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbspJr. Clerk (Inward / outward)</th>
 
 <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<font face="Times New Roman">-2461479</font></a></th>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp<font face="Times New Roman">113</font></th>
  </tr>

<tr>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbsp<font face="Times New Roman">16</font></th>
   <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbspShri. Sahebrao N.Gangurde</th>
    <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbspDriver</th>
 
 <th align="left" style="background-color:#FFF;color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<font face="Times New Roman">-2461479</font></a></th>
    <th align="Center" style="background-color:#FFF;color:#000;">-</th>
  </tr>


</table>         

         
  </div>


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
    margin-left: 218px;
    margin-top: 55px;">
       <div class="panel panel-primary" style="width: 391px;
    margin-left: -53px;
    margin-top: -35px;">
  <div class="panel-heading">Latest Updates</div>
  <div class="panel-body" style="color:#000;">
                     <marquee behavior="scroll" direction="up" onMouseOver="this.stop();" onMouseOut="this.start();" scrolldelay="210">
                      <?php 
   include('config.php');
	$query1 = "SELECT * FROM updatelink ";
	$result = mysqli_query($con,$query1);
?>
         <?php
while($row1=mysqli_fetch_array($result))
{
	$dateofposting=$row1['dateofposting'];
	$subject=$row1['subject'];
	$file=$row1['file'];
	$type=$row1['type'];
	?>

<tr style="color:#000;"><td >
<a href="download.php?filename=<?php echo $file ;?>" style="color:#000;"  >
<?php echo $row1['subject']; ?>
<img alt="down-icon" src="images/pdficon.gif" align="left" width="20" height="20"/></a>
<?php echo $row1['dateofposting']; ?></td>

<?php /*?><td><a href="admin/files/<?php echo $row1['file'] ?>" target="_blank" style="color:#FFF" >view file</a></td><?php */?>


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