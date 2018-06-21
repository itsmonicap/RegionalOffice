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


       
      
         <h5 align="center" style="font-size:24px; color:#000;">Post Graduation Institutes</h5>
        <div class="one_half" style="margin-left:-74px;"> 
        
          
          <div class="sdb_holder" style="margin-right: -178px;
    margin-left: 60px;">
         <div class="panel panel-primary">
  <div class="panel-heading">Post Graduation Institutes</div>
  <div class="panel-body" style="color:#000;">
  
     <table class="DataGrid" cellspacing="0" cellpadding="2" rules="all" border="1" id="ctl00_rightContainer_ContentTable1_gvInstituteList" style="width:100%;border-collapse:collapse;">
					<tbody><tr>
						<th class="Header" align="center" valign="middle" scope="col">Sr. No.</th><th class="Header" align="center" valign="middle" scope="col">Institute Code</th><th class="Header" align="center" valign="middle" scope="col">Permanent AICTE Application No</th><th class="Header" align="center" valign="middle" scope="col">Institute Name</th><th class="Header" align="center" valign="middle" scope="col">Intake</th>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">1.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5001</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-21473614</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Department of Management Studies, North Maharashtra University, Jalgaon </td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">2.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5002</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-35453534</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Department of Computer Science, North Maharashtra University, Jalgaon.</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">3.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5003</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-28467561</font></td><td class="Item" align="left" valign="middle" style="width:60%;">University Department of Chemical Technology, North Maharashtra University, Jalgaon  </td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">90</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">4.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5004</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-5025816</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Government College of Engineering, Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">18</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">5.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5005</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-5386664</font></td><td class="Item" align="left" valign="middle" style="width:60%;">NDMVP Samaja's College of Pharmacy, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">68</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">6.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5101</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-6567564</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Khandesh College Education Society's Institute of Management &amp; Research, Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">360</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">7.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5102</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-6051340</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Godavari Institute of Management &amp; Research, Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">120</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">8.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5103</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-10074451</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Shri Shivaji Vidya Prasarak Sanstha's Late Bapusaheb Shivaji Rao Deore College of Engineering,Dhule</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">150</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">9.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5104</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-8773881</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Shramsadhana Bombay Trust, College of Engineering &amp; Technology, Jalgaon </td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">150</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">10.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5105</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-6510076</font></td><td class="Item" align="left" valign="middle" style="width:60%;">G.H. Raisoni Institute of Engineering and Management, Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">108</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">11.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5106</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-10038704</font></td><td class="Item" align="left" valign="middle" style="width:60%;">K. C. E. Societys College of Engineering and Information Technology, Jalgaon </td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">78</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">12.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5107</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-8286121</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Shri Gulabrao Deokar College of Engineering, Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">96</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">13.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5108</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-3565901</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Nashik District Maratha Vidya Prasarak Samaj's Karmaveer Adv.Babaurao Ganpatrao Thakare College of Engineering, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">168</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">14.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5109</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-2942871</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Sandip Foundation, Sandip Institute of Technology and Research Centre, Mahiravani, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">96</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">15.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5110</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-7366266</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Pune Vidyarthi Griha's  Institute of Management, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">16.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5111</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-5089727</font></td><td class="Item" align="left" valign="middle" style="width:60%;">B. P. Hivale Education Society's Institute of Management Studies Career Development Research, Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">300</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">17.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5112</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-3960853</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Padmashree Dr. Vithalrao Vikhe Patil Foundation's Institute of Business Management &amp; Rural Development, Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">270</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">18.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5113</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-6147581</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Nashik District Maratha Vidya Prasarak Samaj's Institute of Management Research &amp; Technology, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">180</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">19.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5114</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-6618491</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Gokhale Education Society's J. D. C. Bytco Institute of Management Studies &amp; Research, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">20.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5115</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-2893251</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Mahatma Gandhi Vidyamandir's Institute Of Management and Research, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">120</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">21.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5116</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-13444841</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Navjeevan Institute of Management, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">22.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5117</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-28775271</font></td><td class="Item" align="left" valign="middle" style="width:60%;">PIRENS Institute of Business Management and Administration, Loni, Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">120</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">23.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5118</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-7013641</font></td><td class="Item" align="left" valign="middle" style="width:60%;">G. H. Raisoni Institute of Management and Research, Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">24.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5119</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-7637861</font></td><td class="Item" align="left" valign="middle" style="width:60%;">C.H.M.E. Society's Dr. Moonje Institute for Management &amp; Computer Studies, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">180</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">25.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5120</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-5465881</font></td><td class="Item" align="left" valign="middle" style="width:60%;">MET's Institute of Management, Adgaon, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">120</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">26.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5121</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-5942025</font></td><td class="Item" align="left" valign="middle" style="width:60%;">K. K. Wagh Institute of Engineering Education and Research, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">228</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">27.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5122</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-6113691</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Matoshri College of Management and Research Centre, Eklahare, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">120</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">28.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5123</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-4578010</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Nashik Gramin Shikshan Prasarak Mandal, Brahma Valley Institute of Management, Anjaneri, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">120</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">29.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5124</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-3396281</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Jagadamba Education Soc. Nashik's S.N.D. College of Engineering &amp; Reserch, Babulgaon </td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">162</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">30.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5125</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-19640842</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Pravara Rural Education Society's Sir Visvesvaraya Institute of Technology, Chincholi Dist. Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">126</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">31.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5126</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-23622351</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Ozar Vikas Sanstha's Vishwasattya College of MBA, Ozar.</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">32.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5127</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-4553795</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Kalyani Charitable Trust, Kalyani Ravindra Sapkal College of Management Studies, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">180</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">33.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5128</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-4843131</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Shree Gurudatta Shikshan Sanstha's Shri Dhondu Baliram Pawar College of Management, Manur, Kalwan</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
                    <td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">34.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5129</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-23632427</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Shri.Dattakrupa Shaikshnik &amp; Krushi GramVikas Pratisthan's Sai Krupa Institute of Management Science,Ghargaon,Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">120</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">35.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5130</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-3359847</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Brahma Valley College of Engineering &amp; Research, Trimbakeshwar, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">36.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5131</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-7599781</font></td><td class="Item" align="left" valign="middle" style="width:60%;">C.H.M.E. Society's Dr. Moonje Institute for Management &amp; Computer Studies, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">120</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">37.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5139</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-2013661</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Pravara Rural Col of Engg. loni, Pravaranagar, Ahmednagar.</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">90</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">38.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5150</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-5906481</font></td><td class="Item" align="left" valign="middle" style="width:60%;">R.C. Patel Educational Trust, Institute of Management Reasearch &amp; Development, Shirpur</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">120</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">39.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5151</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-4441835</font></td><td class="Item" align="left" valign="middle" style="width:60%;">MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik.</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">162</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">40.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5152</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-5550561</font></td><td class="Item" align="left" valign="middle" style="width:60%;">G. H. Raisoni Institute of Business Management,Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">180</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">41.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5153</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-17914021</font></td><td class="Item" align="left" valign="middle" style="width:60%;">West Khandesh Bhagini Seva Mandal's Dr. Suryakanta R. Ajmera M.C.A. College for Women, Dhule</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">42.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5154</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-12589174</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Mahatma Gandhi Vidya Mandir's Pharmacy College, Panchavati, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">56</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">43.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5155</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-6020421</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Dhulia Charitable Society's Annasaheb Ramesh Ajmera College of Pharmacy, Nagaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">46</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">44.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5158</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-3341283</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Nashik District Maratha Vidya Prasarak Samaj's College of Architecture, Nashik.</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">40</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">45.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5160</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-2896661</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Sanjivani Rural Education Society's College of Engineering, Kopargaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">132</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">46.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5161</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-2389691</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Padmashri Dr. Vithalrao Vikhe Patil College of Engineering, Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">48</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">47.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5162</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-7576531</font> </td><td class="Item" align="left" valign="middle" style="width:60%;">Amrutvahini Sheti &amp; Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">198</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">48.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5164</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-2022661</font></td><td class="Item" align="left" valign="middle" style="width:60%;">P.S.G.V.P. Mandal's D.N. Patel College of Engineering, Shahada, Dist. Nandurbar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">36</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">49.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5168</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-2056282</font></td><td class="Item" align="left" valign="middle" style="width:60%;">T.M.E. Society's J.T.Mahajan College of Engineering, Faizpur</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">36</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">50.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5170</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-3140633</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Hindi Seva Mandal's Shri Sant Gadgebaba College of Engineering &amp; Technology, Bhusawal</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">90</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">51.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5171</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-6138871</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Godavari Foundation's Godavari College Of Engineering,  Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">54</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">52.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5172</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-14601229</font></td><td class="Item" align="left" valign="middle" style="width:60%;">R. C. Patel Institute of Technology, Shirpur</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">66</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">53.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5173</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-8619361</font></td><td class="Item" align="left" valign="middle" style="width:60%;">SNJB's Late Sau. Kantabai Bhavarlalji Jain College of Engineering,  (Jain Gurukul), Neminagar,Chandwad,(Nashik)</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">78</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">54.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5176</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-5943171</font></td><td class="Item" align="left" valign="middle" style="width:60%;">G. H. Raisoni College of Engineering and Management, Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">66</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">55.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5177</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-2528171</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Matoshri College of Engineering and Research Centre, Eklahare, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">114</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">56.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5179</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-7718584</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Vishwabharati Academy's College of Engineering, Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">54</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">57.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5181</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-6446231</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">108</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">58.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5182</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-7351948</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Kalyani Charitable Trust, Late Gambhirrao Natuba Sapkal College of Engineering, Anjaneri, Trimbakeshwar Road, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">78</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">59.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5185</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-3041944</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Pravara Rural Education Society's Pravara Rural College of Pharmacy,Pravararanagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">54</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5186</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-2740981</font></td><td class="Item" align="left" valign="middle" style="width:60%;">R. C. Patel Institute of Pharmaceutical Education and Research, Shirpur</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">122</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">61.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5187</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-7119716</font></td><td class="Item" align="left" valign="middle" style="width:60%;">MGSM's Smt. Sharadchandrika Suresh Patil  College of Pharmacy, Chopda</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">20</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">62.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5189</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-5278418</font></td><td class="Item" align="left" valign="middle" style="width:60%;">P.S.G.V.P.M.'s College of Pharmacy, Shahada</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">28</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">63.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5190</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-2888854</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Tapi Valley Education Society's College of Pharmacy, Faizpur</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">32</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">64.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5191</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-4836951</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Padmashree Dr. Vithalrao Vikhe Patil Foundation's College of Pharmacy, Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">72</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">65.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5192</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-4441877</font></td><td class="Item" align="left" valign="middle" style="width:60%;">SNJB's Shriman Sureshdada Jain College of Pharmacy, Neminagar, Chandwad, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">66.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5193</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-4292051</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Mula Education Society's College of Pharmacy.Sonai</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">36</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">67.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5194</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-22221182</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Amrutvahini College of Pharmacy, Sangamner</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">64</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">68.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5195</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-16994991</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Sanjivani Rural Education Society's Sanjivani College of Pharmaceutical &amp; Research, Kopargaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">54</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">69.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5196</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-4885479</font></td><td class="Item" align="left" valign="middle" style="width:60%;">H. R. Patel Institute of Phamaceutical Educatiion &amp; Research ,Shirpur, Dhule</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">72</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">70.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5197</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-5375226</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Jagdamba Education Soceity,S.N.D. College of Pharmacy Babhulgaon, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">54</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">71.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5198</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-22420221</font></td><td class="Item" align="left" valign="middle" style="width:60%;">S.M.B.T. College Of Pharmacy Nandi Hills,Dhamangaon, Nashik.</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">36</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">72.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5199</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-4986546</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Shri Sureshdada Jain Institute Of Pharmaceutical Education and Research,Jamner Dist- Jalgaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">36</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">73.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5201</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-7711233</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Pravara Rural Education Society's College of Pharmacy (For Women) Chincholi Dist Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">36</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">74.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5203</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-6249341</font></td><td class="Item" align="left" valign="middle" style="width:60%;">K.B.H.S.S. Trust's Institute of Pharmacy, Malegaon Camp, Malegaon, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">13</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">75.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5206</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-3260168</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Kisan Vidya Prasarak's K.V.P.S. Institute of Pharmaceutical Education, Boradi, Shirpur, Dhule</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">18</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">76.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5207</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-4217161</font></td><td class="Item" align="left" valign="middle" style="width:60%;">MET's, Institute of Pharmacy,Bhujbal Knowledge City, Metleague Colleges, Adgaon, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">54</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">77.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5209</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-6783501</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Kai Yashodabai Dagadu Saraf Charitable Trust's College of Pharmacy, Sakegaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">54</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">78.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5210</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-9784936</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Kalyani Charitable Trust, Ravindra Gambhirrao Sapkal College of Pharmacy, Anjaneri Tal. Trimbakeshwar Dist. Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">48</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">79.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5212</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-5369913</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Shri. Gurudatta Shikshan Sansthas  Loknete Dr. J.D. Pawar College of Pharmacy, Manur</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">18</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">80.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5282</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-23048731</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Jamia Isalamia Isha-atul Uloom's Ali-Allana College of Pharmacy, Akkalkuwa</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">54</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">81.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5303</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-12614931</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Hon. Shri. Babanrao Pachpute Vichardhara Trust, Group of Institutions (Integrated Campus)-Parikrama, Kashti Shrigondha, </td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">138</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">82.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5320</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-10693853</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Abhinav Education Society's Institute of Management &amp; Business Administration, Akole</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">83.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5321</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-5838003</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Institute of Management and Science, Sakegaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">84.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5323</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-6806761</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Sant Dnyaneshwar institute of Management and Business Administration, </td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">85.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5324</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-5217916</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Amrutvahini Institute of Management &amp; Business Administration, Sangamner</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">120</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">86.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5325</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-4615371</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Global Institute of Management, Velhale Tal. Sangamner Dist. Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">120</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">87.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5327</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-445474701</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Matoshri College of Management and RC Center, Dhanore</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">120</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">88.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5329</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-1677312</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Samrat Ashok Institute ofComputer Management Studies,Chalisgaon</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">60</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">89.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5380</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-444222791</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Adsul's Technical Campus, Chas Dist. Ahmednagar</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">120</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">90.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5383</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-474880951</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Universal College of Management, Chandsi, Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">120</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">91.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5385</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-481386261</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Akole Taluka Education Society,s Technical Campus, Akole, Ahmednagar.</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">240</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">92.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5386</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-475434091</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Dr. B.V. Hiray College of Management &amp; Research Centre, Malegaon.</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">180</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">93.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5391</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-415315521</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Sandip Institute of Pharmaceutical Science, Nashik.</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">18</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">94.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5393</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-475203423</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Dr.N.H.Wagh Institute Of Management and Research, Dahiwal, Ta. Malegaon, Dist. Nashik</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">120</font></td>
					</tr><tr>
						<td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">95.</font></td><td class="Item" align="center" valign="middle" style="width:10%;"><font face="Times New Roman">5400</font></a></td><td class="Item" align="center" valign="middle" style="width:14%;"><font face="Times New Roman">1-788675091</font></td><td class="Item" align="left" valign="middle" style="width:60%;">Piren's Insitute of Computer Technology, Loni</td><td class="Item" align="center" valign="middle" style="width:8%;"><font face="Times New Roman">120</font></td>
					</tr><tr>
						<td class="Footer" align="center" valign="middle">&nbsp;</td><td class="Footer" align="center" valign="middle">&nbsp;</td><td class="Footer" align="center" valign="middle">&nbsp;</td><td class="Footer" align="right" valign="middle">Total</td><td class="Footer" align="center" valign="middle"><font face="Times New Roman">9111</font></td>
					</tr>
				</tbody></table>
   
         
     


         
 


  </div>
</div>
 
</div>
          
         <!-- <p class="right"><a href="#">Click here to view all of the latest news and events &raquo;</a></p>-->
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
           <!-- <h6>Virtual Tour</h6>
            <div class="mediacontainer"><img src="images/demo/video.gif" alt="">
              <p><a href="#">View More Tour Videos Here</a></p>
            </div>
          </div>
          <div class="sdb_holder">
            <h6>Quick Information</h6>
            <ul class="nospace quickinfo">
              <li class="clear"><a href="#"><img src="images/demo/80x80.gif" alt=""> Make An Application</a></li>
              <li class="clear"><a href="#"><img src="images/demo/80x80.gif" alt=""> Order A Prospectus</a></li>
            </ul>-->
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
         <li><a href="faq.php">F.A.Q.</a></li>
       <!-- <li><a class="drop" href="#">Dropdown</a>
          <ul>
            <li><a href="#">Level 2</a></li>
            <li><a class="drop" href="#">Level 2 + Drop</a>
              <ul>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="#">Link Text</a></li>
        <li><a href="#">Another Link Text</a></li>
        <li><a href="#">This a very long link</a></li>
        <li><a href="#">This is the last</a></li>-->
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