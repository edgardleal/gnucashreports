<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>INDEX</title>
		<meta name="generator" content="Bluefish 2.2.3" >
		<meta name="copyright" content="">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
		<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
		<script type="text/javascript" src="includes/jsfunctions.js"></script>
		
		<link type="text/css" href="jquery/css/ui-lightness/jquery-ui-1.8.21.custom.css" rel="stylesheet" />
		<script type="text/javascript" src="jquery/js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="jquery/js/jquery-ui-1.8.21.custom.min.js"></script>		
		
		<link rel="stylesheet" href="includes/gnucashreports.css" type="text/css" media="screen" />
	</head>
	<?php	include 'includes/functions.php';?>
	<body>
		<div id="headercontainer">
			<div id="topheader">
					<?php
					include 'includes/topmenu.php';
					include 'includes/dateselector.php';
					?>
			</div>
		</div>
			
		<div id="content">
			<?php
		//check if the variable SelectedAccounts is set. If not, it will create the variable with the standard accounts
		if (!isset($SelectedAccounts)){		
			$SelectedAccounts[] = 'Bradesco';
			$SelectedAccounts[] = 'ABN';
		}
		echo $query;
			BuildCashFlowTable(withtotal);
			?>
		</div>
		
	</body>
</html>