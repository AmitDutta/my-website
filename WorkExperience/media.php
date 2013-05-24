<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <?php
        include_once '../Statics/StaticFunctions.php';
    ?>
    <title>Media agency management system</title>
    <link rel="stylesheet" href="../css/img/TechJunkie.css" type="text/css" />
         <script type="text/javascript" src="../js/jquery-1.3.2.min.js"></script>
         <script type="text/javascript" src="../js/fancybox/jquery.fancybox-1.3.1.pack.js"></script>
         <script type="text/javascript" src="../js/fancybox/jquery.easing-1.3.pack.js"></script>
         <script type="text/javascript" src="../js/fancybox/jquery.mousewheel-3.0.2.pack.js"></script>
         <link rel="stylesheet" href="../js/fancybox/jquery.fancybox-1.3.1.css" type="text/css" media="screen" />
         <script type="text/javascript">
		$(document).ready(function() {

			$("a[rel=example_group]").fancybox({
				'transitionIn'		: 'elastic',
				'transitionOut'		: 'elastic',
                                'speedIn'               :  600,
                                'speedOut'              :  200,
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});

		});
	</script>
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
                    <h2><a href="media.php" title="" class="hyperlink">Media Agency Management System</a></h2>
                    <p class="post-info"><a href="../WorkExperience/vizrt.php" class="hyperlink">Work Experience</a>, Freelance Projects
                    </p>
                    <p>
                        A <a href="http://en.wikipedia.org/wiki/Media_agency" class="hyperlink">media agency</a> is a company which help companies to communicate with current and potential consumers and/or the general public.
                        This software is a complete outdoor media management package developed for one of the largest media consulting group in Bangladesh,
                        <a href="http://maxusglobal.com/" class="hyperlink">MAXUS</a>.

                        <h3>Main Functionalities and Reports:</h3>
                        <ul>
                            <li><strong>Entry subsection</strong>
                                <ul>
                                    <li>Offer from supplier(Board such as bill board, shop sign, mega sign) entry, update, remove</li>
                                    <li>Bus branding, LED offer entry, update, remove</li>
                                    <li>Keypoint information entry, update</li>
                                    <li>Job description entry</li>
                                    <li>Supplier offer report</li>
                                    <li>Keypoint information report</li>
                                    <li>Supplier report</li>
                                </ul>
                            </li>
                            <li><strong>Implementation</strong>
                                <ul>
                                    <li>Propose a site(a site is a combination of board, bus and led)</li>
                                    <li>Proposal approval</li>
                                    <li>Proposal report</li>
                                    <li>Site status monitor</li>
                                    <li>Plan generation</li>
                                    <li>Plan edit, approval and print</li>
                                    <li>Workorder generation</li>
                                    <li>Workorder edit, approve and print</li>
                                    <li>Payorder generation</li>
                                    <li>Payorder edit, approve and print</li>
                                    <li>Bill creation and posting bill to accounts database</li>
                                    <li>Implementation report</li>
                                </ul>
                            </li>
                            <li><strong>Master entry section</strong>
                                <ul>
                                    <li>Area entry, update, delete</li>
                                    <li>District entry, update, delete</li>
                                    <li>Type entry, update, delete</li>
                                </ul>

                            </li>
                        </ul>
                        <h3>Benefits:</h3>
                        <ul>
                            <li>Streamlined outdoor media agency management system</li>
                            <li>From proposal to pay order creation, A systematic route is developed</li>
                            <li>Security for confidential information</li>
                            <li>Reports can be exported to MS Excel, Pdf, html and other formats</li>
                            <li>Integration with existing accounts software</li>
                            <li>Easy back up and recovery</li>
                        </ul>
                        <h3>Development platform:</h3>
                        <p>C# 2.0, Oracle 9i, Crystal reports</p>                    

                    <h3>View Screenshots</h3>
                        <a rel="example_group" href="../Projects/SystemAnalysis/1_b.JPG" title=""><img alt="" src="../Projects/SystemAnalysis/1_s.JPG"/></a>
                        <a rel="example_group" href="../Projects/SystemAnalysis/2_b.JPG" title=""><img alt="" src="../Projects/SystemAnalysis/2_s.JPG" /></a>
                        <a rel="example_group" href="../Projects/SystemAnalysis/3_b.JPG" title=""><img alt="" src="../Projects/SystemAnalysis/3_s.JPG" /></a>
                        <a rel="example_group" href="../Projects/SystemAnalysis/4_b.JPG" title=""><img alt="" src="../Projects/SystemAnalysis/4_s.JPG"/></a>
                        <a rel="example_group" href="../Projects/SystemAnalysis/5_b.JPG" title=""><img alt="" src="../Projects/SystemAnalysis/5_s.JPG" /></a>
                        <a rel="example_group" href="../Projects/SystemAnalysis/6_b.JPG" title=""><img alt="" src="../Projects/SystemAnalysis/6_s.JPG" /></a>
                        <a rel="example_group" href="../Projects/SystemAnalysis/7_b.JPG" title=""><img alt="" src="../Projects/SystemAnalysis/7_s.JPG"/></a>
                        <a rel="example_group" href="../Projects/SystemAnalysis/8_b.JPG" title=""><img alt="" src="../Projects/SystemAnalysis/8_s.JPG" /></a>
                        <a rel="example_group" href="../Projects/SystemAnalysis/9_b.JPG" title=""><img alt="" src="../Projects/SystemAnalysis/9_s.JPG" /></a>
                        <a rel="example_group" href="../Projects/SystemAnalysis/10_b.JPG" title=""><img alt="" src="../Projects/SystemAnalysis/10_s.JPG"/></a>
                        <a rel="example_group" href="../Projects/SystemAnalysis/11_b.JPG" title=""><img alt="" src="../Projects/SystemAnalysis/11_s.JPG" /></a>
                        <a rel="example_group" href="../Projects/SystemAnalysis/12_b.JPG" title=""><img alt="" src="../Projects/SystemAnalysis/12_s.JPG" /></a>
                        <a rel="example_group" href="../Projects/SystemAnalysis/13_b.JPG" title=""><img alt="" src="../Projects/SystemAnalysis/13_s.JPG"/></a>
                        <a rel="example_group" href="../Projects/SystemAnalysis/14_b.JPG" title=""><img alt="" src="../Projects/SystemAnalysis/14_s.JPG" /></a>
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
