<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
            <?php
              include_once 'Statics/StaticFunctions.php';
              echo printHeader("Search Results");
            ?>
            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />            
            <title>My GPS traces</title>
            <script type="text/javascript" src="http://www.google.com/jsapi?key=ABQIAAAAQo3Z34xa-XpPgSnedfvDvhSRbwlFkjvaX2DEjohWzWeLWFX8PxRCppfcsK8Y56qDrYquk-NU_oAing"></script>
            <link rel="stylesheet" href="css/img/TechJunkie.css" type="text/css" />
            <link type="text/css" href="css/redmond/jquery-ui-1.8.12.custom.css" rel="stylesheet" />
            <link rel="stylesheet" href="css/cse/default.css" type="text/css" />	
            <script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
            <script type="text/javascript" src="js/jquery-ui-1.8.12.custom.min.js"></script>
            <script type="text/javascript" charset="utf-8">
                google.load("maps", "2.x");
            </script>
            <script src="http://www.google.com/jsapi" type="text/javascript"></script>
            <script type="text/javascript">
	            function parseQueryFromUrl () {
	    			var queryParamName = "q";
	    			var search = window.location.search.substr(1);
	    			var parts = search.split('&');
	    			for (var i = 0; i < parts.length; i++) {
	    			  var keyvaluepair = parts[i].split('=');
	    			  if (decodeURIComponent(keyvaluepair[0]) == queryParamName) {
	    				return decodeURIComponent(keyvaluepair[1].replace(/\+/g, ' '));
	    			  }
	    			}
	    			return '';
	    		  }
	
	    		  google.load('search', '1', {language : 'en'});
	    		  google.setOnLoadCallback(function() {
	    			var customSearchOptions = {};  var customSearchControl = new google.search.CustomSearchControl(
	    			  '008587891438471167711:gu_lksrlgoq', customSearchOptions);
	    			customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
	    			customSearchControl.draw('mapDiv');
	    			var queryFromUrl = parseQueryFromUrl();
	    			if (queryFromUrl) {
	    			  customSearchControl.execute(queryFromUrl);
	    			}
	    		  }, true);
            </script>
		
	</head>
    
	<body>	
            <div id="wrap">
                <div id="header">
                    <h1 id="logo-text"><a href="index.php" title=""><?php echo PAGE_HEADER; ?></a></h1>
                    <p id="slogan"><?php echo SLOGAN; ?></p>
                    		<form id="quick-search" action="search.php" method="get" >
			<input class="tbox" type="text" name="q" />
			<!-- <input class="btn" alt="Search" type="image" src="css/img/search.gif" /> -->
			<input type="submit" id="search-submit" value=""
    style="margin-top: 4px; margin-left: 5px; background-image: url(css/img/search.gif); border: solid 0px #000000; width: 25px; height: 25px;" />			
		</form>
                </div>
                <div  id="nav">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="education.php">Education</a></li>
                        <li><a href="research.php">Research</a></li>
                        <li><a href="WorkExperience/vizrt.php">Work experience</a></li>
                        <li><a href="resume.php">Resume</a></li>
                        <li><a href="contact.php">Contact</a></li>
			<li>
				<a href="http://bd.linkedin.com/in/am1tdutta/"><img src="css/img/linkedin-32.png" title="View my profile on Linkedin." style="margin-top:9px;" width ="32" height ="32"/></a>
				<a href="http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=5747687"><img src="css/img/cp-32.png"  style="margin-top:9px;" width ="32" height ="32" title="View my CodeProject Articles." /></a>						
			</li>		
                    </ul>	
                </div>
                <div id="content-wrap-resume">     
                    <div id="resumeMain">                    
                        <h2>Search Results</h2>                        
                        <div id ="mapDiv" style="padding-right: 28px; padding-top: 20px">
                        </div>
                    </div>
                </div>
                <?php include 'Statics/footer.php'; ?>    
            </div>
        </body>
</html>