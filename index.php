<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <?php
        include_once 'Statics/StaticFunctions.php';
        printHeader("Amit's world");
    ?>
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34256439-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

	</script>
    <!-- <script type="text/javascript" src="http://www.google.com/jsapi?key=ABQIAAAAQo3Z34xa-XpPgSnedfvDvhSRbwlFkjvaX2DEjohWzWeLWFX8PxRCppfcsK8Y56qDrYquk-NU_oAing"></script> 
    <script type="text/javascript" charset="utf-8">
        google.load("maps", "2.x");
    </script> -->
	<script type="text/javascript"
        src="http://maps.google.com/maps/api/js?sensor=false">
    </script>
    <script type="text/javascript" src="js/default.js"></script>
    <script type="text/javascript" src="js/jquery.timers-1.2.js"></script>
    <script  type="text/javascript">
        $(function(){
            var jsonUrl = "Functions/getLatLon.php";            
            var myLocation,map,marker,lat,lon;
            lat = lon = -1;
	    time = "";
            $.ajaxSetup({cache: false});            

            $('#sidebar ul').oneTime("1s",'timerOneTime',function(i)
            {
                $.getJSON(jsonUrl,{ action: "getCurrentLocation"}, function(data)
                    {
                        lat = data.lat;
                        lon = data.lon;
                        var text = data.lat + ' ,' + data.lon;
                        var latlng = new google.maps.LatLng(lat, lon);
                        var options = {
                          zoom: 15,                          
                          center: latlng,
                          mapTypeId: google.maps.MapTypeId.ROADMAP,
                          mapTypeControl: false,
                          zoomControl: true,
                          zoomControlOptions: {
                            style: google.maps.ZoomControlStyle.SMALL
                          },
                          streetViewControl: false
                        };
                        map = new google.maps.Map(document.getElementById('mapDiv'), options);
                        marker = new google.maps.Marker({
                           position: latlng 
                        });
                        marker.setMap(map);
                        /* // Google Map 2.0
                        map = new GMap2(document.getElementById('mapDiv'));
                        $("#message").appendTo(map.getPane(G_MAP_FLOAT_SHADOW_PANE));
                        map.addControl(new GSmallMapControl());
                        myLocation = new GLatLng(data.lat,data.lon);
                        map.setCenter(myLocation, 15);
                        marker = new GMarker(myLocation);
                        map.addOverlay(marker); */                        
                        text ='My current (<a href="http://en.wikipedia.org/wiki/Latitude" class="hyperlink">latitude</a>, <a href="http://en.wikipedia.org/wiki/Longitude" class="hyperlink" >longitude</a>) is '
                        + '(' +lat+', '+lon+') recorded '+ data.time +
     ' using <a href="http://www.codeproject.com/KB/mobile/MapMe.aspx" target="_BLANK" class="hyperlink">MapMe</a>.<a href=gpsTraces.php class="hyperlink"> Browse my Gps traces history!</a>';
                        $("#info").html(text);
                    }
                );
            });

            $('#sidebar ul').everyTime("5s",'timerEveryTime',function(i)
            {
                $.getJSON(jsonUrl,{ action: "getCurrentLocation"}, function(data)
                    {
                        // need to check if the record changed
						// alert(data.lat);
                        if((lat != data.lat || lon != data.lon || time != data.time) && map != null)
                        {
                            lat = data.lat;
                            lon = data.lon;	
			    time = data.time;		
                            var latlng = new google.maps.LatLng(lat, lon);
                            if (marker != null)
                                {
                                    marker.setMap(null);
                                }
                            map.setCenter(latlng);
                            marker = new google.maps.Marker({
                               position: latlng 
                            });
                            marker.setMap(map);                          
                            /*
                            //map = new GMap2(document.getElementById('mapDiv'));
                            //map.addControl(new GSmallMapControl());
                            myLocation = new GLatLng(lat,lon);
                            map.setCenter(myLocation, 15);
                            if(marker != null)
                                {
                                    map.removeOverlay(marker);
                                }
                            marker = new GMarker(myLocation);
                            map.addOverlay(marker); */
                            var text = data.lat + ' ,' + data.lon;                            
                            $("#message").html(text);                                                        
                            text ='My current (<a href="http://en.wikipedia.org/wiki/Latitude" class="hyperlink">latitude</a>, <a href="http://en.wikipedia.org/wiki/Longitude" class="hyperlink" >longitude</a>) is '
                        + '(' +lat+', '+lon+') recorded '+ data.time +
     ' using <a href="Personal/MapMe/mapme.php" class="hyperlink">MapMe</a>.<a href=gpsTraces.php class="hyperlink"> Browse my Gps traces history!</a>';
                            $("#info").html(text);
                        }
                    }
                );
            });             		              		
          });
    </script>
</head>

<body>
<!-- wrap starts here -->
<div id="wrap">

	<!--header -->
	<div id="header">			
				
		<h1 id="logo-text"><a href="index.php" title=""><?php echo PAGE_HEADER; ?></a></h1>
		<p id="slogan"><?php echo SLOGAN; ?></p>
		<form id="quick-search" action="search.php" method="get" >
			<input class="tbox" type="text" name="q" title="Start typing and hit ENTER" value="Search amitdutta.net"/>
			<!-- <input class="btn" alt="Search" type="image" src="css/img/search.gif" /> -->
			<input type="submit" id="search-submit" value=""
    style="margin-top: 4px; margin-left: 8px; background-image: url(css/img/search.gif); border: solid 0px #000000; width: 25px; height: 25px;" />			
		</form>
			
	<!--header ends-->					
	</div>
		
	<!-- navigation starts-->	
	<div  id="nav">
		<ul>
			<li id="current"><a href="index.php">Home</a></li>
			<li><a href="education.php">Education</a></li>
			<li><a href="research.php">Research</a></li>
			<li><a href="WorkExperience/vizrt.php">Work experience</a></li>
			<li><a href="cv.php">CV</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li>
				<a href="http://www.linkedin.com/in/am1tdutta/" target="_BLANK"><img src="css/img/linkedin-32.png" title="View my profile on Linkedin." style="margin-top:9px;" border ="0" width ="32" height ="32"/></a>
				<a href="http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=5747687" target="_BLANK"><img src="css/img/cp-32.png"  style="margin-top:9px;" border ="0" width ="32" height ="32" title="View my CodeProject Articles." /></a>						
			</li>	
		</ul>		
	<!--navigation ends-->	
	</div>					
			
	<!-- content-wrap starts -->
	<div id="content-wrap">
	
		<div id="main">
			<h2><a href="index.php" title="" class="hyperlink">One-Page Bio</a></h2>			
                        <div class="picture left" style="width:152px;"> <img src="css/img/amit.jpg" width="150" height="138" /></div>
            <p>Welcome to my internet home. I am <strong>Amit Dutta</strong>, from Dhaka, Bangladesh.
                I received my <strong>Bachelor of Science in Computer Science & Engineering (CSE)</strong> from <a href="http://www.buet.ac.bd/cse/" class="hyperlink">Bangladesh University of Engineering and Technology (BUET)</a> in October, 2009. Currently, I am a Master's student in <a href="http://www.cis.uab.edu/" class="hyperlink" target="_BLANK">Computer and Information Sciences department</a> at <a href="http://www.uab.edu/home/" class="hyperlink" target="_BLANK">The University of Alabama at Birmingham</a>.
            </p>
                <p>
                    My primary research interest is in <strong>Security and Privacy in Cloud Computing</strong>,
                    <strong>Digital Data Waste</strong> and <strong>Software Engineering and Evolution, Software Reliability and Security</strong>. My undergraduate research topic 
                    was <strong>Bioinformatics</strong> and I worked to find <a href="Research/BinaryTernary.php" class="hyperlink">minimum number
                    of prefix transpositions required to sort and group binary and ternary strings</a> (Paper accepted at <a href="http://www.world-academy-of-science.org/worldcomp10/ws/conferences/biocomp10" class="hyperlink">BIOCOMP'10</a>,
                    poster accepted at <a href="http://cs.nyu.edu/parida/APBC2010/" class="hyperlink">APBC2010</a>). I was supervised by <a href="http://www.buet.ac.bd/cse/faculty/facdetail.php?id=masudhasan" class="hyperlink">Dr. Masud Hasan</a> and 
                    <a href="http://www.buet.ac.bd/cse/faculty/facdetail.php?id=msrahman" class="hyperlink">Dr. M. Sohel Rahman</a>.
                </p>	
                <p>
                     My Professional Development career started with a <a href="Projects/SystemAnalysis/SystemAnalysis.php" class="hyperlink">freelance project</a> while I was a third year student 
                     of Computer Science. Since then, I am involved in several Software Development projects and had 
                     the opportunity to work in every phase of Software Development Life Cycle. Today, I have <strong>three 
                     years</strong> of experience in industry with expertise mainly in <strong>Requirement Gathering & Analysis</strong>, 
                     <strong>Design & Develop Applications</strong>, <strong>User Experience Engineer Role</strong>, <strong>Refactor and Integrate Systems</strong> and
                     <strong>adopt different development process</strong> like <a href="http://en.wikipedia.org/wiki/Agile_software_development" class="hyperlink" target="_BLANK">Agile</a> 
                     (e.g. <a href="http://en.wikipedia.org/wiki/Scrum_%28development%29" class="hyperlink" target="_BLANK">Scrum</a>) and 
                     <a href="http://en.wikipedia.org/wiki/IBM_Rational_Unified_Process" class="hyperlink" target="_BLANK">Rup</a>. 
                     My notable works include <a href="WorkExperience/vizrt.php" class="hyperlink">Media framework 
                     and media logger application development at Vizrt,</a> 
                     <a href="WorkExperience/qi.php" class="hyperlink">Social network/email relationship visualizer at QI</a>, 
                     <a href="WorkExperience/axiata.php" class="hyperlink">Web based chat client at Axiata</a> and 
                     <a href="WorkExperience/bq.php" class="hyperlink">few desktop apps for Binary Quest</a>. 
                     Have a look at my detailed work experience <a href="WorkExperience/vizrt.php" class="hyperlink">here</a>
                     and professional profile <a href="http://bd.linkedin.com/in/am1tdutta/" target="_BLANK" class="hyperlink">here</a>.
                </p>
                        <p>
                            In my <a href="education.php" class="hyperlink">Undergraduate studies</a>, I always looked for innovative and non-trivial projects. 
                            My project <a href="Projects/BoishakhiMela/BoishakhiMela.php" class="hyperlink">3D visualization of Baishakhi mela</a>
                            was selected as one of the best projects in Computer Graphics class.
                            Amongst other projects <a href="Projects/Ecg/Ecg.php" class="hyperlink">Wireless ECG</a>, 
                            <a href="Projects/SystemAnalysis/SystemAnalysis.php" class="hyperlink">Media Agency Management System</a>,
                            <a href="Projects/Networking/Network.php" class="hyperlink">Network & DataLink layer implementation(Code)</a>,
                            <a href="Projects/OS/Nachos.php" class="hyperlink">Multitasking, System Call and Virtual Memory implementation in Nachos</a>,
                            <a href="Projects/Compiler/PascalCompiler.php" class="hyperlink">simplified Pascal compiler</a>,
                            <a href="Projects/Tsr/Tsr.php" class="hyperlink">Screensaver for DOS</a>, <a href="Projects/Messenger/Messenger.php" class="hyperlink">Messengar</a>
                            are most notable. You can start browsing (<strong>screenshots</strong>, <strong>video demonstration</strong>, <strong>presentations</strong>, <strong>schematics</strong> and <strong>source codes</strong> available)
                            my Undergraduate Projects <a href="education.php" class="hyperlink">here</a>.
                        </p>
                        <p>
                            In my leisure, I like to enjoy movies, gossip with my family and friends. 
                            I am an avid fan of West Indian Cricket (<a href="http://en.wikipedia.org/wiki/Brian_Lara" class="hyperlink">Brian Lara</a> in particular). 
                        </p>
		<!-- main ends -->	
		</div>
				
		<div id="sidebar">
                    <!-- <h3>Here I am right now !!</h3> -->
                    <div style="margin-top: 22px; margin-left: 6px;">
                        <span style="font-size: large;color: #115280;">Here I am right now!</span>
                        <span style="font-size: small; font-weight: bold;">&nbsp;<a href="http://www.codeproject.com/KB/mobile/MapMe.aspx" target="_BLANK" class="hyperlink">See how</a></span>
                    </div>
			<ul class="sidemenu">
                            <div id ="mapDiv" style=" width: 233px; height: 180px; top: 2px; padding: 7px 10px;"></div>
                            <div id="info" style="margin-left: 0px;"></div>      
			</ul>  				
		</div>		
		
	<!-- content-wrap ends-->	
	</div>
		<div id="message"style="display:none; position:absolute; background:#555; color:#fff; width:96px; filter:alpha(opacity=60);
-moz-opacity: 0.6;opacity: 0.6;padding: 2px;font-size: 11px;text-align: center;"></div>
	<!-- footer starts -->
	<?php include 'Statics/footer.php'; ?>
</div>
	

</body>
</html>
