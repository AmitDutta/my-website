<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <?php
        include_once 'Statics/StaticFunctions.php';
        printHeader("Contact");
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
			<li><a href="cv.php">CV</a></li>
			<li id="current"><a href="contact.php">Contact</a></li>			
		</ul>
	<!-- navigation ends-->
	</div>

	<!-- content-wrap starts -->
	<div id="content-wrap">
            
		<div id="main">
                    <h2><a href="contact.php" title="" class="hyperlink">Contact</a></h2>
                    <div style="float: left; width: 60%" >
                        <p>
                            <span style="font-size: 14px;"><strong>Office</strong></span><br/>
                            <strong><a href="http://www.uab.edu/home/" target="_BLANK" class="hyperlink">UAB - The University of Alabama at Birmingham</a> </strong><br/>
                            <a href="http://secret.cis.uab.edu/" target="_BLANK" class="hyperlink">SECRETLab</a>, <a href="http://www.cis.uab.edu/" target="_BLANK" class="hyperlink">Department of Computer and Information Sciences</a><br />
                            115A Campbell Hall, 1300 University Boulevard<br />
			    Birmingham, Alabama 35294-1170<br />
                        </p>
                        <p>
                            <span style="font-size: 14px;"><strong>Home</strong></span><br/>
                            <span><b>Amit Dutta</b></span><br/>
                            1501 15th Avenue South, Apartment 15<br/>
			    Birmingham, Alabama 35025<br/>	
                        </p>

                    </div>

                   <div style="float: left; width: 40%">
                        <p>
                            <span style="font-size: 14px;"><strong>Email</strong></span><br/>
                           <!-- <span style="font: 17pt/20pt Garamond, Georgia, serif;">&#2437;&#2478;&#2495;&#2468 &#2453;&#2497;&#2478;&#2494;&#2480 &#2470;&#2451</span><br/>   -->
                            <a href="mailto:amit@csebuet.org" class="hyperlink">amit AT csebuet DOT org</a><br/>
                            <a href="mailto:amit@amitdutta.net" class="hyperlink">amit AT amitdutta DOT net</a><br/>                            
                            <!-- <a href="mailto:amit.856@gmail.com">amit856 AT gmail.com</a><br/> -->
                        </p>
						<p>
                        	I am always available by Mobile at <strong>+1.205.413.55.Nine.Eight</strong>
                        </p>
                    </div>
		</div>

            

		<div id="sidebar">
                    <h3>My Profiles</h3>
			<ul class="sidemenu">
                            <li>
								<a href="http://www.linkedin.com/in/am1tdutta/"><img src="css/img/linkedin-32.png" title="View my profile on Linkedin." border ="0" width ="32" height ="32"/></a>
								<a href="http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=5747687"><img src="css/img/cp-32.png" title="View my CodeProject Articles." border ="0" width ="32" height ="32"/></a>
								<a href="http://twitter.com/am1tdutta"><img src="css/img/twitter-32.png"title="Follow me on Twitter." border ="0" width ="32" height ="32"/></a>                                
                                <a href="http://www.facebook.com/theAmit"><img src="css/img/fb-32.png" title="My facebook profile." border ="0" width ="32" height ="32"/></a>
                                
								
<!--                                <a href="http://bd.linkedin.com/pub/amit-dutta/16/ab6/136" >
                                    <img src="http://www.linkedin.com/img/webpromo/btn_viewmy_120x33.png" width="120" height="33"alt="View Amit Dutta's profile on LinkedIn"/>
                                </a>-->
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
