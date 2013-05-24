<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>
        <?php
            include_once 'Statics/StaticFunctions.php';
            echo printHeader("Education");
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
			<li id="current"><a href="education.php">Education</a></li>
			<li><a href="research.php">Research</a></li>
			<li><a href="WorkExperience/vizrt.php">Work experience</a></li>
			<li><a href="resume.php">Resume</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li>
				<a href="http://bd.linkedin.com/in/am1tdutta/" target="_BLANK"><img src="css/img/linkedin-32.png" title="View my profile on Linkedin." style="margin-top:9px;" border ="0" width ="32" height ="32"/></a>
				<a href="http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=5747687" target="_BLANK"><img src="css/img/cp-32.png"  style="margin-top:9px;" border ="0" width ="32" height ="32" title="View my CodeProject Articles." /></a>						
			</li>		
		</ul>
	<!-- navigation ends-->
	</div>

	<!-- content-wrap starts -->
	<div id="content-wrap">

		<div id="main">                    
                    <h2><a href="education.php" title="" class="hyperlink">Education</a></h2>
                    <p>                        
                        <strong><span style="font-size: 14px">Bachelor of Science in Computer Science and Engineering (2009)</span></strong><br/>
                        <strong><span style="font-size: 13px"><a href="http://www.buet.ac.bd/cse/" class="hyperlink">Bangladesh University of Engineering and Technology (BUET)</a></span></strong><br/>
                        Dhaka, Bangladesh<br/>
                        CGPA: <strong><span style="font-size: 14px">3.74</span></strong> / 4.00 <!-- <span>&nbsp;&nbsp;&nbsp;<a href="Files/All_courses_and_grades.pdf" class="hyperlink">All courses & grades</a></span>--><br/>
                        Major CGPA: <strong><span style="font-size: 14px">3.88</span></strong> / 4.00<br/>
                        Merit position: <strong><span style="font-size: 14px">9<sup>th</sup></span></strong> among 119<br/>                        
                        Thesis: <a href="Research/BinaryTernary.php" class="hyperlink">Prefix transposition on Binary and Ternary Strings</a><br/>
                        Advisor: <a href="http://www.buet.ac.bd/cse/faculty/facdetail.php?id=masudhasan" class="hyperlink">Dr. Masud Hasan</a>,
                                 <a href="http://www.buet.ac.bd/cse/faculty/facdetail.php?id=msrahman" class="hyperlink">Dr. M. Sohel Rahman</a><br/>                                    
                        Recipient of Dean’s Award & Academic Merit Scholarship (2006 - 2009)
                    </p>                  
                    <p>
                        <strong><span style="font-size: 15px">Higher Secondary Certificate (HSC) (2004)</span></strong><br/>                        
                        <strong><span style="font-size: 13px"><a href="http://www.notredame.ac.bd/" class="hyperlink">Notre Dame College</a></span></strong><br/>
                        Dhaka, Bangladesh<br/>
                        CGPA: <strong><span style="font-size: 14px">5.00</span></strong> / 5.00<br/>
                        Recipient of Dhaka Education Board Scholarship for result in the H.S.C examination (2004 - 2009) 
                    </p>
                    <p>
                        <strong><span style="font-size: 15px">Secondary School Certificate (SSC) (2002)</span></strong><br/>
                        <strong><span style="font-size: 13px"><a href="http://en.wikipedia.org/wiki/Motijheel_Government_Boys'_High_school" class="hyperlink">Motijheel Government Boys High School</a></span></strong><br/>
                        Dhaka, Bangladesh<br/>
                        CGPA: <strong><span style="font-size: 14px">4.88</span></strong> / 5.00<br/>
                    </p>
		</div>

		<div id="sidebar">
                    <h3>Undergraduate Projects</h3>
                    <ul class="sidemenu">
			<?php
                            echo loadUnderGradProjectListForMainDir();
                        ?>
                    </ul>
                </div>

	<!-- content-wrap ends-->
	</div>

	<!-- footer starts -->
	<div id="footer-wrap"><div id="footer-content">
                <div id="footer-bottom">
			<p>
			&copy; <?php echo COPYRIGHT_YEAR; ?>  <strong><?php echo COPYRIGHT_NAME; ?></strong> &nbsp;&nbsp;&nbsp;&nbsp;
			<a href="http://www.stylishtemplate.com/" title="Website Templates" class="hyperlink">website templates</a> by <a href="http://www.styleshout.com/">styleshout</a>
                        </p>
						<a title="Real Time Web Analytics" href="http://getclicky.com/66444870" target="_BLANK"><img alt="Real Time Web Analytics" src=				"//static.getclicky.com/media/links/badge.gif" border="0" /></a>
		<script src="//static.getclicky.com/js" type="text/javascript"></script>
		<script type="text/javascript">try{ clicky.init(66444870); }catch(e){}</script>
		<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/66444870ns.gif" /></p></noscript>
		<!-- Begin Motigo Webstats counter code -->
<a id="mws4850156" href="http://webstats.motigo.com/">
<img width="80" height="15" border="0" alt="Free counter and web stats" target="_BLANK" src="http://m1.webstats.motigo.com/n80x15.gif?id=AEoB7Ay/WKfbZeuPGQ87_YM70Gzw" /></a>
<script src="http://m1.webstats.motigo.com/c.js?id=4850156&amp;lang=EN&amp;i=3" type="text/javascript"></script>
<!-- End Motigo Webstats counter code -->
		</div>

<!-- footer ends-->
</div></div>

<!-- wrap ends here -->
</div>

</body>
</html>