<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php
            include_once '../Statics/StaticFunctions.php';
        ?>
        <title>MapMe</title>
         <link rel="stylesheet" href="../css/img/TechJunkie.css" type="text/css" />
    </head>
    <body>
        <div id="wrap">

	<!--header -->
	<div id="header">

		<h1 id="logo-text"><a href="index.html" title=""><?php echo PAGE_HEADER; ?></a></h1>
		<p id="slogan"><?php echo SLOGAN; ?></p>

<!--		<form id="quick-search" action="index.html" method="get" >
			<p>
			<label for="qsearch">Search:</label>
			<input class="tbox" id="qsearch" type="text" name="qsearch" value="Search..." title="Start typing and hit ENTER" />
			<input class="btn" alt="Search" type="image" name="searchsubmit" title="Search" src="css/img/search.gif" />
			</p>
		</form>-->

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
                    <a name="TemplateInfo"></a>
                    <h2><strong>MapMe</strong></h2>
                    <p class="post-info"><a href="../education.php" class="hyperlink">Work Experience</a>, Personal Projects
                    </p>

                    <p>
                        I always wanted to display my current geographic location (<a href="http://en.wikipedia.org/wiki/Latitude" class="hyperlink">latitude</a>,  <a href="http://en.wikipedia.org/wiki/Longitude" class="hyperlink" >longitude</a>) 
                         in my website which is the main inspiration behind developing MapMe, a J2ME application which can grab latitude and longitude from gps, use web services to save them in
                        database and also can display the position in mobile using google map (Like "My Location" feature of google maps mobile). Now, here is how MapMe works with this website:
                        <ol>
                            <li>Grab location from gps and save it in database using REST based web services.</li>
                            <li>In my home page, a javascript timer is responsible to fetch data and update my location in the map using ajax calls</li>
                            <li>As the timer is running, if someone is visiting my <a href="../index.php" class="hyperlink">homepage</a> and I save my location
                                from my mobile, visitor will experience a sudden change in the map. Isn't that cool? :) And also, anyone can know my current
                                location anytime from my website as I keep updating my location using <a href="mapme.php" class="hyperlink" >MapMe</a>.</li>
                        </ol>
                    </p>

                    <h3>Development platform</h3>
                    <p>J2ME, PHP, JavaScript (<a href="http://jquery.com/" class="hyperlink">jQuery</a>)</p>
                        

<!--                    <p><strong> <span style="font-size: 14px;">View Screenshots</span></strong><br/>
                        <a rel="example_group" href="1-Server and Login.jpg" title="Chat Server and LogIn"><img alt="" src="1-LogIn_small.jpg"/></a>
                        <a rel="example_group" href="2-ChatWindow.jpg" title="Main Chat Window"><img alt="" src="2-ChatWindow_small.jpg" /></a>
                        <a rel="example_group" href="3-MultipleChatWindow.jpg" title="Multiple Users"><img alt="" src="3-MultipleChatWindow_small.jpg" /></a>
                        <a rel="example_group" href="4-PrivateChat.jpg" title="Private Chat"><img alt="" src="4-PrivateChat_small.jpg" /></a>
                    </p>-->

                    <h3>Source code</h3>
                    <p>
                        Download source code of MapMe and server side php code <a href="../Files/MapMe_all.zip" class="hyperlink">here</a>. Please read
                        instructions.txt file for setup.
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
