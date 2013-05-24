<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <?php
        include_once '../Statics/StaticFunctions.php';
    ?>
    <title>Axiata Bangladesh Limited</title>
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
                    <h2><a href="http://axiata.com/" title="" class="hyperlink">Axiata Bangladesh Limited</a></h2>
                    <p class="post-info"><a href="../WorkExperience/vizrt.php" class="hyperlink">Work Experience</a>, Professional Experience
                    </p>
		
                    <p>
                        Axiata (Bangladesh) Limited is a joint venture multinational telecommunication company formed between Axiata Group Berhad of Malaysia and NTT DOCOMO, INC.
                        (DOCOMO) of Japan. I joined Axiata as Sr. Programmer in Customer Systens, Technology Division at December, 2009. I developed a web based chat
                        software higher management can chat with general employees. Web based chat client,  anonymous log in, login privilege based UI, private message, smilies, flood control, realtime log viewing etc
                        were necessary features. I also developed a custom module in <a href="http://www.limesurvey.org/" class="hyperlink">LimeSurvey</a> (an open source survey system).  At Axiata, I mostly worked with Php, Ajax, MySQL, SQLite & Oracle. I also participated in a three day
                        traning on <a href="http://www.sap.com/solutions/sapbusinessobjects/large/business-intelligence/index.epx" class="hyperlink">SAP Business objects</a>. However, I resigned from Axiata  on May, 2010
                        to concentrate in software development projects.

                        <h3>Key responsibilities</h3>
                                <ul>
                                    <li>Design, develop softwares according to the requirements.</li>
                                    <li>Maintain existing softwares and database systems.</li>
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
