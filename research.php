<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <?php
        include_once 'Statics/StaticFunctions.php';
        printHeader("Research");
    ?>    
    <script type="text/javascript" src="js/default.js"></script>
</head>

<body>
<!-- wrap starts here -->
<div id="wrap">

	<!--header -->
	<div id="header">

		<h1 id="logo-text"><a href="index.php" title=""><?php echo PAGE_HEADER; ?></a></h1>
		<p id="slogan"><?php echo SLOGAN; ?></p>
		<form id="quick-search" action="search.php" method="get" >
			<input class="tbox" type="text" name="q" title="Start typing and hit ENTER" value="Search amitdutta.net" />
			<!-- <input class="btn" alt="Search" type="image" src="css/img/search.gif" /> -->
			<input type="submit" id="search-submit" value=""
    style="margin-top: 4px; margin-left: 8px; background-image: url(css/img/search.gif); border: solid 0px #000000; width: 25px; height: 25px;" />			
		</form>

	<!--header ends-->
	</div>

	<!-- navigation starts-->
	<div  id="nav">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="education.php">Education</a></li>
			<li id="current"><a href="research.php">Research</a></li>
			<li><a href="WorkExperience/vizrt.php">Work experience</a></li>
			<li><a href="cv.php">CV</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li>
				<a href="http://www.linkedin.com/in/am1tdutta/" target="_BLANK"><img src="css/img/linkedin-32.png" title="View my profile on Linkedin." style="margin-top:9px;" border ="0" width ="32" height ="32"/></a>
				<a href="http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=5747687" target="_BLANK"><img src="css/img/cp-32.png"  style="margin-top:9px;" border ="0" width ="32" height ="32" title="View my CodeProject Articles." /></a>						
			</li>		
		</ul>
	<!-- navigation ends-->
	</div>

	<!-- content-wrap starts -->
	<div id="content-wrap">
            
		<div id="main">
                    <h2><a href="research.php" title="" class="hyperlink">Research</a></h2>
                    <h3>Research Interest:</h3>
                    <ul>
			<li><strong>Security and Privacy in Cloud Computing</strong></li>
			<li><strong>Digital Data Waste</strong></li>
                        <li><strong>Software Engineering and Evolution, Software Reliability and Security</strong></li>
                    </ul>
                    <h3>Accepted Papers</h3>
                    <ul>
			<li>
			"SecLaaS: Secure Logging-as-a-Service for Cloud Forensics", <a href="http://students.cis.uab.edu/zawoad/" class="hyperlink">Shams Zawoad</a>, Amit Kumar Dutta and <a href="http://www.ragibhasan.com/" class="hyperlink">Ragib Hasan</a>, To appear at the the <a href="http://hise.hznu.edu.cn/asiaccs" class="hyperlink"> 8th ACM Symposium on Information, Computer and Communications Security (ASIACCS), 2013</a>. (Acceptance rate: 16.2%)
			</li>
                        <li>
                            <a href="http://amitdutta.net/Files/Thesis/prefix-binary-ternary.pdf" class="hyperlink">"Prefix transpositions on binary and ternary strings""</a>, Amit Kumar Dutta,  <a href="http://www.buet.ac.bd/cse/faculty/facdetail.php?id=masudhasan" class="hyperlink">Masud Hasan</a> and <a href="http://www.buet.ac.bd/cse/faculty/facdetail.php?id=msrahman" class="hyperlink">M. Sohel Rahman</a>, <a href="http://www.sciencedirect.com/science/article/pii/S002001901300029X" class="hyperlink"> Volume 113, Issue 8, 30 April 2013, Pages 265–270</a>
                        </li>
                    </ul>
		</div>

            

		<div id="sidebar">
                    <h3>Undergraduate Research</h3>
			<ul class="sidemenu">
                            <li><strong><a href="Research/BinaryTernary.php">Prefix transpositions on binary and ternary strings<br />
                            <span>Accepted at BIOCOMP'10 & Poster accepted at APBC 2010</span></a></strong>
                            </li>
			</ul>
		<!-- sidebar ends -->
		</div>

	<!-- content-wrap ends-->
	</div>

	<!-- footer starts -->
	<?php include 'Statics/footer.php'; ?>
</div>


</body>
</html>
