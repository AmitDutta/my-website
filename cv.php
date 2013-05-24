<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <?php
        include_once 'Statics/StaticFunctions.php';
        printHeader("CV");
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
			<li><a href="research.php">Research</a></li>
			<li><a href="WorkExperience/vizrt.php">Work experience</a></li>
			<li id="current"><a href="cv.php">CV</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li>
				<a href="http://www.linkedin.com/in/am1tdutta/" target="_BLANK"><img src="css/img/linkedin-32.png" title="View my profile on Linkedin." style="margin-top:9px;" border ="0" width ="32" height ="32"/></a>
				<a href="http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=5747687" target="_BLANK"><img src="css/img/cp-32.png"  style="margin-top:9px;" border ="0" width ="32" height ="32" title="View my CodeProject Articles." /></a>						
			</li>		
		</ul>
	<!-- navigation ends-->
	</div>

	<!-- content-wrap starts -->
	<div id="content-wrap-resume">            
                        
                    
		<div id="resumeMain">
                    
                    <h2>Download<a href="Files/Dutta_CV.pdf"> CV</a>, <a href="Files/Dutta_Resume.pdf">Resume</a> </h2>
                    <br />

<!--                    <div id = "cv" style="background-color:#ffffff; overflow:auto;">
                            <A HREF="psview.php?id=2ce1c051&amp;page=1&amp;size=full"><IMG BORDER=0 SRC="css/img/cv/page1.gif" WIDTH=700></A>
                            <br />
                            <A HREF="psview.php?id=2ce1c051&amp;page=1&amp;size=full"><IMG BORDER=0 SRC="css/img/cv/page2.gif" WIDTH=700></A>
                            <br />
                            <A HREF="psview.php?id=2ce1c051&amp;page=1&amp;size=full"><IMG BORDER=0 SRC="css/img/cv/page3.gif" WIDTH=700></A>
                    </div>-->

                    <iframe src="http://docs.google.com/gview?url=http://www.amitdutta.net/Files/Dutta_CV.pdf&embedded=true" style="width:830px; height:700px;" frameborder="0">
                    </iframe>


		</div>


<!--		<div id="sidebar">
                    <h3>Download Resume</h3>
			<ul class="sidemenu">
                            <li>
                                <a href="Files/Resume_of_AmitDutta.pdf">PDF</a>
                            </li>
			</ul>		 
		</div>-->

	<!-- content-wrap ends-->
	</div>

	<!-- footer starts -->
	<?php include 'Statics/footer.php'; ?>
</div>


</body>
