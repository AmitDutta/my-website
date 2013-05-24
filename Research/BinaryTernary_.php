<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <?php
        include_once '../Statics/StaticFunctions.php';        
    ?>
    <title>Undergraduate Research</title>
    <link rel="stylesheet" href="../css/img/TechJunkie.css" type="text/css" />
</head>

<body>
<!-- wrap starts here -->
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
			<li id="current"><a href="../research.php">Research</a></li>
			<li><a href="../WorkExperience/vizrt.php">Work experience</a></li>
			<li><a href="../resume.php">Resume</a></li>
			<li><a href="../contact.php">Contact</a></li>
		</ul>
	<!-- navigation ends-->
	</div>

	<!-- content-wrap starts -->
	<div id="content-wrap">

		<div id="main">
                    <h2><a href="../Research/BinaryTernary.php" title="" class="hyperlink">Prefix transpositions on binary and ternary strings</a></h2>
                    <p class="post-info"><a href="../research.php" class="hyperlink">Research</a>, Undergraduate Research</p>
                    <h3>Abstract</h3>
                    
                    <p>The problem sorting by Prefix Transpositions asks for the minimum number of prefix transpositions required to sort the elements of a given permutation. In this thesis, we study a variant of this problem
                            where the prefix transpositions act not on permutations but on strings over a fixed size alphabet. We determine the minimum number of prefix transpositions required to sort the binary and ternary strings,
                            with polynomial time algorithms for these sorting problems. We also considered grouping and give polynomial-time algorithms for optimally grouping binary and ternary strings.</p>

                     <p class="post-footer">
			<a href="BinaryTernaryRead.php" class="hyperlink">Read complete paper</a> |
			<a href="../Files/Thesis/Prefix_Transpositions_on_binary_ternary_strings.pdf" class="hyperlink">Download (PDF)</a>
			
			</p>
		</div>
		<div id="sidebar">
                    <h3>Undergraduate Research</h3>
			<ul class="sidemenu">
                            <li><strong><a href="../Research/BinaryTernary.php">Prefix transpositions on binary and ternary strings<br />
                            <span>Accepted at BIOCOMP'10</span></a></strong>
                            </li>
			</ul>
		<!-- sidebar ends -->
		</div>

	<!-- content-wrap ends-->
	</div>

	<!-- footer starts -->
	<div id="footer-wrap"><div id="footer-content">
		<div id="footer-bottom">
			<p>
			&copy; 2010 <strong>Amit Dutta</strong> &nbsp;&nbsp;&nbsp;&nbsp;
			<a href="http://www.stylishtemplate.com/" title="Website Templates" class="hyperlink">website templates</a> by <a href="http://www.styleshout.com/">styleshout</a>
                        </p>
		</div>
    <!-- footer ends-->
    </div></div>
</div>


</body>
</html>