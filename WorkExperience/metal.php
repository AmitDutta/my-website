<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <?php
        include_once '../Statics/StaticFunctions.php';
    ?>
    <title>Metal(Pvt) Ltd</title>
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
				<a href="http://www.linkedin.com/in/am1tdutta/"><img src="../css/img/linkedin-32.png" title="View my profile on Linkedin." style="margin-top:9px;" border ="0" width ="32" height ="32"/></a>
				<a href="http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=5747687"><img src="../css/img/cp-32.png"  style="margin-top:9px;" border ="0" width ="32" height ="32" title="View my CodeProject Articles." /></a>						
			</li>	
		</ul>
	<!-- navigation ends-->
	</div>

	<!-- content-wrap starts -->
	<div id="content-wrap">

		<div id="main">
                    <h2><a href="http://www.themetalbd.com/" title="" class="hyperlink">Website for Metal(Pvt) Ltd</a></h2>
                    <p class="post-info"><a href="../WorkExperience/vizrt.php" class="hyperlink">Work Experience</a>, Freelance Projects
                    </p>
                    <p>
                        The <a href="http://www.themetalbd.com" class="hyperlink">Metal (pvt) Ltd</a>. is one of the pioneer of mechanized cultivation in Bangladesh. We have developed website
                        for <a href="http://www.themetalbd.com" class="hyperlink">Metal (pvt) Ltd</a> Ltd as a freelance project. The website is located at 
                        <a href="http://www.themetalbd.com" class="hyperlink">http://www.themetalbd.com</a>.

                        <h3>Main Functionalities:</h3>
                        <ul>
                            <li>Organogram</li>
                            <li>Product and product details</li>
                            <li>Urban outlets and outlet detail</li>
                            <li>Stock entry</li>
                            <li>Sell entry</li>
                            <li>Stock view</li>
                            <li>Sell view</li>
                            <li>Year Wise sales chart</li>
			</ul>
                        <h3>Development platform:</h3>
                        <p>
                            PHP, MySQL, JavaScript
                        </p>
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
