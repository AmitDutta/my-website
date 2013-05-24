<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <?php
        include_once 'Statics/StaticFunctions.php';
        printHeader("Amit's world");
    ?>
   <script type="text/javascript" src="http://www.google.com/jsapi?key=ABQIAAAAQo3Z34xa-XpPgSnedfvDvhSRbwlFkjvaX2DEjohWzWeLWFX8PxRCppfcsK8Y56qDrYquk-NU_oAing"></script>
    <script type="text/javascript" charset="utf-8">
        google.load("maps", "2.x");
    </script>
    <script type="text/javascript" src="js/jquery.timers-1.2.js"></script>
    <script  type="text/javascript">
        $(function(){
            var jsonUrl = "Functions/getLatLon.php";            
            var myLocation,map,marker,lat,lon;
            lat = lon = -1;

            $.ajaxSetup({cache: false});            

            $('#sidebar ul').oneTime("1s",'timerOneTime',function(i)
            {
                $.getJSON(jsonUrl,{ action: "getCurrentLocation"}, function(data)
                    {
                        // first call: load the data
                        lat = data.lat;
                        lon = data.lon;
                        var text = data.lat + ' ,' + data.lon;
                        //$('#liLatLon').html(text);
                        map = new GMap2(document.getElementById('mapDiv'));
                        $("#message").appendTo(map.getPane(G_MAP_FLOAT_SHADOW_PANE));
                        map.addControl(new GSmallMapControl());
                        myLocation = new GLatLng(data.lat,data.lon);
                        map.setCenter(myLocation, 15);
                        marker = new GMarker(myLocation);
                        map.addOverlay(marker);
                        //$("#message").html(text);
                        //var markerOffset = map.fromLatLngToDivPixel(marker.getLatLng());
                        //$("#message").show().css({ top:markerOffset.y, left:markerOffset.x });
                        //text='Last synched <span style="font-size: 11px"><strong>' + data.time +'</strong></span>';
                        text ='My current (<a href="http://en.wikipedia.org/wiki/Latitude" class="hyperlink">latitude</a>, <a href="http://en.wikipedia.org/wiki/Longitude" class="hyperlink" >longitude</a>) is '
                        + '(' +lat+', '+lon+') recorded '+ data.time +
     ' using <a href="WorkExperience/mapme.php" class="hyperlink">MapMe</a>.<a href=gpsTraces.php class="hyperlink"> Browse my Gps traces history!</a>';
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
                        if((lat != data.lat || lon != data.lon) && map != null)
                        {
                            lat = data.lat;
                            lon = data.lon;							
                            //map = new GMap2(document.getElementById('mapDiv'));
                            //map.addControl(new GSmallMapControl());
                            myLocation = new GLatLng(lat,lon);
                            map.setCenter(myLocation, 15);
                            if(marker != null)
                                {
                                    map.removeOverlay(marker);
                                }
                            marker = new GMarker(myLocation);
                            map.addOverlay(marker);
                            var text = data.lat + ' ,' + data.lon;
                            //$('#liLatLon').html(text);
                            $("#message").html(text);                            
                            //var markerOffset = map.fromLatLngToDivPixel(marker.getLatLng());
                            //$("#message").show().css({ top:markerOffset.y, left:markerOffset.x });
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
			
		<!--<form id="quick-search" action="index.html" method="get" >
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
			<li id="current"><a href="index.php">Home</a></li>
			<li><a href="education.php">Education</a></li>
			<li><a href="research.php">Research</a></li>
			<li><a href="WorkExperience/vizrt.php">Work experience</a></li>
			<li><a href="resume.php">Resume</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
	<!-- navigation ends-->	
	</div>					
			
	<!-- content-wrap starts -->
	<div id="content-wrap">
	
		<div id="main">
			<h2><a href="index.php" title="" class="hyperlink">Amit's home</a></h2>			
                        <div class="picture left" style="width:152px;"> <img src="css/img/amit's.jpg" width="150" height="110" /></div>
            <p>Welcome to my internet home. I am <strong>Amit Dutta</strong>, from Dhaka, Bangladesh.
                I received my <strong>Bachelor of Science in Computer Science & Engineering (CSE)</strong> from <a href="http://www.buet.ac.bd/cse/" class="hyperlink">Bangladesh University of Engineering and Technology (BUET)</a> in Octobor, 2009.
                My primary research interest is in Software Engineering.
            </p>
                        <p>
                            I find immense pleasure and amusement in designing and developing complex software systems. Innovation is
                            my passion, I always seek the answers of those questions which is yet to be answered. Apart from that, I spend my
                            leisure time surfing internet, watching movies and sports (especially Cricket and Soccer). I also love to pass my
                            leisure in gossiping with my friends and families.
                        </p>
		<!-- main ends -->	
		</div>
				
		<div id="sidebar">
                    <h3>Here I am right now !!</h3>
			<ul class="sidemenu">
                            <div id ="mapDiv" style=" width: 233px; height: 180px; top: 2px; padding: 7px 10px;"></div>
				<p id="info"></p>            
			</ul>  				
		</div>		
		
	<!-- content-wrap ends-->	
	</div>
		<div id="message"style="display:none; position:absolute; background:#555; color:#fff; width:96px; filter:alpha(opacity=60);
-moz-opacity: 0.6;opacity: 0.6;padding: 2px;font-size: 11px;text-align: center;"></div>
	<!-- footer starts -->
	<div id="footer-wrap"><div id="footer-content">
		<div id="footer-bottom">
			<p>
			&copy; <?php echo COPYRIGHT_YEAR; ?>  <strong><?php echo COPYRIGHT_NAME; ?></strong> &nbsp;&nbsp;&nbsp;&nbsp;
			<a href="http://www.stylishtemplate.com/" title="Website Templates" class="hyperlink">website templates</a> by <a href="http://www.styleshout.com/">styleshout</a>
                        </p>
		</div>
    <!-- footer ends-->
    </div></div>
</div>
	

</body>
</html>
