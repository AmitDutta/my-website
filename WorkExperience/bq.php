<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <?php
        include_once '../Statics/StaticFunctions.php';
    ?>
    <title>Binary Quest Limited</title>
    <link rel="stylesheet" href="../css/img/TechJunkie.css" type="text/css" />
    <script type="text/javascript" src="../js/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="../js/default.js"></script>
</head>

<body>
<!-- wrap starts here -->
<div id="wrap">

	<!--header -->
	<div id="header">

		<h1 id="logo-text"><a href="../index.php" title=""><?php echo PAGE_HEADER; ?></a></h1>
		<p id="slogan"><?php echo SLOGAN; ?></p>
		<form id="quick-search" action="../search.php" method="get" >
			<input class="tbox" type="text" name="q" title="Start typing and hit ENTER" value="Search amitdutta.net" />
			<!-- <input class="btn" alt="Search" type="image" src="css/img/search.gif" /> -->
			<input type="submit" id="search-submit" value=""
    		style="margin-top: 4px; margin-left: 8px; background-image: url(../css/img/search.gif); border: solid 0px #000000; width: 25px; height: 25px;" />			
		</form>		
	<!--header ends-->
	</div>

	<!-- navigation starts-->
	<div  id="nav">
		<ul>
			<li><a href="../index.php">Home</a></li>
			<li><a href="../education.php">Education</a></li>
			<li><a href="../research.php">Research</a></li>
			<li  id="current"><a href="../WorkExperience/vizrt.php">Work experience</a></li>
			<li><a href="../cv.php">CV</a></li>
			<li><a href="../contact.php">Contact</a></li>
                        <li>
				<a href="http://www.linkedin.com/in/am1tdutta/" target="_BLANK"><img src="../css/img/linkedin-32.png" title="View my profile on Linkedin." style="margin-top:9px;" border ="0" width ="32" height ="32"/></a>
				<a href="http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=5747687" target="_BLANK"><img src="../css/img/cp-32.png"  style="margin-top:9px;" border ="0" width ="32" height ="32" title="View my CodeProject Articles." /></a>						
			</li>	
		</ul>
	<!-- navigation ends-->
	</div>

	<!-- content-wrap starts -->
	<div id="content-wrap">

		<div id="main">
                    <h2><a href="http://www.binaryquest.com/" title="" class="hyperlink">Binary Quest Limited</a></h2>
                    <p class="post-info"><a href="../WorkExperience/vizrt.php" class="hyperlink">Work Experience</a>, Professional Experience
                    </p>
                    <p>
                        <a href="http://www.binaryquest.com" class="hyperlink">Binary Quest</a> is an independent software vendor and technology services company. In my senior year of undergradutate studies at December, 2008
						I started working for Binary Quest. It was a wonderful experience to work and 					
						truth be told, I have learned quite a lot of things
                        regarding software engineering here. At Binary Quest, I mainly worked with C#, Microsoft SQL Server 2005, WPF, WCF, Prism.

                        <h3>Projects</h3>
                        <ul>
                            <li>Develop order entry and X ray management module in an ERP system developed for diagonostic centers.
                                I first introduced with Prism and MVVM in this project. Description of the product can be found
                                <a href="http://www.binaryquest.com/ProductsSolutions/HealthCareDiagnostics.aspx" class="hyperlink">here</a>.
                            </li>
                            <li>
                                Implement complex business logic in T-SQL for Employee attendance management system software. Each employee has some schedules (shift based)
                                and attendance log. I had to implement an algorithm to calculate the attendance report of the employees. The whole logic was written in  stroed procedure
                                for faster report generation.
                            </li>
                            <li>
                                Develop PDCLEcho and PDCLEndoscopy software which works with EchoCardioGram and Endoscopy machine in a Medical Diagnostic Center. Both softwares
                                has patient searching facility, grabbing image from Capture card and generating report. In PDCLEndoscopy, I had to develop a report editor with
                                Rich Text Editor having auto proofing support like Microsoft Word. <a href="http://www.padma-bd.com" class="hyperlink">Padma Diagnostic center Limited</a>, a famous
                                diagnostic center at Dhaka, Bangladesh is using these software packages.
                            </li>
                            <li>
                                Develop MAC address, group based authentication system. This software is developed to allow a person to use some specific softwares
                                in an organization. For instance, if one employee works in cash counter, he needs only those softwares related to this purpose. Softwares like Media player should
                                be prohibited there. This software replaces the original windows shell with a very simple custom shell where only buttons are present to run necessary
                                softwares. This is also used in <a href="http://www.padma-bd.com" class="hyperlink">Padma Diagnostic center Limited</a>.
                            </li>
                            <li>
                                Develop a auto form fill up software for an X-Ray machine. The X-Ray machine operator needs to write user information in the software which is time consuming.
                                Here he just presses a shortcut (i.e. Alt + D), a simple form pops up and takes the order Id and then grabs the user related information using Web Service and fills
                                up the form. X-Ray department of <a href="http://www.padma-bd.com" class="hyperlink">Padma Diagnostic center Limited</a> is using it.
                            </li>
                        </ul>
                        
                    </p>
		</div>

		<div id="sidebar">
                    <?php
                        loadWorksFromDir();
                    ?>
		<!-- sidebar ends -->
		</div>

	<!-- content-wrap ends-->
	</div>

	<!-- footer starts -->
	<?php include '../Statics/footer.php'; ?>
</div>


</body>
</html>
