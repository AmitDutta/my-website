<?php
    include_once 'Constants.php';

    function printHeader($pageTitle)
    {
        echo '<title>'.$pageTitle.'</title>
         <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
         <meta name="author" content="Amit Dutta - amitdutta.net" />
         <meta name="description" content="I am Amit Dutta, a simple guy, with great passion for computer programming, mathematics and algorithms." />
         <meta name="keywords" content="amit dutta, software engineer, amit kumar dutta, java developer, dot net developer, software developer" />
         <meta name="robots" content="index, follow, noarchive" />
         <meta name="googlebot" content="noarchive" />
         <link rel="stylesheet" href="css/img/TechJunkie.css" type="text/css" />
         <script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>';
        
         //<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>';

         //<link type="text/css" href="css/ui-lightness/jquery-ui-1.7.2.custom.css" rel="stylesheet" />
         //<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
     }

     function loadUnderGradProjectListForMainDir()
     {
        /*echo '<li><a href="Projects/BoishakhiMela/BoishakhiMela.php">3D visualization of <strong>"Baishakhi Mela"</strong></a></li>
        <li><a href="Projects/Networking/Network.php">OSI <strong>Network</strong> & <strong>Data link</strong> layer implementation</a></li>
        <li><a href="Projects/Ecg/Ecg.php">Wireless <strong>ECG</strong></a></li>
        <li><a href="Projects/Microprocessor/Microprocessor.php">4/8 bit <strong>Microprocessor</strong> Design</strong></a></li>
        <li><a href="Projects/SystemAnalysis/SystemAnalysis.php">System Analysis and Design</a></li>
        
        <li><a href="Projects/BookShop/bookshop.php">Online Book Shop Management</a></li>
        
        <li><a href="Projects/Messenger/Messenger.php">Messenger</a></li>';*/
        //<li><a href="http://www.dreamtemplate.com" title="Web Templates">TSR program</a></li>
        //<li><a href="http://www.styleshout.com/">Mini compiler design</a></li>

        // menu without strong
	// <li><a href="Projects/SystemAnalysis/SystemAnalysis.php">System Analysis and Design</a></li>
         echo '<li><a href="Projects/BoishakhiMela/BoishakhiMela.php">3D visualization of "Baishakhi Mela"</a></li>
        <li><a href="Projects/Networking/Network.php">Network & Data link layer simulator</a></li>
        <li><a href="Projects/Ecg/Ecg.php">Wireless ECG</a></li>        
        <li><a href="Projects/SystemAnalysis/SystemAnalysis.php">System Analysis and Design</a></li>
        <li><a href="Projects/OS/Nachos.php">Enhancing Nachos</a></li>
        <li><a href="Projects/BookShop/bookshop.php">Online Book Shop Management</a></li>
        <li><a href="Projects/Compiler/PascalCompiler.php">Simplified Pascal Compiler</a></li>
        <li><a href="Projects/Tsr/Tsr.php">Screensaver for DOS</a></li>
        <li><a href="Projects/Messenger/Messenger.php">Messenger</a></li>';
     }

     function loadUnderGradProjectListForProjectDir()
     {
        /*echo '<li><a href="../BoishakhiMela/BoishakhiMela.php">3D visualization of <strong>"Baishakhi Mela"</strong></a></li>
        <li><a href="../Networking/Network.php">OSI <strong>Network</strong> & <strong>Data link</strong> layer implementation</a></li>
        <li><a href="../Ecg/Ecg.php">Wireless <strong>ECG</strong></a></li>
        <li><a href="../Microprocessor/Microprocessor.php">4/8 bit <strong>Microprocessor</strong> Design</strong></a></li>
        <li><a href="../SystemAnalysis/SystemAnalysis.php">System Analysis and Design</a></li>
        
        <li><a href="../BookShop/bookshop.php">Online Book Shop Management</a></li>
        
        <li><a href="../Messenger/Messenger.php">Messenger</a></li>';*/

        //<li><a href="http://www.styleshout.com/">Mini compiler design</a></li>
        //<li><a href="http://www.dreamtemplate.com" title="Web Templates">TSR program</a></li>

         //menu without strong
	//<li><a href="../Microprocessor/Microprocessor.php">4/8 bit Microprocessor Design</a></li>
         echo '<li><a href="../BoishakhiMela/BoishakhiMela.php">3D visualization of "Baishakhi Mela"</a></li>
        <li><a href="../Networking/Network.php">Network & Data link layer simulator</a></li>
        <li><a href="../Ecg/Ecg.php">Wireless ECG</a></li>

        <li><a href="../SystemAnalysis/SystemAnalysis.php">System Analysis and Design</a></li>
        <li><a href="../OS/Nachos.php">Enhancing Nachos</a></li>
        <li><a href="../BookShop/bookshop.php">Online Book Shop Management</a></li>
        <li><a href="../Compiler/PascalCompiler.php">Simplified Pascal Compiler</a></li>
        <li><a href="../Tsr/Tsr.php">Screensaver for DOS</a></li>
        <li><a href="../Messenger/Messenger.php">Messenger</a></li>';
     }

     function loadGradProjectsFromProjectDir()
    {
	echo '<li><a href="../Lexi/Lexi.php">Lexi</a></li>
        <li><a href="../ObjectModeling/ObjectModeling.php">3D Object Modeling</a></li>';
    }

  function loadGradProjectsFromMaintDir()
    {
	echo '<li><a href="Projects/Lexi/Lexi.php">Lexi</a></li>
        <li><a href="Projects/ObjectModeling/ObjectModeling.php">3D Object Modeling</a></li>';
    }

     function loadWorksFromDir()
     {
         echo '<h3>Professional Experience</h3>
			<ul class="sidemenu">
                            <li><a href="vizrt.php" title="Vizrt Bangladesh">Vizrt <br />
                <span>Software Engineer (May,2010 - July,2012)</span></a>
                </li>
                <li><a href="qi.php" title="Quantitative Intelligence, Inc.">Quantitative Intelligence, Inc. <br />
                <span>Software Engineer (Sept,2009 - August,2010)</span></a>
                </li>
                <li><a href="axiata.php" title="Axiata Bangladesh Limited">Axiata Bangladesh Limited <br />
                <span>Senior Programmer (Dec,2009 - April,2010)</span></a></li>
                <li><a href="bq.php" title="Binary Quest Limited">Binary Quest Limited <br />
                <span>Software Engineer (Dec,2008 - Dec,2009)</span></a>
                </li>
                </ul>

                <h3>Freelance Projects</h3>
			<ul class="sidemenu">
                            <li><a href="media.php" title="Media Agency Management System">Media Agency Management System <br /></a>
                            </li>
                            <li><a href="metal.php" title="Website for Metal(Pvt) Ltd">Website for Metal(Pvt) Ltd.<br />
                            <span>http://www.themetalbd.com/</span></a>
                            </li>
                       </ul>
                <h3>Personal Projects</h3>
                    <ul class="sidemenu">
                        <li><a href="http://www.codeproject.com/KB/mobile/MapMe.aspx" target="_BLANK" title="Loaction detection software">MapMe (CodeProject article)<br />
                        <span>See where I am right now !!</span></a>
                        </li>
                    </ul>';
     }
?>
