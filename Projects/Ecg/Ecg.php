<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>
        <?php
            include_once '../../Statics/StaticFunctions.php';
        ?>
        <title>Wireless Ecg</title>
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

		<h1 id="logo-text"><a href="index.html" title=""><?php echo PAGE_HEADER; ?></a></h1>
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
                    <h2>Wireless <strong>Electrocardiogram(ECG)</strong> System</h2>
                    <p class="post-info"><a href="../education.php" class="hyperlink">Education</a>, Undergraduate Projects
                    </p>

                    <p><strong> <span style="font-size: 14px;">Motivation</span></strong><br/>
                        An <a href="http://en.wikipedia.org/wiki/Electrocardiography" class="hyperlink">Electrocardiogram(ECG)</a> is a medical diagnostic procedure produced by an electrocardiograph,
                        which records the electrical activity of the heart over time. Conventional ECG machines found at hospital & diagnostic centers are heavy weighted and need expert technician to operate.
                        Though ECG with these machines are much accurate and very precise they have some problems like their availability, costs etc. Heart patients need fast treatment and care. So, if it would possible to predict
                        any possible malfunction of heart by a less sophisticated but light weighted, highly available and easy to operate heart signal measuring device then it could save many people from future heart malfunction by prediction any abnormality
                        of heart in advance. Considering these issues, I along with four of my friends choose wireless Ecg as term project for CSE 408N course (Computer Interfacing Sessional).
                        We divided the system into two basic parts. One is: capturing human heart signal using bio sensors, reduce noise and amplify the signal by an analog circuit, convert the signal using ADC
                        and pass the signal to RF transmitter which will send the signal to receiver. In the receiver section: we had RF receivers which captures the signal, send that to Microcontroller which is
                        responsible to send the signal in Computer for visualization and processing. The whole system is described in the attached report.

                    </p>

                    <p><strong> <span style="font-size: 14px;">Development platform and tools</span></strong><br/>

                        We used bio sensor to capture signal, <a href="http://www.radiotronix.com/datasheets/datasheets/RCT-433-ASBRDatasheetrev1_4_0.pdf" class="hyperlink">RCT-433-ASBR</a> as wireless transmitter, <a href="http://www.radiotronix.com/datasheets/new/rcr-rp_um.pdf" class="hyperlink">RCR-433-ASBR</a> as wireless receiver,
                        <a href="http://www.atmel.com/atmel/acrobat/doc2486.pdf" class="hyperlink">ATmega8</a> microcontroller for analog to digital conversion and communication with computer. Microcontroller codes was written in C++ and a desktop application to read data from serial port
                        and draw ecg curve has been written in Java.
                        
                    </p>

                    <p><strong> <span style="font-size: 14px;">View Screenshots  (click to enlarge)</span></strong><br/>
                        <a rel="example_group" href="1_b.png" title="Block diagram"><img alt="" src="1_s.png"/></a>
                        <a rel="example_group" href="2_b.jpg" title="The system"><img alt="" src="2_s.jpg" /></a>
                        <a rel="example_group" href="3_b.png" title="Amplified and filtered heart signal found in oscilloscope using our analog circuit. This photo was taken after the end of 8th week of running term. (Middle of the September 2008)."><img alt="" src="3_s.png" /></a>
                        <a rel="example_group" href="4_b.jpeg" title="Final output(ECG curve) at computer."><img alt="" src="4_s.jpeg" /></a>
                        <a rel="example_group" href="5_b.jpg" title="Wireless Ecg team :)"><img alt="" src="5_s.jpg" /></a>
                    </p>

                    <p><strong><span style="font-size: 14px;">Presentation</span></strong><br/>
                        The project presentation can be found <a href="../../Files/Wireless ECG Presentation.pdf" class="hyperlink">here.</a>
                    </p>
                    <p><strong><span style="font-size: 14px;">Schematic</span></strong><br/>
                        The schematic of our prototype can be found <a href="../../Files/Wireless Ecg Schematic.pdf" class="hyperlink">here.</a>
                    </p>
                    <p><strong><span style="font-size: 14px;">Report</span></strong><br/>
                        The project report can be found <a href="../../Files/Wireless Ecg Report.pdf" class="hyperlink">here.</a>
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
