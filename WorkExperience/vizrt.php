<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <?php
        include_once '../Statics/StaticFunctions.php';
    ?>    
    <title>Vizrt</title>
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
                    <h2><a href="http://www.vizrt.com/" title="" class="hyperlink">Vizrt</a></h2>
                    <p class="post-info"><a href="../WorkExperience/vizrt.php" class="hyperlink">Work Experience</a>, Professional Experience
                    </p>

                    <p>
                        <a href="http://www.vizrt.com/" title="" class="hyperlink">Vizrt</a> is a software company creates leading-edge content production tools for the digital media industry - from award-winning 3D graphics &
                        maps through integrated video workflow solutions and online publishing tools. Vizrt software is used by many of the world's broadcasters and publishing houses, including: Aljazeera, CNN, CBS, Fox, BBC, Sky, 
                        ITN, ZDF, Star TV, Network 18, TV Today, CCTV, NHK, The Globe and Mail, The Telegraph, Die Welt Online, and GMA Network. I joined as a Software Engineer in <a href="http://www.vizrt.com/about/contact_us/" class="hyperlink">Vizrt Bangladesh</a> at May, 2010. Here I
                        am working in <a href="http://www.vizrt.com/products/viz_media_logger/" class="hyperlink">Viz Media Logger</a> application which is used to track media files in Media Asset Management System, media framework and reusable component development. Technologies: C#, C++, WPF, WCF based RESTFUL web services, Bazaar, Visual Studio 2010,
                        Prod(Our custom software configuration management system) and JIRA.

                        <h3>Key responsibilities</h3>
                        <ul>
                            <li>Perform product design related research, conducting workshop to build mock user interfaces with small blocks of paper and defining interactions between different blocks and modules.</li>
                            <li>Developing reusable components (e.g. media player, media time code control, GUI rendering from XML specification etc.) and a media plug-in in Vizrt's proprietary media framework to render D3DImage in WPF surface so that the Video Player can support overlays.</li>
							<li>Developing custom controls in WPF, generate stub classes from WADL (Web Application Description Language) specification and coded corresponding serialization, authorization functionality, writing unit/integration test cases.</li>
                            <li>Writing Tests (unit, functional, integration and UI mock up tests).</li>
                            <li>As an active <a href="http://en.wikipedia.org/wiki/Scrum_%28development%29" class="hyperlink">Scrum</a> team developer, participate in various Scrum activities(Sprint planning, retrospective,  daily stand-up Scrum meeting).</li>
                            <li>Write & document code strictly following pre defined coding convention.</li>
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
