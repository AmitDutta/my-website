<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>
        <?php
            include_once '../../Statics/StaticFunctions.php';
        ?>
        <title>Media agency management system</title>
         <link rel="stylesheet" href="../../css/img/TechJunkie.css" type="text/css" />
         <script type="text/javascript" src="../../js/jquery-1.3.2.min.js"></script>
         <script type="text/javascript" src="../../js/fancybox/jquery.fancybox-1.3.1.pack.js"></script>
         <script type="text/javascript" src="../../js/fancybox/jquery.easing-1.3.pack.js"></script>
         <script type="text/javascript" src="../../js/fancybox/jquery.mousewheel-3.0.2.pack.js"></script>
         <script type="text/javascript" src="../../js/default.js"></script>
         <link rel="stylesheet" href="../../js/fancybox/jquery.fancybox-1.3.1.css" type="text/css" media="screen" />
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
    </head>

   <body>
<!-- wrap starts here -->
<div id="wrap">

	<!--header -->
	<div id="header">

		<h1 id="logo-text"><a href="../../index.php" title=""><?php echo PAGE_HEADER; ?></a></h1>
		<p id="slogan"><?php echo SLOGAN; ?></p>
		<form id="quick-search" action="../../search.php" method="get" >
			<input class="tbox" type="text" name="q" title="Start typing and hit ENTER" value="Search amitdutta.net" />
			<!-- <input class="btn" alt="Search" type="image" src="css/img/search.gif" /> -->
			<input type="submit" id="search-submit" value=""
    		style="margin-top: 4px; margin-left: 8px; background-image: url(../../css/img/search.gif); border: solid 0px #000000; width: 25px; height: 25px;" />			
		</form>

	<!--header ends-->
	</div>

	<!-- navigation starts-->
	<div  id="nav">
		<ul>
			<li><a href="../../index.php">Home</a></li>
			<li id="current"><a href="../../education.php">Education</a></li>
			<li><a href="../../research.php">Research</a></li>
			<li><a href="../../WorkExperience/vizrt.php">Work experience</a></li>
			<li><a href="../../cv.php">CV</a></li>
			<li><a href="../../contact.php">Contact</a></li>

			<li>
				<a href="http://www.linkedin.com/in/am1tdutta/" target="_BLANK"><img src="../../css/img/linkedin-32.png" title="View my profile on Linkedin." style="margin-top:9px;" border ="0" width ="32" height ="32"/></a>
				<a href="http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=5747687" target="_BLANK"><img src="../../css/img/cp-32.png"  style="margin-top:9px;" border ="0" width ="32" height ="32" title="View my CodeProject Articles." /></a>						
			</li>			
		</ul>
	<!-- navigation ends-->
	</div>

	<!-- content-wrap starts -->
	<div id="content-wrap">

		<div id="main">
                    <a name="TemplateInfo"></a>
                    <h2>Media agency management system</h2>
                    <p class="post-info"><a href="../education.php" class="hyperlink">Education</a>, Undergraduate Projects
                    </p>

                    <p>
                        A <a href="http://en.wikipedia.org/wiki/Media_agency" class="hyperlink">media agency</a> is a company which help companies to communicate with current and potential consumers and/or the general public.
                        As CSE 406(System Analysis, Design and Development Sessional)term project, we (a team of 2 members) developed a media agency management software for a local media agency <a href="http://maxusglobal.com/" class="hyperlink">Maxus</a>
                        which deals with various radio, television, outdoor and newspaper advertisement. 

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

                    <h3>Presentation</h3>
                    <p>
                        The weekly presentations can be found below:
                        <ol>
                            <li><a href="../../Files/SadPresentations/Scope definition&Modules.pdf" class="hyperlink">Scope definition</a></li>
                            <li><a href="../../Files/SadPresentations/UseCase&Narratives.pdf" class="hyperlink">Use Case Diagram & Use Case Narrative</a></li>
                            <li><a href="../../Files/SadPresentations/Activity&ERD.pdf" class="hyperlink">Activity & E-R Diagram</a></li>
                            <li><a href="../../Files/SadPresentations/Class&SequenceDiagram.pdf" class="hyperlink">Collaboration Diagram, Class Diagram & Collaboration Diagram</a></li>
                            <li><a href="../../Files/SadPresentations/StateChartDiagram.pdf" class="hyperlink">Statechart Diagram</a></li>
                            <li><a href="../../Files/SadPresentations/UI&TestCaseDesign.pdf" class="hyperlink">User interface & test case design</a></li>
                        </ol>
                    </p>
                    </p>

                    <p><strong> <span style="font-size: 14px;">View Screenshots  (click to enlarge)</span></strong><br/>
                        <a rel="example_group" href="1_b.JPG" title=""><img alt="" src="1_s.JPG"/></a>
                        <a rel="example_group" href="2_b.JPG" title=""><img alt="" src="2_s.JPG" /></a>
                        <a rel="example_group" href="3_b.JPG" title=""><img alt="" src="3_s.JPG" /></a>
                        <a rel="example_group" href="4_b.JPG" title=""><img alt="" src="4_s.JPG"/></a>
                        <a rel="example_group" href="5_b.JPG" title=""><img alt="" src="5_s.JPG" /></a>
                        <a rel="example_group" href="6_b.JPG" title=""><img alt="" src="6_s.JPG" /></a>
                        <a rel="example_group" href="7_b.JPG" title=""><img alt="" src="7_s.JPG"/></a>
                        <a rel="example_group" href="8_b.JPG" title=""><img alt="" src="8_s.JPG" /></a>
                        <a rel="example_group" href="9_b.JPG" title=""><img alt="" src="9_s.JPG" /></a>
                        <a rel="example_group" href="10_b.JPG" title=""><img alt="" src="10_s.JPG"/></a>
                        <a rel="example_group" href="11_b.JPG" title=""><img alt="" src="11_s.JPG" /></a>
                        <a rel="example_group" href="12_b.JPG" title=""><img alt="" src="12_s.JPG" /></a>
                        <a rel="example_group" href="13_b.JPG" title=""><img alt="" src="13_s.JPG"/></a>
                        <a rel="example_group" href="14_b.JPG" title=""><img alt="" src="14_s.JPG" /></a>
                    </p>

                    

		</div>

		<div id="sidebar">
		    <h3>Graduate Projects</h3>
		    <ul class="sidemenu">
			<?php
                            echo loadGradProjectsFromProjectDir();
                        ?>
		    </ul>
                    <h3>Undergraduate Projects</h3>
                    <ul class="sidemenu">
			<?php
                            echo loadUnderGradProjectListForProjectDir();
                        ?>
                    </ul>
                </div>

	<!-- content-wrap ends-->
	</div>

	<!-- footer starts -->
	<?php include '../../Statics/footer.php'; ?>

<!-- wrap ends here -->
</div>

</body>
</html>
