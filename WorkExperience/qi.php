<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <?php
        include_once '../Statics/StaticFunctions.php';
    ?>
    <title>Quantitative Intelligence, Inc</title>
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
                    <h2><a href="http://www.qianalysis.com/" title="" class="hyperlink">Quantitative Intelligence, Inc.</a></h2>
                    <p class="post-info"><a href="../WorkExperience/vizrt.php" class="hyperlink">Work Experience</a>, Professional Experience
                    </p>

                    <p>
                        QI is a stealth startup in developing enterprise software applications focused on analyzing business communications and relationship networks. In a line, QI
                        organizes ones relationships and emails. I have developed various features, fixed bugs as as an offshore Consultant (Software Engineer) at Quantitative Intelligence, Inc. (QI).
                        QI uses its Social Network Analysis (SNA) visualization algorithms, powered by NLP and AI technologies, to analyze relationship patterns within an organization by classifying electronic communication.
                        I studied SNA algorithms, understood how QI's relationship Map generation algorithms, implement and enhance functionalities in the Map.

                        <h3>Key responsibilities</h3>
                        <ul>
                            <li>Participate in product development research based on QI's proprietary Social Network Analysis(SNA) technology to improve QI's flagship relationship intelligence software.</li>
                            <li>Design and write efficient code to implement new features, rework/rebuild code for better maintainability, performance and testability. </li>
							<li>Integrated outlook meeting synchronization in QI, improved QI outlook add-on and relationship graph to implement this functionality.</li>
							<li>Improved and added features in QI core service, which archives, stages and clusters email and social networking data in relational database.</li>
							<li>Fixed various issues, improved group and event analysis in QI's relationship map.</li>
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
