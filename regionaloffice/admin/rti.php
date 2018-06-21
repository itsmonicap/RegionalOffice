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
            <li><a href="pages/portfolio.php">Organizational Structure</a></li>
            <li><a href="#">Institutional Structure</a></li>
            <li><a href="officers.php">Officers/Staff</a></li>
            
          </ul>
        </li>
         <li class="active"><a href="rti.php">RTI</a></li>
         <li><a href="citizencharter.php">Citizen Charter</a></li>
         <li><a href="circular.php">Circulars</a></li>
         <li><a href="news.php">News</a></li>
         <li><a class="drop" href="#">Institute Information</a>
          <ul>
            <li><a href="diploma.php">Diploma Institute</a></li>
            <li><a href="pages/portfolio.html">Degree Institutes</a></li>
            <li><a href="pages/full-width.html">Post Graduation Institutes</a></li>
          </ul>
        </li>
         <li><a class="drop" href="#">Sections</a>
          <ul>
            <li><a href="pages/gallery.html">Student Section</a></li>
            <li><a href="pages/portfolio.html">Establishment Section</a></li>
            <li><a href="pages/full-width.html">Accounts Section</a></li>
          </ul>
        </li>
          <li><a class="drop" href="#">Useful Links</a>
          <ul>
            <li><a href="pages/gallery.html">All India Council of Technical Education, Delhi</a></li>
            <li><a href="pages/portfolio.html">Government of Maharashtra</a></li>
            <li><a href="pages/full-width.html">Directorate of Technical Education, M.S. Mumbai</a></li>
              <li><a href="pages/full-width.html">Maharashtra State Board of Technical Education, Mumbai</a></li>
                <li><a href="pages/full-width.html">North Maharashtra University, Jalgaon</a></li>
                <li><a href="pages/full-width.html">Pune University, Pune</a></li>
                <li><a href="pages/full-width.html">Replica Breitling Watches</a></li>
          </ul>
        </li>
      
        <li><a href="index.html">Contact Us</a></li>
      
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


       
      
         <h5 align="center" style="font-size:24px; color:#000;">The Right To Information Act 2005</h5>
        <div class="one_half" style="margin-left:-74px;"> 
        
          
          <div class="sdb_holder" style="margin-right: -178px;
    margin-left: 86px;">
         <div class="panel panel-primary">
  <div class="panel-heading">Right of Information Cell established at Technical Education, Regional Office, Nashik.</div>
  <div class="panel-body" style="color:#000;">
     <div id="content-wrapper" style="margin-top:0px;"><h1>PIO's Details</h1>
         
          <table width="70%" border="0" align="center" cellpadding="0" cellspacing="0" class="zebra">
          <thead>
  <tr>
    <th width="16%">Designation</th>
    <th width="35%">Name/ Designation</th>
    <th width="24%">Contact No.</th>
    </tr>
   </thead>
  

<tr>
    <td><strong>Appealing Officer</strong></td>
    <td><strong>Shri.Dhyandeo Pundalikrao Nathe (I/c Joint Director)</strong></td>
    <td><strong>(0253) 2460114 (D ), 2461479 Ext.118</strong></td>
    </tr>
 

<tr>
    <td><strong>Appealing Officer</strong></td>
    <td><strong>Shri.Anil Vasantrao Pawar (Assistant Director(Technical))</strong></td>
    <td><strong>(0253) 2455302 (D ), 2461479 Ext.116</strong></td>
    </tr>
 


<tr>
    <td><strong>Information Officer</strong></td>
    <td><strong>Shri.Harichandra Deoram chavan (Administrative Officer)</strong></td>
    <td><strong>(0253) 2461479 Ext.102</strong></td>
    </tr>
 

 <tr>
    <td><strong>Information Officer</strong></td>
    <td><strong>Shri.Vinayak Lahanu Kedare (Office Suprentendent)</strong></td>
    <td><strong>(0253) 2461479 Ext.104</strong></td>
    </tr>

</table>

<ul class="cList pointLi">
					<li><a href="RIT-CELL-RONSK.pdf" target="blank"> List of all Institute's Information Officers, Asst. Information Officers &amp; Appealing Officers of Govt. &amp; Govt. Aided institutes under Regional Office, Nashik </a></li>
                    </ul>
                    
                    <h3>Documents under 4(1)(b) :- R.O.Nashik</h3>
                    <ul class="cList pointLi">
                    <li><a href="rit-ro-rduties.pdf" target="blank"> The particulars of its organisation, functions &amp; duties.</a></li>
                    <li><a href="RIT-Work-Distribution.pdf" target="blank"> The powers &amp; duties of its officers &amp; employees.</a></li>
                    <li><a href="rit-orga.pdf" target="blank"> The procedure followed in the decision making process, including channels of supervision &amp; accountability.</a></li>
                    <li><a href="md4.pdf" target="blank">  The norms set by it for the discharge of its functions.</a></li>
                    <li><a href="md5.pdf" target="blank"> The rules, regulations,instructions, manuals &amp; records held by it or under its control for used by its employees for discharging its functions. </a></li>
                    <li><a href="md6.pdf" target="blank"> A Statement of the categories of documents that are held by it or under its control.  </a></li>
                    <li>The particulars of any arangement that exists for consultation with, or representation by the members of the public in relation to the formulation of its policy or implementation therof.</li>
                    <li>A statementof the boards, councils, committees and other bodies consisting of two or more persons constituted as its part or for the purpose of its advise, and as to where meetings of those boards, councils, committees and other bodies are open to the public, or the minuts of such meetings are accessible for public.</li>
                    <li><a href="RIT-telephone.pdf" target="blank">  A directory of its officers &amp; employees.</a></li>
                    <li><a href="md10.pdf" target="blank">The monthly remunarion received by each its officers &amp; employees, including the system of compensation as provided in its regulations.</a></li>
                    <li><a href="md11.pdf" target="blank"> The budget allocated to each of its agency, indicating the particulars of all pans, proposed expenditure and reports on disbursements made.</a></li>
                    <li><a href="md12.pdf" target="blank"> The manner of execution of subsidy programmes, including the amounts allocated and the details of beneficiaries of such programmes. </a></li>
                    <li>Particulars of concessions, permits or authorizations granted by it.</li>
                    <li><a href="md14.pdf" target="blank"> Details in respect of the information, available to or held by it, reduced in an electronic form. </a></li>
                    <li>The particulars of facilities available to citizens for obtaining information, including the working hours of a library or reading room, if maintained for public use.</li>
                    <li><a href="RIT-pio.pdf" target="blank"> The names, designations and other particulars of the Public Information Officers.</a></li>
                    <li>Such other information as may be prescribed.</li>
                    </ul>


         
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
    margin-left: 5px;margin-top: 137px;">
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