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
         <li class="active"><a class="drop" href="#">Institute Information</a>
          <ul>
            <li><a href="diploma.php">Diploma Institute</a></li>
            <li><a href="degree.php">Degree Institutes</a></li>
            <li><a href="postgraduation.php">Post Graduation Institutes</a></li>
            
          </ul>
        </li>
         <li><a href="rti.php">RTI</a></li>
         <li><a href="citizencharter.php">Citizen Charter</a></li>
         
          <li><a href="webform.php">Web Forms</a></li>
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
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">1.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5006</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-465626741</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Government Polytechnic, Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">880</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">2.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5007</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-461259591</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Government Polytechnic, Dhule</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">300</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">3.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5008</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-462258093</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Government Polytechnic, Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">630</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">4.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5009</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-493083881</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Government Polytechnic, Nandurbar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">240</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">5.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5010</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-453230981</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Government Polytechnic, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">780</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">6.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5012</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-452187491</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Pravara Rural Education Society's Pravara Rural College Of Pharmacy, Pravaranagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">7.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5013</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-459150391</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Mahatma Gandhi Taluka Shikshan Mandal's Sharadchandrika S. Patil Inst of Technology, Chopda</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">8.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5014</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-453155911</font></td><td class="Item" align="left" valign="middle" style="width:60%;">ANJUMAN IMDADUT TULBA'S  INSTITUTE OF PHARMACY ,MALEGAON(NASHIK)</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">9.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5105</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-6510076</font></td><td class="Item" align="left" valign="middle" style="width:60%;">G.H. Raisoni Institute of Engineering and Management, Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">120</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">10.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5106</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-10038704</font></td><td class="Item" align="left" valign="middle" style="width:60%;">K. C. E. Societys College of Engineering and Information Technology, Jalgaon </td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">120</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">11.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5112</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-3960853</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Padmashree Dr. Vithalrao Vikhe Patil Foundation's Institute of Business Management &amp; Rural Development, Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">120</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">12.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5171</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-6138871</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Godavari Foundation's Godavari College Of Engineering,  Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">120</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">13.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5176</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-5943171</font></td><td class="Item" align="left" valign="middle" style="width:60%;">G. H. Raisoni College of Engineering and Management, Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">120</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">14.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5179</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-7718584</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Vishwabharati Academy's College of Engineering, Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">240</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">15.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5203</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-6249341</font></td><td class="Item" align="left" valign="middle" style="width:60%;">K.B.H.S.S. Trust's Institute of Pharmacy, Malegaon Camp, Malegaon, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">45</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">16.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5209</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-6783501</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Kai Yashodabai Dagadu Saraf Charitable Trust's College of Pharmacy, Sakegaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">17</font>.</td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5220</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-421292021</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Pravara Rural Education Society's Padmashri Dr. Vittalrao Vikhe Patil Institute of Technology and Engineering Polytechnic ,Pravaranagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">690</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">18.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5221</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-445064011</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Shri Chhatrapati Shivaji Shikshan Sanstha's Indira Gandhi Poly. Belwandi (su) ,Tal-Shrigonda  Dist- Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">240</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">19.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5222</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-405661531</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Sanjivani Rural Education Society's K.B.P. Polytechnic, Kopargaon Dist Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">660</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">20.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5223</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-460448591</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Mgts Mandal's Sharadchandrika Suresh Patil Institute Of Technology(Polytechnic), Chopda</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">570</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">21.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5224</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-429487061</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Sanjay Education Society's Polytechnic, Wadibhokar, Dhule</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">300</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">22.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5225</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-478403761</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Shree Sant Muktabai Sansthan's Shri Sant Muktabai Institute of Technology, Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">190</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">23.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5226</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-451476651</font></td><td class="Item" align="left" valign="middle" style="width:60%;">K.K Wagh Education Society's K. K. Wagh Polytechnic, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">810</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">24.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5227</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-462905091</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Nagaon Education Society's Gangamai Polytechnic, Nagaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">340</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">25.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5228</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-424082301</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Shri Shivaji Viddhya Prasarak Sanstha's Bapusaheb Shivajirao Deore Polytechnic, Dhule</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">640</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">26.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5229</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-427627533</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Technical &amp; Medical Education Society's J. T. Mahajan Polytechnic, Faizpur</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">690</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">27.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5230</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-424721011</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Shri Neminath Jain Bramhacharyasharam's Shri H. H. J. B. Polytechnic,Chandwad </td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">480</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">28.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5231</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-452599631</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Poojya Sane Guruji Vidhya Prasarak Mandal's  G. M. Choudhari Polytechnic, Shahada</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">360</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">29.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5232</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-461211011</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Amrutvahini Sheti &amp; Shikshan Sanstha's Amrutvahini Polytechnic, Amrutnagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">780</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">30.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5235</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-441945611</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Late Bhausaheb Hiray Smarnika Samiti Trust Sanchalit Polytechnic, Malegaon, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">450</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">31.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5236</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-426127551</font></td><td class="Item" align="left" valign="middle" style="width:60%;">K.K. Wagh Education Society's K. K. Wagh Women's Polytechnic, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">240</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">32.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5237</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-439824195</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Shri Krishna Education &amp; Cultural Mandal, Shri Gulabrao Deokar Polytechnic, Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">420</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">33.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5238</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-420978581</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Shree Mahavir Education Society's Institute Of Technology, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">720</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">34.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5239</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-448291871</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Jamiya Islamiya Ishatul Olu's Jamiya Polytechnic, Akkalkuwa</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">420</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">35.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5240</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-462563721</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Guru Gobind Singh Foundation's Guru Gobind Singh Polytechnic, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">420</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">36.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5241</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-425567771</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Jagdamba Edu Soc., Santosh N. Darade Polytechnic, Yeola, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">570</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">37.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5243</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-449295711</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Nashik Gramin Shikshan Prasarak Mandals Brahma Valley Polytechnic, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">450</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">38.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5244</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-435827191</font></td><td class="Item" align="left" valign="middle" style="width:60%;">MET's Institute of Technology Polytechnic, Bhujbal Knowledge City, Adgaon Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">600</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">39.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5245</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-457063561</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Sangamner Medical Foundation &amp; Research Institutes,Wamanrao Ethape Polytechnic, Velhale, Sangamner</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">510</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">40.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5246</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-459778831</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Kai. Vanjibaba Gramin Vikas Mandal, Shantidevi Chavhan Institute of Engineering &amp; Technology, Chalisgaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">360</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">41.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5247</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-405925043</font></td><td class="Item" align="left" valign="middle" style="width:60%;">NDMVPS Samaj's  Rajarshee Shahu Maharaj Polytechnic, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">300</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">42.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5248</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-453861811</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Sulochana Behelekar Samajik &amp; Bahu Uddeshiya Shikshan Sanstha,Dnyaneshwar Polytechnic, Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">360</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">43.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5249</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-477920101</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Trimurti Shikshan Prasarak Mandal, Trimurti Institute Of Technology, Paladhi Bk, Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">420</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">44.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5250</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-415281253</font></td><td class="Item" align="left" valign="middle" style="width:60%;">G.H.R. Education Foundation, G.H. Raisoni Polytechnic, Saokhede Bk, Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">360</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">45.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5251</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-456333111</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Hon. Shri. Babanrao Pachpute Vichardhara Trust's Parikrama Polytechnic,Kashti</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">600</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">46.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5252</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-428165701</font></td><td class="Item" align="left" valign="middle" style="width:60%;">The People Education Society's, Diploma College Of Enggineering &amp; Technology,Jamkhed</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">180</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">47.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5253</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-496291671</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Kisan Dnyanoday Mandal Gudhe's Dr. Uttamrao Mahajan Institute Of Engineering &amp; Technology,Chalisgaon, Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">300</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">48.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5254</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-484796881</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Om Sai Shikshan Prasarak Sanstha's Aamdar Kashinathji Mengal Polytechnic, Igatpuri, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">300</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">49.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5255</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-445019155</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Sanjivani Pratishthan's Institute Of Technology,Kurund</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">300</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">50.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5256</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-421103811</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Matoshri Education Soceity, Matoshri Asarabai Polytechnic,Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">600</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">51.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5257</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-425998321</font></td><td class="Item" align="left" valign="middle" style="width:60%;">K.K.Wagh Education Soceity's, K.K.Wagh Polytechnic,Chandori, Tal: Niphad</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">360</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">52.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5258</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-450955961</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Sandip Foundation's Sandip Polytechnic, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">660</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">53.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5259</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-476125311</font></td><td class="Item" align="left" valign="middle" style="width:60%;">SHri Dattakrupa Shaikshanik &amp; Krishi  Gram Vikas Pratisthan, Shri Siddhivinayak Polytechnic, Karjat, Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">300</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">54.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5260</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-430193881</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Jumma Masjid Charitable Trust's Polytechnic,Wadala Road, Wadala, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">300</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">55.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5261</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-451658073</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Tulajabhavani Seva Pratisthan, Soniya Gandhi Polytechnic, Shrigonda</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">300</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">56.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5262</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-455472381</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Jijamata Foundation, Sau. Nirmalatai P.Patil Women's Polytechnic College, Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">180</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">57.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5263</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-410954021</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Matoshri Education Soceity, Matoshri Institute Of Technology, Dhanore, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">540</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">58.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5264</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-409749101</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Mahatma Gandhi Vidyamandir's Institute Of Industrial &amp; Pharmaceutical Technology, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">59.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5265</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-416767661</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Dhule Charitable Society's Institute of Pharmacy, Dhule</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5266</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-435572731</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Tapi Valley Education Society's  Institute of Pharmacy,Faizpur</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">61.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5267</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-422426431</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Kisan Vidya Prasarak Sanstha's,  Maharani Ahilyabai Holkar College of Pharmacy,Boradi</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">62.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5268</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-485831871</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Shree Neminath Jain Brahmacharyashram Jain Gurukul's Shri.Deepchand Fakirchand Lodha Pharmacy Institute, Chandwad</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">63.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5269</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-445510941</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Jijamata Education Society's College of Pharmacy, Nandurbar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">64.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5270</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-462873341</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Shri.Tilok Jain Dnyan Prasarak Mandal's Anand Colleges of Pharmacy, Pathardi, Ahmednagar </td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">65.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5271</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-476228951</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Shri.Sant Muktabai  Santha's Institute  of Technology,Jalgoan</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">45</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">66.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5272</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-451877301</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Nandurbar Taluka Vidhayak Sanstha's Institute of Pharmacy,Nandurbar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">67.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5273</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-465642583</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Late Shree Yashwantrao Chavan MMRDF Yashwantrao Chavan College of Pharmacy, Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">68.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5274</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-409904461</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Nashik District Maratha Vidya Prasarak Samaj's Institute Of Pharmaceutical Sciences, Adgaon, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">69.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5275</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-460873021</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Kisan Dnanodaya Mandal's Institute Of Pharmacy, Chalisgaon, Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">70.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5276</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-453114111</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Khandesh Education Society's College of Pharmacy,Amalner,Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">71.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5277</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-421846681</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Mula Education Soceity,Mula Rural Institute of Pharmacy,Sonai, Tal. Newasa Dist. Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">72.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5278</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-424097111</font></td><td class="Item" align="left" valign="middle" style="width:60%;">The Shirpur Education Society's R.C.Patel Institute Of Pharmacy, Shirpur</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">120</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">73.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5279</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-458720471</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Jagdamba Education Society's S.N.D. Diploma College of Pharmacy,Yeola</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">74.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5280</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-451685341</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Sanjivani Rural Education Society's  Sanjivani Institute Of Pharmacy And Research, Kopargaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman"></font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">75.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5281</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-414154333</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Shree Mahavir Education Society's Institute Of Technology(Pharmacy), Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">76</font>.</td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5283</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-441760501</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Jijamata Vidyapeeth's Shree. P.E.(Tatya) Patil Institute of Pharmacy, Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">77.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5284</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-475478011</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Sau Mathurabai Bhausaheb Thorat Sevabhavi Trust 'S Sau. Mathurabai Bhausaheb Thorat Institute Of D. Pharmacy,</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">78.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5285</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-425769433</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Kakasaheb Mhaske Memorial Medical Foundation's  Kakasaheb Mhaske College Of Pharmacy, Nagapur, Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">79.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5286</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-448372581</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Swami Vivekanand Sanstha's Insttitute Of Pharmacy, Malegaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">80.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5287</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-458411721</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Amrutvahini Sheti &amp; Shikshan Vikas Sanstha`S Amrutwahini Institute Of Pharmacy, Sangamner, Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">81.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5288</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-450078591</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Adivasi Deomogara Edu. Society's K.D.Gavit D.Pharmacy College, Pathrai, Tal.Dist.-Nandurbar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">82.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5289</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-433749961</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Shree Gurudatta shikshan sanstha's Pharmacy College, Kalwan, Dist. Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">83</font>.</td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5290</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-496075191</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Jalgaon Dealer Medicine Soceity's Institute of Pharmacy, Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">84.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5292</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-437661611</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Matoshri Education Society's MABD Diploma College Of Pharmacy,Bhabulgaon, Yeola, Dist. Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">120</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">85.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5293</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-421193161</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Nagaon Education Soc., Institute of Pharmacy, Nagaon, Dist. Dhule</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">120</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">86.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5294</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-441496761</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Godavari Shikshan Mandal's Asian Institute of Pharmacy, Nashik.</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">87.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5295</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-425658501</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Sanjay Edu.Soc.'s S.E.S. Institute of Pharmacy, Balapur(Phagane), Dhule</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">88.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5296</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-458718281</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Navmaharahstra Shikshan Mandal's Abasaheb kakade Pharmacy College, Bodhegaon,  Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">89.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5297</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-455317781</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Sangamner Medical foundation &amp; Research Institute, Wamanrao Ithape Pharmacy College, Sangamner, Dist. Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">90.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5298</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-439959791</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Sane Guruji Vidya Prasarak's Institute of Pharmacy, Shahada, Dist. Nandurbar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">91.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5299</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;">&nbsp;</td><td class="Item" align="left" valign="middle" style="width:60%;">Vidya Vikas Mandals Diploma College of Pharmacy, Sakri</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">92.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5300</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-444243531</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Shraddha Rural Medical Social Welfare &amp; Education's Sahakar Maharshi Kisanrao Varal Patil College Of Pharmacy, Nighoj, Tal.Parner, Dist. Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">93.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5301</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-413846681</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Shri.Krishna Educational &amp; Cultural Mandal,Shri.Gulabrao Deokar Institute of Pharmacy &amp; Research Centre, Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">94.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5302</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-409749621</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Mahatma Gandhi Vidya Mandir Institute Of  Hotel Management And Catering Technology,Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">95.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5345</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;">&nbsp;</td><td class="Item" align="left" valign="middle" style="width:60%;">Laxmi Pratishthan's, Dhule Institute Of Technology, Dhule</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">96.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5346</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;">&nbsp;</td><td class="Item" align="left" valign="middle" style="width:60%;">Sahyadri College of Fire Engineering &amp; Safety Management, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">120</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">97.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5349</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;">&nbsp;</td><td class="Item" align="left" valign="middle" style="width:60%;">Adarsh Shikshan Prasarak Mandal's College Of Management &amp; College Of Information Technology, Dhule.</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">98.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5354</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-430212481</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Sakeshwar Gramin Vikas Seva Sanstha, Sau.Sundarbai Manik Adsul Polytechnic, Chas, Ahmedngar 
</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">420</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">99.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5355</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-484980531</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Maharashtra Shetkari Seva Mandal, Tryambakrao Shejawal Institute Of Techology  (Polytehnic), Manmad,Nandgaon,Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">180</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">100.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5356</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-489030201</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Shree Samarth Academy’s, Shree Samarth Polytechnic, Mhasane Village Mhasane , Tal.Parner, Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">300</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">101.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5357</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-425988481</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Maharashtra Shikshan Vikas Mandal's Loknete Gopalraoji Gulwe,  Polytehnic,Vilholi,Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">360</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">102.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5358</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-476653971</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Shri Dattakrupa Shaikshanik &amp; Krushi Gramvikas Pratisthn's Saikrupa Polytechnic, Ghargaon,  Tal Shrigonda, Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">300</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">103.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5359</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-475814661</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Shri Chhatrapati sambhaji Gramvikas Pratisthan,s Shri Chhatrapati sambhaji Polytechnic,Yelpane Tal.Shrigonda, Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">300</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">104.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5360</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-497473291</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Savitabai Phule Shikshan Prasarak Mandal's Rajendra Jotiram Phule Polytechnic, Mirajgaon Tal Karjat. Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">300</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">105.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5361</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-449922591</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Raghvendra Shikshan Prasarak Mandal's Late Junasing Mangtu College of Engg. (Diploma), Valthan, Tal Chalisgaon,Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">300</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">106.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5362</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-426033711</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Shiva Trust's Ajitdada Pawar College of Poltechnic,Vadala Mahadeo,  Tal Shrirampur, Ahmednagar </td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">420</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">107.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5363</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-413788101</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Amruta Vaishnavi Education &amp; Welfare Trust's Shatabdi Institute of Technology, Agastkhind, Tal Sinner  Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">480</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">108.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5364</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-439862831</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Maharashtra Homiopathic Foundation College of Polytechnic Gujalwadi, Tal Sangamner,  Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">300</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">109.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5365</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-404124841</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Vardhaman Education &amp; Welfare Society,Ahinsa Polytechnic, Post. Dondaicha,  Dhule</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">360</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">110.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5366</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-484758993</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Potdar Foundation Taloda,Potdar Polytechnic, Patne, Malegaon, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">300</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">111.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5367</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-444260281</font></td><td class="Item" align="left" valign="middle" style="width:60%;">K.V.N.Naik  S. P. Sanstha’s, Polytechnic,Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">360</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">112.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5368</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-474113981</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Seva Shikshan Prasarak Mandal, Dr. N. J. Paulbudhe Institute of Technology, Narayandoho Tal Nagar, Ahmednagar
</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">300</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">113.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5369</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-431327121</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Nashik Institute of Technology, Late Annasaheb Patil Polytechnic , Dindori Road Cannol road ,MERI ,Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">600</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">114.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5370</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-474299561</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Kedareshwar Gramin Vikas Pratishthan, Kai. Sau. Sunitatai Eknathrao Dhakane  Polytehnic College,Rakshi,Ahmedngar </td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">360</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">115.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5371</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-445499041</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Karmaveer R.S.Wagh Education &amp; Health Institute, Kadwa Polytechnic, Rajaram Nagar, Tal-Dindori, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">300</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">116.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5372</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-403200961</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Godavari Foundation,Dr.Varsha Patil Institute of Technology, Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">300</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">117.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5373</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-457940921</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Sarswati Vidya Prasarak Mandal, Aabasaheb Shivajirao Sitaram Patil Institute of Polytechnic, Chichpura, Tal- Dharangaon,Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">300</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">118.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5374</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-444257561</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Mahatma Phule Samajik &amp; Shaikshanik Vikas Mandal, Samrat Ashok Polytechnic,Dhule Road, Chalisgaon ,Dist Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">300</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">119.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5375</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-510643281</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Nath Nangebaba Malti Purpose Mandal's, Polytechnic, Parola, Dist-Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">300</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">120.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5376</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-473977601</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Raj Laxmi Foundation, Sahkar Maharshi Rajaram Bapu Patil Polytechnic Institute, Madagaon ,Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">420</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">121.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5379</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-452946243</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Jamia Isalamia Isha-atul Uloom's Jamia College of Pharmacy, Akkalkuwa.</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">122.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5381</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-484631901</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Shri. Jaykumar Rawal Institute of Technology, Dondaicha.</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">120</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">123.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5385</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-481386261</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Akole Taluka Education Society,s Technical Campus, Akole, Ahmednagar.</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">300</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">124.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5387</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-464922281</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Sureshchandra Dhariwal Polytechnic, Palaskhede(bk), Tal. Jamner.</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">420</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">125.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5388</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-478394691</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Vidya Education Society's Vidya Institute of Technology, Dhanore.</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">300</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">126.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5389</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-451824831</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Sandip Foundation's Sandip Institute of Polytechnic, Nashik.</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">420</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">127.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5394</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-437657381</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Sahjivan Shikshan Prasarak Mandal's Vasantrao More Polytechnic, Tehu Tq.Parola, Jalgaon.</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">360</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">128.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5395</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-478378551</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Ashok Institute of Engineering &amp; Technology(Polytechnic), Shrirampur.</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">360</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">129.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5396</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-456316141</font></td><td class="Item" align="left" valign="middle" style="width:60%;">College of Engineering and Technology ,North Maharashtra Knowledge City ,Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">180</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">130.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5402</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-505713481</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Shree. Kapildhara Polytechnic, Igatpuri.</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">360</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">131.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5403</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-745374491</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Samarth Institute of Pharmacy, Kavathe</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">132.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5404</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-816340371</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Gurukul Education Society's Institute of Engineering &amp; Technology, Nandgaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">300</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">133.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5408</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-791148811</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Vidya Niketan College of Engineering, Bota Sangamner</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">120</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">134.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5411</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-756920924</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Maulana Mukhtar Ahmad Nadvi Technical Campus, Malegaon.</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">120</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">135.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5413</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-1505902131</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Netaji Subhashchandra Bose Edu Trust,Netaji Polytechnic.,Dhule</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">300</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">136.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5414</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-1461615081</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Nikam Institute of Technology(Polytechnic),Dhule</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">300</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">137.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5415</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-1482808181</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Adarsh Polytechnic,Dhule</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">240</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">138.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5417</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-1391096971</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Karmaveer Shankarao Kale Education Society's Gautam Polytechnic Institute,Kpoargaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">300</font></td>
					</tr><tr>
						<td class="Footer" align="center" valign="middle">&nbsp;</td><td class="Footer" align="center" valign="middle">&nbsp;</td><td class="Footer" align="center" valign="middle">&nbsp;</td><td class="Footer" align="right" valign="middle">Total</td><td class="Footer" align="center" valign="middle"><font face="Times New Roman">37330</font></td>
					</tr>
				</tbody>
</table>


         
 


  </div>
</div>
 
</div>
          
        
          <!-- ################################################################################################ --> 
        </div>
        
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

                     
         </marquee>
  </div>

</tr>
<br><br>
<?php }?>
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
         <li><a  href="notification.php">Notifications</a>
          
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