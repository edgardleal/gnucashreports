<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>INDEX</title>
		<meta name="generator" content="Bluefish 2.2.3" >
		<meta name="copyright" content="">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
		<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" >
		<script type="text/javascript" src="includes/jsfunctions.js"></script>
		<link rel="stylesheet" href="includes/gnucashreports.css" type="text/css" media="screen" />
	</head>
	<body>

		<div id="headercontainer">

			<div id="topheader">
				<?php include 'includes/topmenu.php'; ?>
				
				<div id="report-nav">
				</div>
			</div>
		</div>
		
		<div id="content">
			<?php
				include 'includes/functions.php';
				BalanceAsOfDateArray();
				BalanceAsOfQuery();
				BuildTable();
			?>
		</div>
	</body>
</html>