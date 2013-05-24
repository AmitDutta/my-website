<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
            <?php
              include_once 'Statics/StaticFunctions.php';
              echo printHeader("My GPS traces");
            ?>
            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />            
            <title>My GPS traces</title>
            <script type="text/javascript" src="js/default.js"></script>
            <script type="text/javascript" src="http://www.google.com/jsapi?key=ABQIAAAAQo3Z34xa-XpPgSnedfvDvhSRbwlFkjvaX2DEjohWzWeLWFX8PxRCppfcsK8Y56qDrYquk-NU_oAing"></script>
            <link rel="stylesheet" href="css/img/TechJunkie.css" type="text/css" />
            <link type="text/css" href="css/redmond/jquery-ui-1.8.12.custom.css" rel="stylesheet" />	
            <script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
            <script type="text/javascript" src="js/jquery-ui-1.8.12.custom.min.js"></script>
            <script type="text/javascript" charset="utf-8">
                google.load("maps", "2.x");
            </script>
            <script type="text/javascript">
                    $(function(){
                            var date = new Date();
                            var currentMonth = date.getMonth();
                            var currentDate = date.getDate();
                            var currentYear = date.getFullYear();
                            var baseUrl = "Functions/getLatLon.php";
                            var dateFormat = 'yy-mm-dd';
                            var map, marker, timerId;
                            var markers = [];
                            var records = [];
                            var index = -1;                            
                            map = new GMap2(document.getElementById('mapDiv'));
                            // map.addControl(new GSmallMapControl());
                            map.addControl(new GMapTypeControl());
                            map.addControl(new GLargeMapControl3D());
                            //var center = new GLatLng(23.7804, 90.404);
							var center = new GLatLng(33.521, -86.807);
                            map.setCenter(center, 10);
                            $.ajaxSetup({cache: false});
                            $( "#datepicker" ).datepicker({
                                maxDate : new Date(currentYear, currentMonth, currentDate),
                                onSelect: function(dateText, inst){                                    
                                    // clear any #message div as well
                                    $("#message").hide();
                                    // stop if timer is running 
                                     if (timerId != null){
                                        clearInterval(timerId);                                            
                                    }
                                    
                                    if ($( "#play" ).text() == "Pause"){
                                        $("#play").click();
                                                                             
                                    }
                                    // loading new locations.
                                    var jsonUrl = baseUrl + "?action=getLocationByDate&date=" + dateText;
                                    $.getJSON(jsonUrl, function(json){                                        
                                        map.clearOverlays();                                        
                                        timerId = null;
                                        markers = [];
                                        records = [];
                                        index = -1;
										var dates = dateText.split("-");
										var year = parseInt(dates[0]);
										var month = parseInt(dates[1]);										
										var bd = new GLatLng(23.7804, 90.404);
										var us = new GLatLng(33.521, -86.807);
										if (year <= 2012) {
											if (month < 8) {
												map.setCenter(bd, 10);
											}
											else {
												map.setCenter(us, 10);
											}
										}
										else {
											map.setCenter(us, 10);
										}										
                                        $.each(json, function(key, value){                                          
                                          var point = new GLatLng(value.lat, value.lon);                                          
                                          marker = new GMarker(point);
                                          map.addOverlay(marker);
                                          markers[key] = marker;
                                          records[key] = value;
                                        });
                                        if (markers.length == 0){                                            
                                            $("#dialog-message").text("No Gps Trace is recorded for "+ dateText +
                                            ". Please try again. For example, May,15,2011 has a number of GPS traces."); 
                                            $( "#dialog-message" ).dialog('open');                
                                        }
                                        else{
                                            $(markers).each(function(i,marker){
                                            GEvent.addListener(marker, "click", function(){
                                                    displayPointAndUpdateIndex(marker, records[i], i);
                                                    //displayPoint(marker, records[i]);
                                            });
                                          });
                                        }                                        
                                    })
                                }});
                            $("#dialog-message").dialog({
                                autoOpen: false,
                                modal: true,
                                resizable: false,
                                buttons: {
                                    Ok: function(){
                                        $(this).dialog("close");
                                    }
                                }
                            });
                            
                            $("#dialog-help").dialog({
                                autoOpen: false,
                                width: 500,
                                modal: true,                                
                                buttons: {
                                    Ok: function(){
                                        $(this).dialog("close");
                                    }
                                }
                            });
                            
                            $( "#datepicker" ).datepicker("option", "dateFormat",dateFormat);                            
                            $("#message").appendTo(map.getPane(G_MAP_FLOAT_SHADOW_PANE));
                            //$( "#datepicker" ).css('font-size', 62.5%);
                            $( "#info" ).button({
                                text:false,
                                lable: "How to play",
                                icons: {
                                    primary: "ui-icon-lightbulb"
                                }
                            })
                            .click(function(){
                                $("#dialog-help").dialog('open');
                            })
                            $( "#beginning" ).button({
                                    text: false,
                                    label: "First trace",
                                    icons: {
                                            primary: "ui-icon-seek-start"
                                    }
                            })
                            .click(function(){
                            if (markers.length > 0)
                                {
                                    index = 0;
                                    displayPoint(markers[index], records[index]);
                                }
                            });
                            $( "#beginning-help" ).button({
                                    text: false,
                                    label: "First trace",
                                    icons: {
                                            primary: "ui-icon-seek-start"
                                    }
                            });                            
                            $( "#previous" ).button({
                                    text: false,
                                    label: "Previous trace",
                                    icons: {
                                            //primary: "ui-icon-seek-prev"
                                            primary: "ui-icon-triangle-1-w"
                                    }
                            })
                            .click(function(){
                                if (markers.length > 0)
                                    {
                                        if (index <= 0)
                                                {
                                                    return;
                                                }
                                                index = index - 1;
                                            displayPoint(markers[index], records[index]);                                            
                                    }});
                            $( "#previous-help" ).button({
                                    text: false,
                                    label: "Previous trace",
                                    icons: {
                                            //primary: "ui-icon-seek-prev"
                                            primary: "ui-icon-triangle-1-w"
                                    }
                            });
                            $( "#play" ).button({
                                    text: false,
                                    icons: {
                                            primary: "ui-icon-play"
                                    }
                            })
                            .click(function() {
                                    var options;
                                    if ( $( this ).text() == "Play" ) {
                                            options = {
                                                    label: "Pause",
                                                    icons: {
                                                            primary: "ui-icon-pause"
                                                    }
                                            };
                                            $( this ).button( "option", options );
                                            
                                            timerId = setInterval(function(){                                                
                                                if(markers.length > 0){                                                        
                                                        $('#forward').click();
                                                        if (index == markers.length - 1){                                                            
                                                            clearInterval(timerId);
                                                            timerId = null;
                                                            var option = {
                                                                label:"Play",
                                                                icons: {
                                                                    primary: "ui-icon-play"
                                                                }
                                                            };                                                            
                                                            $("#play").button( "option", option );
                                                        }
                                                    }                                            
                                                }, 3000);
                                            } else {
                                            options = {
                                                    label: "Play",
                                                    icons: {
                                                            primary: "ui-icon-play"
                                                    }
                                            };
                                            clearInterval(timerId);
                                            timerId = null;
                                            $( this ).button( "option", options );
                                    }
                                    
                            });
                            
                            $( "#play-help" ).button({
                                    text: false,
                                    icons: {
                                            primary: "ui-icon-play"
                                    }
                            })
                            .click(function() {
                                    var options;
                                    if ( $( this ).text() == "play" ) {
                                            options = {
                                                    label: "pause",
                                                    icons: {
                                                            primary: "ui-icon-pause"
                                                    }
                                            };
                                    } else {
                                            options = {
                                                    label: "play",
                                                    icons: {
                                                            primary: "ui-icon-play"
                                                    }
                                            };
                                    }
                                    $( this ).button( "option", options );
                            });
                            
                            
                            /* $( "#stop" ).button({
                                    text: false,
                                    icons: {
                                            primary: "ui-icon-stop"
                                    }
                            })
                            .click(function() {
                                    $( "#play" ).button( "option", {
                                            label: "play",
                                            icons: {
                                                    primary: "ui-icon-play"
                                            }
                                    });
                            }); */
                            $( "#forward" ).button({
                                    text: false,
                                    label: "Next trace",
                                    icons: {
                                            // primary: "ui-icon-seek-next"
                                            primary: "ui-icon-triangle-1-e"
                                    }
                            })
                            .click(function(){
                                if (markers.length > 0)
                                    {
                                        if (index >= markers.length - 1)
                                                {
                                                    return;
                                                }
                                            index++;
                                            displayPoint(markers[index], records[index]);
                                            
                                    }});
                            $( "#forward-help" ).button({
                                text: false,
                                label: "Next trace",
                                icons: {
                                        // primary: "ui-icon-seek-next"
                                        primary: "ui-icon-triangle-1-e"
                                }
                            });
                            $( "#end" ).button({
                                    text: false,
                                    label: "Last trace",
                                    icons: {
                                            primary: "ui-icon-seek-end"
                                    }
                            })
                            .click(function(){
                                if (markers.length > 0)
                                    {
                                        index = markers.length - 1;
                                        displayPoint(markers[index], records[index]);                                        
                                    }
                            });	
                            $( "#end-help" ).button({
                                    text: false,                                    
                                    label: "Last trace",
                                    icons: {
                                            primary: "ui-icon-seek-end"
                                    }
                            });
                            
                            function displayPointAndUpdateIndex(marker, record, i){
                                index = i;
                                displayPoint(marker, record);
                            }

                            function displayPoint(marker, record){
                              map.panTo(marker.getPoint());
                              var markerOffset = map.fromLatLngToDivPixel(marker.getPoint());
                              $("#message").show().css({ top:markerOffset.y, left:markerOffset.x }).html(record.time); 
                            }	                            
                    });
            </script>
            <style>
                #toolbar {
                        padding: 10px 4px;
                        
                }
                #message { position:absolute; padding:5px; background:#555; color:#fff; width:60px; font-size: 13px; }
	</style>

		
	</head>
    
	<body>	
            <div id="wrap">
                <div id="header">
                    <h1 id="logo-text"><a href="index.php" title=""><?php echo PAGE_HEADER; ?></a></h1>
                    <p id="slogan"><?php echo SLOGAN; ?></p>
                    <form id="quick-search" action="search.php" method="get" >
						<input class="tbox" type="text" name="q" title="Start typing and hit ENTER" value="Search amitdutta.net"/>
						<!-- <input class="btn" alt="Search" type="image" src="css/img/search.gif" /> -->
						<input type="submit" id="search-submit" value=""
    					style="margin-top: 4px; margin-left: 8px; background-image: url(css/img/search.gif); border: solid 0px #000000; width: 25px; height: 25px;" />			
					</form>
                </div>
                <div  id="nav">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="education.php">Education</a></li>
                        <li><a href="research.php">Research</a></li>
                        <li id="current"><a href="WorkExperience/vizrt.php">Work experience</a></li>
                        <li><a href="resume.php">Resume</a></li>
                        <li><a href="contact.php">Contact</a></li>
			<li>
				<a href="http://bd.linkedin.com/in/am1tdutta/"><img src="css/img/linkedin-32.png" title="View my profile on Linkedin." style="margin-top:9px;" border ="0" width ="32" height ="32"/></a>
				<a href="http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=5747687"><img src="css/img/cp-32.png"  style="margin-top:9px;" border ="0" width ="32" height ="32" title="View my CodeProject Articles." /></a>						
			</li>		
                    </ul>	
                </div>
                <div id="content-wrap-resume">     
                    <div id="resumeMain">                    
                        <h2><a href="gpsTraces.php">Pick a date to see my GPS traces on that day !</a></h2>
                        <p class="post-info"><a href="WorkExperience/vizrt.php" class="hyperlink">Work Experience</a>, Personal Projects
                        <br /><br />
                        <div style="text-align: center" >
                            <span id="toolbar" class="ui-widget-header ui-corner-all">
                                Date: <input id="datepicker" type="text"></input>
                                <button id="beginning">First trace</button>
                                <button id="previous">Previous trace</button>
                                <button id="play">Play</button>
                                <!--<button id="stop">stop</button>-->
                                <button id="forward">Next</button>
                                <button id="end">Last Trace</button>
                                <button id="info">How to use</button>
                            </span>  
                        </div>                        
                        <br />
                        <div id="dialog-message" title="No Data found">                                 
                        </div>
                        <div id="dialog-help" title="How to use" style="text-align: left">
                            <p>
                                1. Click the TextBox and pick a date from Datepicker. The traces will appear on the map.
                                Click a marker on the map (Zoom if necessary) to select a trace. For example, April, 7, 2012 has a number of GPS traces. 
                                <br />                                
                                2. Hit "First trace" <button id="beginning-help">First trace</button>
                                to see the first recorded trace of the day.
                                <br />
                                3. Hit "Previous trace" <button id ="previous-help">Previous trace</button>
                                to see the previous trace from currently selected trace.
                                <br />
                                4. Hit "Play-Pause" <button id="play-help">play</button> to automatically navigate through the traces.
                                <br />
                                5. Hit "Next trace" <button id ="forward-help">Previous trace</button>
                                to see the previous trace from currently selected trace.
                                <br />
                                6. Hit "Last trace" <button id="end-help">Last trace</button>                                
                                to see the last recorded trace of the day.                                
                            </p>                            
                        </div>
                        <div id ="mapDiv" style=" text-align: center;  width:830px; height:700px;">
                        </div>
                        <div id="message" style="display:none;">
                        </div>
                    </div>
                </div>
		<?php include 'Statics/footer.php'; ?>   
            </div>
        </body>
</html>

