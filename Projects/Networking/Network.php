<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>
        <?php
            include_once '../../Statics/StaticFunctions.php';
        ?>
        <title>OSI Network & Data link layer implementation</title>
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
                    <h2>OSI Network & Data link layer implementation</h2>
                    <p class="post-info"><a href="../education.php" class="hyperlink">Education</a>, Undergraduate Projects
                    </p>
                        
                    <p>
                        As a Computer Networks Sessional project, first I implemented <strong>Data Link Layer</strong>.
                        Here <a href="http://en.wikipedia.org/wiki/Bit_stuffing" class="hyperlink">Bit stuffing</a> and
                        <a href="http://en.wikipedia.org/wiki/Cyclic_redundancy_check" class="hyperlink">Cyclic redundancy check (CRC)</a>
                        was developed for framing and error detection, correction respectively. Then, <strong>Network Layer</strong>
                        was implemented using this <strong>Data Link Layer</strong>. At <strong>Network Layer</strong>, we wrote code to
                        implement <a href="http://en.wikipedia.org/wiki/Link-state_routing_protocol" class="hyperlink"> Link state routing</a>
                        protocol.
                    </p>

                    <p><strong> <span style="font-size: 14px;">Development platform</span></strong><br/>
                        This project was developed in Java using <a href="http://java.sun.com/products/javacomm/" class="hyperlink">Java Communication API.</a>
                     </p>

                    
                    <p><strong> <span style="font-size: 14px;">Source code</span></strong><br/>
                        Download source code of and set up instructions of <a href="http://java.sun.com/products/javacomm/" class="hyperlink">Java Communication API</a> for this project <a href="../../Files/NetworkLayer.zip" class="hyperlink">here.</a>
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
