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
         <li><a class="drop" href="#">Notifications</a>
          <ul>
            <li><a href="#">PG</a></li>
            <li><a href="#">Degree</a></li>
            <li><a href="#">Diploma</a></li>
            <li><a href="#">All</a></li>
          </ul>
        </li>
         <li class="active"><a class="drop" href="#">Institute Information</a>
          <ul>
            <li><a href="diploma.php">Diploma Institute</a></li>
            <li><a href="degree.php">Degree Institutes</a></li>
            <li><a href="postgraduation.php">Post Graduation Institutes</a></li>
            
          </ul>
        </li>
         <li><a href="rti.php">RTI</a></li>
         <li><a href="citizencharter.php">Citizen Charter</a></li>
         <li><a href="usefulinks.php">Useful Links</a> </li>
          <li><a href="addinstitute.php">Register Institute</a></li>
          <li><a href="webform.php">Web Forms</a></li>
         <li><a href="#">F.A.Q.</a></li>
      
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


         <h5 align="center" style="font-size:24px; color:#000;">Diploma Institutes</h5>
        <div class="one_half" style="margin-left:-74px;"> 
        
          
          <div class="sdb_holder" style="margin-right: -178px;
    margin-left: 60px;">
         <div class="panel panel-primary">
  <div class="panel-heading">Diploma Institutes</div>
  <div class="panel-body" style="color:#000;">
   
         
        <table  border="0" align="center" cellpadding="0" cellspacing="0" class="zebra" >
  <tbody><tr>
						<th class="Header" align="center" valign="middle" scope="col">Sr. No.</th><th class="Header" align="center" valign="middle" scope="col">Institute Code</th><th class="Header" align="center" valign="middle" scope="col">Permanent AICTE Application No</th><th class="Header" align="center" valign="middle" scope="col">Institute Name</th><th class="Header" align="center" valign="middle" scope="col">Intake</th>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">1.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href=
     "http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5006">5006</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-465626741</td><td class="Item" align="left" valign="middle" style="width:60%;">Government Polytechnic, Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;">880</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">2.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5007">5007</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-461259591</td><td class="Item" align="left" valign="middle" style="width:60%;">Government Polytechnic, Dhule</td><td class="Item" align="center" valign="middle" style="width:8%;">300</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">3.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5008">5008</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-462258093</td><td class="Item" align="left" valign="middle" style="width:60%;">Government Polytechnic, Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;">630</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">4.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5009">5009</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-493083881</td><td class="Item" align="left" valign="middle" style="width:60%;">Government Polytechnic, Nandurbar</td><td class="Item" align="center" valign="middle" style="width:8%;">240</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">5.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5010">5010</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-453230981</td><td class="Item" align="left" valign="middle" style="width:60%;">Government Polytechnic, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;">780</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">6.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5012">5012</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-452187491</td><td class="Item" align="left" valign="middle" style="width:60%;">Pravara Rural Education Society's Pravara Rural College Of Pharmacy, Pravaranagar</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">7.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5013">5013</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-459150391</td><td class="Item" align="left" valign="middle" style="width:60%;">Mahatma Gandhi Taluka Shikshan Mandal's Sharadchandrika S. Patil Inst of Technology, Chopda</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">8.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5014">5014</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-453155911</td><td class="Item" align="left" valign="middle" style="width:60%;">ANJUMAN IMDADUT TULBA'S  INSTITUTE OF PHARMACY ,MALEGAON(NASHIK)</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">9.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5105">5105</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-6510076</td><td class="Item" align="left" valign="middle" style="width:60%;">G.H. Raisoni Institute of Engineering and Management, Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;">120</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">10.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5106">5106</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-10038704</td><td class="Item" align="left" valign="middle" style="width:60%;">K. C. E. Societys College of Engineering and Information Technology, Jalgaon </td><td class="Item" align="center" valign="middle" style="width:8%;">120</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">11.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5112">5112</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-3960853</td><td class="Item" align="left" valign="middle" style="width:60%;">Padmashree Dr. Vithalrao Vikhe Patil Foundation's Institute of Business Management &amp; Rural Development, Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;">120</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">12.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5171">5171</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-6138871</td><td class="Item" align="left" valign="middle" style="width:60%;">Godavari Foundation's Godavari College Of Engineering,  Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;">120</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">13.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5176">5176</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-5943171</td><td class="Item" align="left" valign="middle" style="width:60%;">G. H. Raisoni College of Engineering and Management, Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;">120</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">14.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5179">5179</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-7718584</td><td class="Item" align="left" valign="middle" style="width:60%;">Vishwabharati Academy's College of Engineering, Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;">240</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">15.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5203">5203</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-6249341</td><td class="Item" align="left" valign="middle" style="width:60%;">K.B.H.S.S. Trust's Institute of Pharmacy, Malegaon Camp, Malegaon, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;">45</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">16.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5209">5209</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-6783501</td><td class="Item" align="left" valign="middle" style="width:60%;">Kai Yashodabai Dagadu Saraf Charitable Trust's College of Pharmacy, Sakegaon</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">17.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5220">5220</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-421292021</td><td class="Item" align="left" valign="middle" style="width:60%;">Pravara Rural Education Society's Padmashri Dr. Vittalrao Vikhe Patil Institute of Technology and Engineering Polytechnic ,Pravaranagar</td><td class="Item" align="center" valign="middle" style="width:8%;">690</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">18.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5221">5221</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-445064011</td><td class="Item" align="left" valign="middle" style="width:60%;">Shri Chhatrapati Shivaji Shikshan Sanstha's Indira Gandhi Poly. Belwandi (su) ,Tal-Shrigonda  Dist- Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;">240</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">19.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5222">5222</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-405661531</td><td class="Item" align="left" valign="middle" style="width:60%;">Sanjivani Rural Education Society's K.B.P. Polytechnic, Kopargaon Dist Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;">660</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">20.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5223">5223</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-460448591</td><td class="Item" align="left" valign="middle" style="width:60%;">Mgts Mandal's Sharadchandrika Suresh Patil Institute Of Technology(Polytechnic), Chopda</td><td class="Item" align="center" valign="middle" style="width:8%;">570</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">21.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5224">5224</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-429487061</td><td class="Item" align="left" valign="middle" style="width:60%;">Sanjay Education Society's Polytechnic, Wadibhokar, Dhule</td><td class="Item" align="center" valign="middle" style="width:8%;">300</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">22.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5225">5225</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-478403761</td><td class="Item" align="left" valign="middle" style="width:60%;">Shree Sant Muktabai Sansthan's Shri Sant Muktabai Institute of Technology, Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;">190</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">23.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5226">5226</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-451476651</td><td class="Item" align="left" valign="middle" style="width:60%;">K.K Wagh Education Society's K. K. Wagh Polytechnic, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;">810</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">24.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5227">5227</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-462905091</td><td class="Item" align="left" valign="middle" style="width:60%;">Nagaon Education Society's Gangamai Polytechnic, Nagaon</td><td class="Item" align="center" valign="middle" style="width:8%;">340</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">25.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5228">5228</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-424082301</td><td class="Item" align="left" valign="middle" style="width:60%;">Shri Shivaji Viddhya Prasarak Sanstha's Bapusaheb Shivajirao Deore Polytechnic, Dhule</td><td class="Item" align="center" valign="middle" style="width:8%;">640</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">26.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5229">5229</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-427627533</td><td class="Item" align="left" valign="middle" style="width:60%;">Technical &amp; Medical Education Society's J. T. Mahajan Polytechnic, Faizpur</td><td class="Item" align="center" valign="middle" style="width:8%;">690</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">27.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5230">5230</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-424721011</td><td class="Item" align="left" valign="middle" style="width:60%;">Shri Neminath Jain Bramhacharyasharam's Shri H. H. J. B. Polytechnic,Chandwad </td><td class="Item" align="center" valign="middle" style="width:8%;">480</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">28.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5231">5231</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-452599631</td><td class="Item" align="left" valign="middle" style="width:60%;">Poojya Sane Guruji Vidhya Prasarak Mandal's  G. M. Choudhari Polytechnic, Shahada</td><td class="Item" align="center" valign="middle" style="width:8%;">360</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">29.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5232">5232</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-461211011</td><td class="Item" align="left" valign="middle" style="width:60%;">Amrutvahini Sheti &amp; Shikshan Sanstha's Amrutvahini Polytechnic, Amrutnagar</td><td class="Item" align="center" valign="middle" style="width:8%;">780</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">30.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5235">5235</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-441945611</td><td class="Item" align="left" valign="middle" style="width:60%;">Late Bhausaheb Hiray Smarnika Samiti Trust Sanchalit Polytechnic, Malegaon, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;">450</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">31.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5236">5236</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-426127551</td><td class="Item" align="left" valign="middle" style="width:60%;">K.K. Wagh Education Society's K. K. Wagh Women's Polytechnic, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;">240</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">32.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5237">5237</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-439824195</td><td class="Item" align="left" valign="middle" style="width:60%;">Shri Krishna Education &amp; Cultural Mandal, Shri Gulabrao Deokar Polytechnic, Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;">420</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">33.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5238">5238</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-420978581</td><td class="Item" align="left" valign="middle" style="width:60%;">Shree Mahavir Education Society's Institute Of Technology, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;">720</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">34.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5239">5239</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-448291871</td><td class="Item" align="left" valign="middle" style="width:60%;">Jamiya Islamiya Ishatul Olu's Jamiya Polytechnic, Akkalkuwa</td><td class="Item" align="center" valign="middle" style="width:8%;">420</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">35.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5240">5240</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-462563721</td><td class="Item" align="left" valign="middle" style="width:60%;">Guru Gobind Singh Foundation's Guru Gobind Singh Polytechnic, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;">420</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">36.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5241">5241</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-425567771</td><td class="Item" align="left" valign="middle" style="width:60%;">Jagdamba Edu Soc., Santosh N. Darade Polytechnic, Yeola, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;">570</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">37.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5243">5243</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-449295711</td><td class="Item" align="left" valign="middle" style="width:60%;">Nashik Gramin Shikshan Prasarak Mandals Brahma Valley Polytechnic, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;">450</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">38.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5244">5244</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-435827191</td><td class="Item" align="left" valign="middle" style="width:60%;">MET's Institute of Technology Polytechnic, Bhujbal Knowledge City, Adgaon Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;">600</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">39.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5245">5245</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-457063561</td><td class="Item" align="left" valign="middle" style="width:60%;">Sangamner Medical Foundation &amp; Research Institutes,Wamanrao Ethape Polytechnic, Velhale, Sangamner</td><td class="Item" align="center" valign="middle" style="width:8%;">510</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">40.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5246">5246</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-459778831</td><td class="Item" align="left" valign="middle" style="width:60%;">Kai. Vanjibaba Gramin Vikas Mandal, Shantidevi Chavhan Institute of Engineering &amp; Technology, Chalisgaon</td><td class="Item" align="center" valign="middle" style="width:8%;">360</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">41.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5247">5247</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-405925043</td><td class="Item" align="left" valign="middle" style="width:60%;">NDMVPS Samaj's  Rajarshee Shahu Maharaj Polytechnic, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;">300</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">42.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5248">5248</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-453861811</td><td class="Item" align="left" valign="middle" style="width:60%;">Sulochana Behelekar Samajik &amp; Bahu Uddeshiya Shikshan Sanstha,Dnyaneshwar Polytechnic, Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;">360</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">43.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5249">5249</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-477920101</td><td class="Item" align="left" valign="middle" style="width:60%;">Trimurti Shikshan Prasarak Mandal, Trimurti Institute Of Technology, Paladhi Bk, Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;">420</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">44.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5250">5250</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-415281253</td><td class="Item" align="left" valign="middle" style="width:60%;">G.H.R. Education Foundation, G.H. Raisoni Polytechnic, Saokhede Bk, Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;">360</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">45.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5251">5251</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-456333111</td><td class="Item" align="left" valign="middle" style="width:60%;">Hon. Shri. Babanrao Pachpute Vichardhara Trust's Parikrama Polytechnic,Kashti</td><td class="Item" align="center" valign="middle" style="width:8%;">600</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">46.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5252">5252</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-428165701</td><td class="Item" align="left" valign="middle" style="width:60%;">The People Education Society's, Diploma College Of Enggineering &amp; Technology,Jamkhed</td><td class="Item" align="center" valign="middle" style="width:8%;">180</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">47.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5253">5253</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-496291671</td><td class="Item" align="left" valign="middle" style="width:60%;">Kisan Dnyanoday Mandal Gudhe's Dr. Uttamrao Mahajan Institute Of Engineering &amp; Technology,Chalisgaon, Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;">300</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">48.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5254">5254</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-484796881</td><td class="Item" align="left" valign="middle" style="width:60%;">Om Sai Shikshan Prasarak Sanstha's Aamdar Kashinathji Mengal Polytechnic, Igatpuri, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;">300</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">49.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5255">5255</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-445019155</td><td class="Item" align="left" valign="middle" style="width:60%;">Sanjivani Pratishthan's Institute Of Technology,Kurund</td><td class="Item" align="center" valign="middle" style="width:8%;">300</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">50.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5256">5256</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-421103811</td><td class="Item" align="left" valign="middle" style="width:60%;">Matoshri Education Soceity, Matoshri Asarabai Polytechnic,Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;">600</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">51.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5257">5257</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-425998321</td><td class="Item" align="left" valign="middle" style="width:60%;">K.K.Wagh Education Soceity's, K.K.Wagh Polytechnic,Chandori, Tal: Niphad</td><td class="Item" align="center" valign="middle" style="width:8%;">360</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">52.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5258">5258</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-450955961</td><td class="Item" align="left" valign="middle" style="width:60%;">Sandip Foundation's Sandip Polytechnic, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;">660</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">53.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5259">5259</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-476125311</td><td class="Item" align="left" valign="middle" style="width:60%;">SHri Dattakrupa Shaikshanik &amp; Krishi  Gram Vikas Pratisthan, Shri Siddhivinayak Polytechnic, Karjat, Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;">300</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">54.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5260">5260</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-430193881</td><td class="Item" align="left" valign="middle" style="width:60%;">Jumma Masjid Charitable Trust's Polytechnic,Wadala Road, Wadala, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;">300</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">55.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5261">5261</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-451658073</td><td class="Item" align="left" valign="middle" style="width:60%;">Tulajabhavani Seva Pratisthan, Soniya Gandhi Polytechnic, Shrigonda</td><td class="Item" align="center" valign="middle" style="width:8%;">300</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">56.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5262">5262</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-455472381</td><td class="Item" align="left" valign="middle" style="width:60%;">Jijamata Foundation, Sau. Nirmalatai P.Patil Women's Polytechnic College, Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;">180</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">57.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5263">5263</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-410954021</td><td class="Item" align="left" valign="middle" style="width:60%;">Matoshri Education Soceity, Matoshri Institute Of Technology, Dhanore, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;">540</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">58.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5264">5264</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-409749101</td><td class="Item" align="left" valign="middle" style="width:60%;">Mahatma Gandhi Vidyamandir's Institute Of Industrial &amp; Pharmaceutical Technology, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">59.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5265">5265</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-416767661</td><td class="Item" align="left" valign="middle" style="width:60%;">Dhule Charitable Society's Institute of Pharmacy, Dhule</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">60.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5266">5266</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-435572731</td><td class="Item" align="left" valign="middle" style="width:60%;">Tapi Valley Education Society's  Institute of Pharmacy,Faizpur</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">61.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5267">5267</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-422426431</td><td class="Item" align="left" valign="middle" style="width:60%;">Kisan Vidya Prasarak Sanstha's,  Maharani Ahilyabai Holkar College of Pharmacy,Boradi</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">62.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5268">5268</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-485831871</td><td class="Item" align="left" valign="middle" style="width:60%;">Shree Neminath Jain Brahmacharyashram Jain Gurukul's Shri.Deepchand Fakirchand Lodha Pharmacy Institute, Chandwad</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">63.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5269">5269</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-445510941</td><td class="Item" align="left" valign="middle" style="width:60%;">Jijamata Education Society's College of Pharmacy, Nandurbar</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">64.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5270">5270</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-462873341</td><td class="Item" align="left" valign="middle" style="width:60%;">Shri.Tilok Jain Dnyan Prasarak Mandal's Anand Colleges of Pharmacy, Pathardi, Ahmednagar </td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">65.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5271">5271</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-476228951</td><td class="Item" align="left" valign="middle" style="width:60%;">Shri.Sant Muktabai  Santha's Institute  of Technology,Jalgoan</td><td class="Item" align="center" valign="middle" style="width:8%;">45</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">66.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5272">5272</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-451877301</td><td class="Item" align="left" valign="middle" style="width:60%;">Nandurbar Taluka Vidhayak Sanstha's Institute of Pharmacy,Nandurbar</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">67.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5273">5273</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-465642583</td><td class="Item" align="left" valign="middle" style="width:60%;">Late Shree Yashwantrao Chavan MMRDF Yashwantrao Chavan College of Pharmacy, Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">68.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5274">5274</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-409904461</td><td class="Item" align="left" valign="middle" style="width:60%;">Nashik District Maratha Vidya Prasarak Samaj's Institute Of Pharmaceutical Sciences, Adgaon, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">69.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5275">5275</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-460873021</td><td class="Item" align="left" valign="middle" style="width:60%;">Kisan Dnanodaya Mandal's Institute Of Pharmacy, Chalisgaon, Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">70.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5276">5276</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-453114111</td><td class="Item" align="left" valign="middle" style="width:60%;">Khandesh Education Society's College of Pharmacy,Amalner,Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">71.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5277">5277</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-421846681</td><td class="Item" align="left" valign="middle" style="width:60%;">Mula Education Soceity,Mula Rural Institute of Pharmacy,Sonai, Tal. Newasa Dist. Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">72.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5278">5278</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-424097111</td><td class="Item" align="left" valign="middle" style="width:60%;">The Shirpur Education Society's R.C.Patel Institute Of Pharmacy, Shirpur</td><td class="Item" align="center" valign="middle" style="width:8%;">120</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">73.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5279">5279</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-458720471</td><td class="Item" align="left" valign="middle" style="width:60%;">Jagdamba Education Society's S.N.D. Diploma College of Pharmacy,Yeola</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">74.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5280">5280</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-451685341</td><td class="Item" align="left" valign="middle" style="width:60%;">Sanjivani Rural Education Society's  Sanjivani Institute Of Pharmacy And Research, Kopargaon</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">75.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5281">5281</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-414154333</td><td class="Item" align="left" valign="middle" style="width:60%;">Shree Mahavir Education Society's Institute Of Technology(Pharmacy), Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">76.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5283">5283</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-441760501</td><td class="Item" align="left" valign="middle" style="width:60%;">Jijamata Vidyapeeth's Shree. P.E.(Tatya) Patil Institute of Pharmacy, Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">77.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5284">5284</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-475478011</td><td class="Item" align="left" valign="middle" style="width:60%;">Sau Mathurabai Bhausaheb Thorat Sevabhavi Trust 'S Sau. Mathurabai Bhausaheb Thorat Institute Of D. Pharmacy,</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">78.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5285">5285</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-425769433</td><td class="Item" align="left" valign="middle" style="width:60%;">Kakasaheb Mhaske Memorial Medical Foundation's  Kakasaheb Mhaske College Of Pharmacy, Nagapur, Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">79.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5286">5286</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-448372581</td><td class="Item" align="left" valign="middle" style="width:60%;">Swami Vivekanand Sanstha's Insttitute Of Pharmacy, Malegaon</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">80.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5287">5287</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-458411721</td><td class="Item" align="left" valign="middle" style="width:60%;">Amrutvahini Sheti &amp; Shikshan Vikas Sanstha`S Amrutwahini Institute Of Pharmacy, Sangamner, Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">81.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5288">5288</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-450078591</td><td class="Item" align="left" valign="middle" style="width:60%;">Adivasi Deomogara Edu. Society's K.D.Gavit D.Pharmacy College, Pathrai, Tal.Dist.-Nandurbar</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">82.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5289">5289</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-433749961</td><td class="Item" align="left" valign="middle" style="width:60%;">Shree Gurudatta shikshan sanstha's Pharmacy College, Kalwan, Dist. Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">83.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5290">5290</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-496075191</td><td class="Item" align="left" valign="middle" style="width:60%;">Jalgaon Dealer Medicine Soceity's Institute of Pharmacy, Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">84.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5292">5292</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-437661611</td><td class="Item" align="left" valign="middle" style="width:60%;">Matoshri Education Society's MABD Diploma College Of Pharmacy,Bhabulgaon, Yeola, Dist. Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;">120</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">85.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5293">5293</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-421193161</td><td class="Item" align="left" valign="middle" style="width:60%;">Nagaon Education Soc., Institute of Pharmacy, Nagaon, Dist. Dhule</td><td class="Item" align="center" valign="middle" style="width:8%;">120</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">86.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5294">5294</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-441496761</td><td class="Item" align="left" valign="middle" style="width:60%;">Godavari Shikshan Mandal's Asian Institute of Pharmacy, Nashik.</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">87.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5295">5295</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-425658501</td><td class="Item" align="left" valign="middle" style="width:60%;">Sanjay Edu.Soc.'s S.E.S. Institute of Pharmacy, Balapur(Phagane), Dhule</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">88.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5296">5296</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-458718281</td><td class="Item" align="left" valign="middle" style="width:60%;">Navmaharahstra Shikshan Mandal's Abasaheb kakade Pharmacy College, Bodhegaon,  Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">89.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5297">5297</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-455317781</td><td class="Item" align="left" valign="middle" style="width:60%;">Sangamner Medical foundation &amp; Research Institute, Wamanrao Ithape Pharmacy College, Sangamner, Dist. Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">90.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5298">5298</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-439959791</td><td class="Item" align="left" valign="middle" style="width:60%;">Sane Guruji Vidya Prasarak's Institute of Pharmacy, Shahada, Dist. Nandurbar</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">91.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5299">5299</a></td><td class="Item" align="center" valign="middle" style="width:14%;">&nbsp;</td><td class="Item" align="left" valign="middle" style="width:60%;">Vidya Vikas Mandals Diploma College of Pharmacy, Sakri</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">92.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5300">5300</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-444243531</td><td class="Item" align="left" valign="middle" style="width:60%;">Shraddha Rural Medical Social Welfare &amp; Education's Sahakar Maharshi Kisanrao Varal Patil College Of Pharmacy, Nighoj, Tal.Parner, Dist. Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">93.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5301">5301</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-413846681</td><td class="Item" align="left" valign="middle" style="width:60%;">Shri.Krishna Educational &amp; Cultural Mandal,Shri.Gulabrao Deokar Institute of Pharmacy &amp; Research Centre, Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">94.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5302">5302</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-409749621</td><td class="Item" align="left" valign="middle" style="width:60%;">Mahatma Gandhi Vidya Mandir Institute Of  Hotel Management And Catering Technology,Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">95.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5345">5345</a></td><td class="Item" align="center" valign="middle" style="width:14%;">&nbsp;</td><td class="Item" align="left" valign="middle" style="width:60%;">Laxmi Pratishthan's, Dhule Institute Of Technology, Dhule</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">96.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5346">5346</a></td><td class="Item" align="center" valign="middle" style="width:14%;">&nbsp;</td><td class="Item" align="left" valign="middle" style="width:60%;">Sahyadri College of Fire Engineering &amp; Safety Management, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;">120</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">97.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5349">5349</a></td><td class="Item" align="center" valign="middle" style="width:14%;">&nbsp;</td><td class="Item" align="left" valign="middle" style="width:60%;">Adarsh Shikshan Prasarak Mandal's College Of Management &amp; College Of Information Technology, Dhule.</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">98.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5354">5354</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-430212481</td><td class="Item" align="left" valign="middle" style="width:60%;">Sakeshwar Gramin Vikas Seva Sanstha, Sau.Sundarbai Manik Adsul Polytechnic, Chas, Ahmedngar 
</td><td class="Item" align="center" valign="middle" style="width:8%;">420</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">99.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5355">5355</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-484980531</td><td class="Item" align="left" valign="middle" style="width:60%;">Maharashtra Shetkari Seva Mandal, Tryambakrao Shejawal Institute Of Techology  (Polytehnic), Manmad,Nandgaon,Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;">180</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">100.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5356">5356</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-489030201</td><td class="Item" align="left" valign="middle" style="width:60%;">Shree Samarth Academy’s, Shree Samarth Polytechnic, Mhasane Village Mhasane , Tal.Parner, Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;">300</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">101.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5357">5357</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-425988481</td><td class="Item" align="left" valign="middle" style="width:60%;">Maharashtra Shikshan Vikas Mandal's Loknete Gopalraoji Gulwe,  Polytehnic,Vilholi,Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;">360</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">102.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5358">5358</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-476653971</td><td class="Item" align="left" valign="middle" style="width:60%;">Shri Dattakrupa Shaikshanik &amp; Krushi Gramvikas Pratisthn's Saikrupa Polytechnic, Ghargaon,  Tal Shrigonda, Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;">300</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">103.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5359">5359</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-475814661</td><td class="Item" align="left" valign="middle" style="width:60%;">Shri Chhatrapati sambhaji Gramvikas Pratisthan,s Shri Chhatrapati sambhaji Polytechnic,Yelpane Tal.Shrigonda, Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;">300</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">104.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5360">5360</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-497473291</td><td class="Item" align="left" valign="middle" style="width:60%;">Savitabai Phule Shikshan Prasarak Mandal's Rajendra Jotiram Phule Polytechnic, Mirajgaon Tal Karjat. Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;">300</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">105.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5361">5361</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-449922591</td><td class="Item" align="left" valign="middle" style="width:60%;">Raghvendra Shikshan Prasarak Mandal's Late Junasing Mangtu College of Engg. (Diploma), Valthan, Tal Chalisgaon,Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;">300</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">106.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5362">5362</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-426033711</td><td class="Item" align="left" valign="middle" style="width:60%;">Shiva Trust's Ajitdada Pawar College of Poltechnic,Vadala Mahadeo,  Tal Shrirampur, Ahmednagar </td><td class="Item" align="center" valign="middle" style="width:8%;">420</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">107.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5363">5363</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-413788101</td><td class="Item" align="left" valign="middle" style="width:60%;">Amruta Vaishnavi Education &amp; Welfare Trust's Shatabdi Institute of Technology, Agastkhind, Tal Sinner  Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;">480</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">108.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5364">5364</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-439862831</td><td class="Item" align="left" valign="middle" style="width:60%;">Maharashtra Homiopathic Foundation College of Polytechnic Gujalwadi, Tal Sangamner,  Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;">300</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">109.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5365">5365</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-404124841</td><td class="Item" align="left" valign="middle" style="width:60%;">Vardhaman Education &amp; Welfare Society,Ahinsa Polytechnic, Post. Dondaicha,  Dhule</td><td class="Item" align="center" valign="middle" style="width:8%;">360</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">110.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5366">5366</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-484758993</td><td class="Item" align="left" valign="middle" style="width:60%;">Potdar Foundation Taloda,Potdar Polytechnic, Patne, Malegaon, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;">300</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">111.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5367">5367</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-444260281</td><td class="Item" align="left" valign="middle" style="width:60%;">K.V.N.Naik  S. P. Sanstha’s, Polytechnic,Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;">360</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">112.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5368">5368</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-474113981</td><td class="Item" align="left" valign="middle" style="width:60%;">Seva Shikshan Prasarak Mandal, Dr. N. J. Paulbudhe Institute of Technology, Narayandoho Tal Nagar, Ahmednagar
</td><td class="Item" align="center" valign="middle" style="width:8%;">300</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">113.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5369">5369</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-431327121</td><td class="Item" align="left" valign="middle" style="width:60%;">Nashik Institute of Technology, Late Annasaheb Patil Polytechnic , Dindori Road Cannol road ,MERI ,Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;">600</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">114.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5370">5370</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-474299561</td><td class="Item" align="left" valign="middle" style="width:60%;">Kedareshwar Gramin Vikas Pratishthan, Kai. Sau. Sunitatai Eknathrao Dhakane  Polytehnic College,Rakshi,Ahmedngar </td><td class="Item" align="center" valign="middle" style="width:8%;">360</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">115.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5371">5371</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-445499041</td><td class="Item" align="left" valign="middle" style="width:60%;">Karmaveer R.S.Wagh Education &amp; Health Institute, Kadwa Polytechnic, Rajaram Nagar, Tal-Dindori, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;">300</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">116.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5372">5372</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-403200961</td><td class="Item" align="left" valign="middle" style="width:60%;">Godavari Foundation,Dr.Varsha Patil Institute of Technology, Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;">300</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">117.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5373">5373</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-457940921</td><td class="Item" align="left" valign="middle" style="width:60%;">Sarswati Vidya Prasarak Mandal, Aabasaheb Shivajirao Sitaram Patil Institute of Polytechnic, Chichpura, Tal- Dharangaon,Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;">300</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">118.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5374">5374</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-444257561</td><td class="Item" align="left" valign="middle" style="width:60%;">Mahatma Phule Samajik &amp; Shaikshanik Vikas Mandal, Samrat Ashok Polytechnic,Dhule Road, Chalisgaon ,Dist Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;">300</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">119.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5375">5375</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-510643281</td><td class="Item" align="left" valign="middle" style="width:60%;">Nath Nangebaba Malti Purpose Mandal's, Polytechnic, Parola, Dist-Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;">300</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">120.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5376">5376</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-473977601</td><td class="Item" align="left" valign="middle" style="width:60%;">Raj Laxmi Foundation, Sahkar Maharshi Rajaram Bapu Patil Polytechnic Institute, Madagaon ,Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;">420</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">121.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5379">5379</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-452946243</td><td class="Item" align="left" valign="middle" style="width:60%;">Jamia Isalamia Isha-atul Uloom's Jamia College of Pharmacy, Akkalkuwa.</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">122.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5381">5381</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-484631901</td><td class="Item" align="left" valign="middle" style="width:60%;">Shri. Jaykumar Rawal Institute of Technology, Dondaicha.</td><td class="Item" align="center" valign="middle" style="width:8%;">120</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">123.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5385">5385</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-481386261</td><td class="Item" align="left" valign="middle" style="width:60%;">Akole Taluka Education Society,s Technical Campus, Akole, Ahmednagar.</td><td class="Item" align="center" valign="middle" style="width:8%;">300</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">124.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5387">5387</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-464922281</td><td class="Item" align="left" valign="middle" style="width:60%;">Sureshchandra Dhariwal Polytechnic, Palaskhede(bk), Tal. Jamner.</td><td class="Item" align="center" valign="middle" style="width:8%;">420</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">125.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5388">5388</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-478394691</td><td class="Item" align="left" valign="middle" style="width:60%;">Vidya Education Society's Vidya Institute of Technology, Dhanore.</td><td class="Item" align="center" valign="middle" style="width:8%;">300</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">126.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5389">5389</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-451824831</td><td class="Item" align="left" valign="middle" style="width:60%;">Sandip Foundation's Sandip Institute of Polytechnic, Nashik.</td><td class="Item" align="center" valign="middle" style="width:8%;">420</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">127.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5394">5394</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-437657381</td><td class="Item" align="left" valign="middle" style="width:60%;">Sahjivan Shikshan Prasarak Mandal's Vasantrao More Polytechnic, Tehu Tq.Parola, Jalgaon.</td><td class="Item" align="center" valign="middle" style="width:8%;">360</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">128.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5395">5395</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-478378551</td><td class="Item" align="left" valign="middle" style="width:60%;">Ashok Institute of Engineering &amp; Technology(Polytechnic), Shrirampur.</td><td class="Item" align="center" valign="middle" style="width:8%;">360</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">129.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5396">5396</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-456316141</td><td class="Item" align="left" valign="middle" style="width:60%;">College of Engineering and Technology ,North Maharashtra Knowledge City ,Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;">180</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">130.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5402">5402</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-505713481</td><td class="Item" align="left" valign="middle" style="width:60%;">Shree. Kapildhara Polytechnic, Igatpuri.</td><td class="Item" align="center" valign="middle" style="width:8%;">360</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">131.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5403">5403</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-745374491</td><td class="Item" align="left" valign="middle" style="width:60%;">Samarth Institute of Pharmacy, Kavathe</td><td class="Item" align="center" valign="middle" style="width:8%;">60</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">132.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5404">5404</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-816340371</td><td class="Item" align="left" valign="middle" style="width:60%;">Gurukul Education Society's Institute of Engineering &amp; Technology, Nandgaon</td><td class="Item" align="center" valign="middle" style="width:8%;">300</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">133.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5408">5408</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-791148811</td><td class="Item" align="left" valign="middle" style="width:60%;">Vidya Niketan College of Engineering, Bota Sangamner</td><td class="Item" align="center" valign="middle" style="width:8%;">120</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">134.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5411">5411</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-756920924</td><td class="Item" align="left" valign="middle" style="width:60%;">Maulana Mukhtar Ahmad Nadvi Technical Campus, Malegaon.</td><td class="Item" align="center" valign="middle" style="width:8%;">120</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">135.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5413">5413</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-1505902131</td><td class="Item" align="left" valign="middle" style="width:60%;">Netaji Subhashchandra Bose Edu Trust,Netaji Polytechnic.,Dhule</td><td class="Item" align="center" valign="middle" style="width:8%;">300</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">136.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5414">5414</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-1461615081</td><td class="Item" align="left" valign="middle" style="width:60%;">Nikam Institute of Technology(Polytechnic),Dhule</td><td class="Item" align="center" valign="middle" style="width:8%;">300</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">137.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5415">5415</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-1482808181</td><td class="Item" align="left" valign="middle" style="width:60%;">Adarsh Polytechnic,Dhule</td><td class="Item" align="center" valign="middle" style="width:8%;">240</td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;">138.</td><td class="Item" align="center" valign="middle" style="width:10%;"><a href="http://www.dtemaharashtra.gov.in/approvedinstitues/StaticPages/frmInstituteSummary.aspx?InstituteCode=5417">5417</a></td><td class="Item" align="center" valign="middle" style="width:14%;">1-1391096971</td><td class="Item" align="left" valign="middle" style="width:60%;">Karmaveer Shankarao Kale Education Society's Gautam Polytechnic Institute,Kpoargaon</td><td class="Item" align="center" valign="middle" style="width:8%;">300</td>
					</tr><tr>
						<td class="Footer" align="center" valign="middle">&nbsp;</td><td class="Footer" align="center" valign="middle">&nbsp;</td><td class="Footer" align="center" valign="middle">&nbsp;</td><td class="Footer" align="right" valign="middle">Total</td><td class="Footer" align="center" valign="middle">37330</td>
					</tr>
				</tbody>
</table>


         
 


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
    margin-left: -30px;
    margin-top: 103px;
    width: 349px;">
         <div class="panel panel-primary">
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

<tr style="color:#000;"><td>
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
         <li><a class="drop" href="#">Notifications</a>
          <ul>
            <li><a href="#">PG</a></li>
            <li><a href="#">Degree</a></li>
            <li><a href="#">Diploma</a></li>
            <li><a href="#">All</a></li>
          </ul>
        </li>
         <li class="active"><a class="drop" href="#">Institute Information</a>
          <ul>
            <li><a href="diploma.php">Diploma Institute</a></li>
            <li><a href="degree.php">Degree Institutes</a></li>
            <li><a href="postgraduation.php">Post Graduation Institutes</a></li>
            
          </ul>
        </li>
         <li><a href="rti.php">RTI</a></li>
         <li><a href="citizencharter.php">Citizen Charter</a></li>
         <li><a href="usefulinks.php">Useful Links</a> </li>
          <li><a href="webform.php">Web Forms</a></li>
         <li><a href="#">F.A.Q.</a></li>
  
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