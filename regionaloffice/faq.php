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
         <li ><a href="circular.php">Circulars</a></li>
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
         
          <li><a href="webform.php">Web Forms</a></li>
         <li class="active"><a href="faq.php">F.A.Q.</a></li>
      
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

       
     
         <h5 align="center" style="font-size:24px; color:#000;"> Frequently Asked Questions(FAQs):</h5>
        <div class="one_half" style="margin-left:-74px;"> 
        
          
          <div class="sdb_holder" style="margin-right: -178px;
    margin-left: 60px;">
        <div class="entry">
                <div class="boxes">
                    <div class="top">
                    
                    </div>
                    <table style="color:#000">
             <tr>
                        <td valign="top">
                            1
                        </td>
                        <td>
                            <b>Where the student should submit the Completed Application Form?</b>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            Ans</td>
                        <td>
                            The completed Application form is to be submitted by the candidate to the Institute.
                            The Institute shall scrutinise the form and fill the Para 21 pertaining to the institute
                            and forward the applications of all the candidates as per schedule to the Nodal
                            Officer.
                            <hr />
                        </td>
                    </tr>
                    <tr>
                       <td valign="top">
                            2
                        </td>
                        <td>
                            <b>I am a SC Candidate converted to buddhist. Can I apply?</b>
                        </td>
                    </tr>
                    <tr>
                      <td valign="top">
                            Ans</td>
                        <td>
                            Yes. The Candidate converted to buddhist religion can apply as buddhist. The necessary
                            document should be submitted to the Institute.
                            <hr />
                        </td>
                    </tr>
                    
                    
                    <tr>
                       <td valign="top">
                           3
                        </td>
                        <td>
                            <b>From where I have to get the Form?</b>
                        </td>
                    </tr>
                    <tr>
                      <td valign="top">
                            Ans</td>
                        <td>
                            The Form is available on the Website www.dte.org.in/mcm/ under Download Section.
                            You can submit the form provided by Ministry of Minority Affairs, Govt. of India
                            also.
                            <hr />
                        </td>
                    </tr>
                    <tr>
                       <td valign="top">
                            4
                        </td>
                        <td>
                            <b>How I should submit the Affidavit?</b>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            Ans</td>
                        <td>
                            The Affidavit is to be given by the Parent/ Guardian. It should be as per the guidelines
                            of Stamp Act. It is given by the Tahisldar also. The gross Income and declaration
                            of not availing any other scholarship/concession must be mentioned on it. Please
                            attach the ORIGINAL Affidavit along with form, otherwise the Application shall be
                            rejected.
                            <hr />
                        </td>
                    </tr>
                    <tr>
                       <td valign="top">
                            5
                        </td>
                        <td>
                            <b>I have taken admission in bsc (Computer), can I apply for Merit cum Means based Scholarship?</b>
                        </td>
                    </tr>
                    <tr>
                      <td valign="top">
                            Ans</td>
                        <td>
                            No. Please apply for the Post Matric Scholarship. Detailed information is available
                            on <a href='http://www.dirhe.org.in/pms/'>www.dirhe.org.in/pms/</a>
                            <hr />
                        </td>
                    </tr>
                    <tr>
                       <td valign="top">
                            6
                        </td>
                        <td>
                            <b>Which courses affilited to Fishery University/ Agriculture University are eligible
                                for Meritc-cum-Means based Scholarship?</b>
                        </td>
                    </tr>
                    <tr>
                       <td valign="top">
                            Ans</td>
                        <td>
                            b. Tech ( Agriculture), b. Tech. ( Food Technology), dairy Technology, bachelor
                            of Fishery Science, b. Sc. Forestry, M. Tech ( Agri), bachelor of Hurticulture,
                            bachelor of Hurticulture, b. V. Sc. & A.H.
                            <hr />
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            7
                        </td>
                        <td>
                            <b>I have completed the MbbS and now doing Enternship. Can I apply for the renewal /
                                fresh scholarship?</b>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            Ans</td>
                        <td>
                            No. This scholarship is not for the Enternship.
                            <hr />
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            8
                        </td>
                        <td>
                            <b>May parents gross income is Rs. 2.60 Lakhs and net income after deduction is Rs.
                                1.40 Lakhs. Am I eligible?</b>
                        </td>
                    </tr>
                    <tr>
                       <td valign="top">
                            Ans</td>
                        <td>
                            NO. The Gross Income is to be considered. If the Father and Mother are Employment,
                            then the total of gross income of both the parents is to be considered.
                            <hr />
                        </td>
                    </tr>
                    <tr>
                      <td valign="top">
                            9
                        </td>
                        <td>
                            <b>Can a candidate admitted in b.A.M.S. Course apply for the scholarship ?</b>
                        </td>
                    </tr>
                    <tr>
                       <td valign="top">
                            Ans</td>
                        <td>
                            Yes. b.A.M.S. Course is included in the Professional & Technical Courses. See the
                            List of Professional Courses.
                            <hr />
                        </td>
                    </tr>
                    <tr>
                       <td valign="top">
                            10
                        </td>
                        <td>
                            <b>I got scholarship for undergradute course in the year 2007-08 and got admission to
                                Post Graduate course for the year 2008-09. Whether I should apply for Renewal or
                                Fresh Scholarship?</b>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            Ans</td>
                        <td>
                            Candidate has to fill the Fresh Application form for Scholarship and Undergraduate
                            percentage shall be considered for generating merit list.
                            <hr />
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            11
                        </td>
                        <td>
                            <b>Can I fill the application form for Renewal of scholarship if result is withheld,
                                or not declared or Examination is not conducted?</b>
                        </td>
                    </tr>
                    <tr>
                       <td valign="top">
                            Ans</td>
                        <td>
                            The candidate must be pass the previous examination for renewal. Hence as soon as
                            the result is declared, the candidate must submit the duly filled application form
                            through the institute to the Nodal Officer till last date for submission.
                            <hr />
                        </td>
                    </tr>
                    <tr>
                       <td valign="top">
                            12
                        </td>
                        <td>
                            <b>What is the procedure if college not sign on Receipt in Acknowledgement ?</b>
                        </td>
                    </tr>
                    <tr>
                       <td valign="top">
                            Ans</td>
                        <td>
                            Candidate can attech a xerox copy of passbook/bank statement showing amount of received
                            MCM scholarship.
                            <hr />
                        </td>
                    </tr>
                    <tr>
                      <td valign="top">
                            13
                        </td>
                        <td>
                            <b>What is procedure if the Institute not give the bank details of its own ?</b>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            Ans</td>
                        <td>
                            Serial number 21 of form is to be filled by institute.
                            <hr />
                        </td>
                    </tr>
                    <tr>
                       <td valign="top">
                            14
                        </td>
                        <td>
                            <b>I am studying in MbbS. I got amount from Government for research work. Can I apply
                                for the Scholarship ?</b>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            Ans</td>
                        <td>
                            Yes. The Research Work is not to be take as Fee Concession or Scholarship/ Stipend.
                            Hence any candidate availing the financial assistance for research work, can also
                            apply for the Scholarship.
                            <hr />
                        </td>
                    </tr>
                    <tr>
                       <td valign="top">
                            15
                        </td>
                        <td>
                            <b>I am Studying in New Delhi but my Domicel state is Maharashtra. How I should send
                                the form for Scholarship?</b>
                        </td>
                    </tr>
                    <tr>
                       <td valign="top">
                            Ans</td>
                        <td>
                            The Application form is to be forwarded through the College to the Nodal Officer,
                            Maharashtra.
                            <hr />
                        </td>
                    </tr>
                    <tr>
                       <td valign="top">
                            16
                        </td>
                        <td>
                            <b>I am a domicileof Uttar Pradesh and studying at College of Engineering, Pune in Maharashtra.
                                Where I sholuld submit the Form?</b>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            Ans</td>
                        <td>
                            Please refere http://minorityaffairs.gov.in/newsite/schemes/secy_list0809.pdf for
                            List of Principal Secretaries/Secretaries of Minorities Welfare Departments in All
                            States/Uts
                            <hr />
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            17
                        </td>
                        <td>
                            <b>I got scholarship for 2007-08. Now I have passed the previous examination with 48.52%
                                marks? Can I apply for renewal as I do not have 50 % marks?</b>
                        </td>
                    </tr>
                    <tr>
                      <td valign="top">
                            Ans</td>
                        <td>
                            The candidate must pass the previous year examination and should be on roll of the
                            institute for the academic year 2008-09 for renewal. The percentage of Marks obtained
                            in previous year examination is not the creteria for renewal.
                            <hr />
                        </td>
                    </tr>
                    <tr>
                       <td valign="top">
                            18
                        </td>
                        <td>
                            <b>What is the criteria for generating of merit list if candidate got grade instead
                                of percentage in examination.?</b>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            Ans</td>
                        <td>
                            The candidate should convert the Grade Points into the equivalent percentage marks
                            and attach necessary supprting documents for conversion from the competent authority.
                            <hr />
                        </td>
                    </tr>
                    <tr>
                       <td valign="top">
                            19
                        </td>
                        <td>
                            <b>Can institute handover the cheque to candidate if he has got already other scholarship
                                but the amount of other scholarship is less than MCM scolarship? </b>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            Ans</td>
                        <td>
                            The Candidate should avail the benefit of only one scheme. Hence the candidate should
                            accept one scholarship and the surrender the amount of other scheme(s).
                            <hr />
                        </td>
                    </tr>
                    <tr>
                      <td valign="top">
                            20
                        </td>
                        <td>
                            <b>Should candidate attech a proof of Religion ?</b>
                        </td>
                    </tr>
                    <tr>
                      <td valign="top">
                            Ans</td>
                        <td>
                            The Religion is mentioned in the Leaving Certificate / birth Certificate of the
                            Candidate. It shall be the responsibility of the Candidate and Insitute to furnish
                            correct information based on the documents available with the Candidate /Institute.
                            <hr />
                        </td>
                    </tr>
                    <tr>
                       <td valign="top">
                            21
                        </td>
                        <td>
                            <b>Is it necessary for hostler candidate to attech a proof of hostel ? </b>
                        </td>
                    </tr>
                    <tr>
                       <td valign="top">
                            Ans</td>
                        <td>
                            Yes. It is the responsibility of the Institute to fill the correct information.
                            The candidates can attach the receipt of the Hostel Fees.
                            <hr />
                        </td>
                    </tr>
                    <tr>
                     <td valign="top">
                            22
                        </td>
                        <td>
                            <b>Which percentage is considered for generating a merit list, if candidate completed
                                H.S.C.and Diploma and got admission in UG degree course?</b>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            Ans</td>
                        <td>
                            The percentage obtained in H.S.C. (XII) are considered for UG Courses. For admission
                            to Direct Second Year of Degree in Engineering/Technology, percentage marks obtained
                            in Final Year Diploma Courses are considered.
                            <hr />
                        </td>
                    </tr>
                    <tr>
                      <td valign="top">
                            23
                        </td>
                        <td>
                            <b>Should Candidate fill form if doing part time course?</b>
                        </td>
                    </tr>
                    <tr>
                       <td valign="top">
                            Ans</td>
                        <td>
                            Yes.
                            <hr />
                        </td>
                    </tr>
                    <tr>
                      <td valign="top">
                            24
                        </td>
                        <td>
                            <b>How candidate fill percentage,if there is a grading system ?</b>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            Ans</td>
                        <td>
                            Candidate can fill a equivalent percentage given by college/university.
                            <hr />
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                           25
                        </td>
                        <td>
                            <b>Can Candidate fill Form ,if got admission through MANAGEMENT qouta and having a exact
                                50% of marks in H.S.C.?</b>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            Ans</td>
                        <td>
                            Yes,candidate can fill form.
                            <hr />
                        </td>
                    </tr>
                    <tr>
                       <td valign="top">
                            26
                        </td>
                        <td>
                            <b>Aggerecate Percent means final year or all three year of diploma course.</b>
                        </td>
                    </tr>
                    <tr>
                       <td valign="top">
                            Ans</td>
                        <td>
                            Final year percentage.
                            <hr />
                        </td>
                    </tr>
                    <tr>
                       <td valign="top">
                            27
                        </td>
                        <td>
                            <b>I born in New Delhi, but parents are Domicile of Maharashtra State and now studying
                                in Maharashtra. Can I apply? </b>
                        </td>
                    </tr>
                    <tr>
                       <td valign="top">
                            Ans</td>
                        <td>
                            If you have the Domicile Certificate of Maharashtra State,you can submit application
                            form for scholarship under Maharashtra State Quota.
                            <hr />
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            28
                        </td>
                        <td>
                            <b>I have passed the previous examination with ATKT. Can I apply for the Renewal?</b>
                        </td>
                    </tr>
                    <tr>
                      <td valign="top">
                            Ans</td>
                        <td>
                            Yes. The candidate must be on Roll of the Institute for the academic year 2008-09.
                            <hr />
                        </td>
                    </tr>
                    <tr>
                       <td valign="top">
                            29
                        </td>
                        <td>
                            <b>Which fees are to be included in the Course Fees Item?</b>
                        </td>
                    </tr>
                    <tr>
                      <td valign="top">
                            Ans</td>
                        <td>
                            The Fees collected by the College should be written in the Course Fee item, such
                            as Tuition Fee, Development Fee, Examination Fees, Library Fee. The fees such as
                            Library Deposit, traveling Expences, Room Rent, books expenditure should not be
                            included.
                            <hr />
                        </td>
                    </tr>
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
         <li class="active"><a href="circular.php">Circulars</a></li>
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