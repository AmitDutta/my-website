<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Trace Me!</title>
		<link type="text/css" href="css/ui-lightness/jquery-ui-1.7.2.custom.css" rel="stylesheet" />
                <script type="text/javascript" src="http://www.google.com/jsapi?key=ABQIAAAAQo3Z34xa-XpPgSnedfvDvhSRbwlFkjvaX2DEjohWzWeLWFX8PxRCppfcsK8Y56qDrYquk-NU_oAing"></script>
		<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
                <script type="text/javascript" charset="utf-8">
                    google.load("maps", "2.x");
                </script>
                
		<script type="text/javascript">
			$(function(){				
                            var baseUrl = "Functions/getLatLon.php";
                            var dateFormat = 'yy-mm-dd';
                            var map, marker;
                            var markers = [];
                            var records = [];
                            var index = -1;
                            map = new GMap2(document.getElementById('mapDiv'));
                            map.addControl(new GSmallMapControl());
                            var center = new GLatLng(23.7804, 90.404);
                            map.setCenter(center, 10);
                            $.ajaxSetup({cache: false});

                            $("#next").click(function(){
                                if (markers.length > 0)
                                    {
                                        if (index >= markers.length - 1)
                                                {
                                                    return;
                                                }
                                            index++;
                                            displayPoint(markers[index], records[index]);
                                            
                                    }});

                            $("#previous").click(function(){
                                if (markers.length > 0)
                                    {
                                        if (index <= 0)
                                                {
                                                    return;
                                                }
                                                index = index - 1;
                                            displayPoint(markers[index], records[index]);                                            
                                    }});

                            $( "#datepicker" ).datepicker({
                                onSelect: function(dateText, inst){
                                    var jsonUrl = baseUrl + "?action=getLocationByDate&date=" + dateText;
                                    $.getJSON(jsonUrl, function(json){                                        
                                        map.clearOverlays();
                                        markers = [];
                                        records = [];
                                        index = -1;
                                        $.each(json, function(key, value){                                          
                                          var point = new GLatLng(value.lat, value.lon);                                          
                                          marker = new GMarker(point);
                                          map.addOverlay(marker);
                                          markers[key] = marker;
                                          records[key] = value;
                                        });
                                        $(markers).each(function(i,marker){
					GEvent.addListener(marker, "click", function(){
                                                displayPointAndUpdateIndex(marker, records[i], i);
						//displayPoint(marker, records[i]);
					});                                        
				});

                                    })
                                }});
                            $( "#datepicker" ).datepicker("option", "dateFormat",dateFormat);
                            $("#message").appendTo(map.getPane(G_MAP_FLOAT_SHADOW_PANE));
                            
                            function displayPointAndUpdateIndex(marker, record, i){
                                index = i;
                                displayPoint(marker, record);
                            }

                            function displayPoint(marker, record){
                              map.panTo(marker.getPoint());
                              var markerOffset = map.fromLatLngToDivPixel(marker.getPoint());
                              $("#message").show().css({ top:markerOffset.y, left:markerOffset.x }).html(record.time); 
                            }

                            function pause(milliseconds) {
                                    var dt = new Date();
                                    while ((new Date()) - dt <= milliseconds) { /* Do nothing */ }
                            }

			});
		</script>
		<style type="text/css">
			/*demo page css*/
			body{ font: 62.5% "Trebuchet MS", sans-serif; margin: 50px;}
			.demoHeaders { margin-top: 2em; }
			#dialog_link {padding: .4em 1em .4em 20px;text-decoration: none;position: relative;}
			#dialog_link span.ui-icon {margin: 0 5px 0 0;position: absolute;left: .2em;top: 50%;margin-top: -8px;}
			ul#icons {margin: 0; padding: 0;}
			ul#icons li {margin: 2px; position: relative; padding: 4px 0; cursor: pointer; float: left;  list-style: none;}
			ul#icons span.ui-icon {float: left; margin: 0 4px;}
                        #message { position:absolute; padding:5px; background:#555; color:#fff; width:60px; font-size: 13px; }
                        #toolbar {padding: 10px 4px;}

                </style>
	</head>
	<body>
	
		<!-- Datepicker -->		
                <div>
                    <h2 class="demoHeaders">Pick a date to see my GPS traces on that day !</h2>
                    <p>Date: <input id="datepicker" type="text"></p>
                    <button id="previous">Previous</button>
                    <button id="next">Next</button>                    
		<div align=" center" id ="mapDiv" style=" width: 500px; height: 500px;">
                </div>
                <div id="message" style="display:none;" />
                </div>	
	</body>
</html>

