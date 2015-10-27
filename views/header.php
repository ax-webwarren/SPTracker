<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">

		<title>SPtracker</title>

		<!-- JQuery -->
		<script src="lib/js/jquery-1.11.3.min.js"></script>
		
		<!-- Bootstrap core CSS -->
		<link href="lib/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="lib/css/style.css" rel="stylesheet">

		<!-- Bootstrap Table CSS for this template -->
		<link href="lib/css/jquery.dataTables.min.css" rel="stylesheet">
		
		<!-- Bootstrap Table CSS for this template -->
		<link href="lib/css/dataTables.bootstrap.min.css" rel="stylesheet">
		
		<!-- Custom js for this template -->
		<script src="lib/js/script.js"></script>
		
		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src="../../assets/js/ie-emulation-modes-warning.js"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">SP<sup>TRACKER</sup></a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">File <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#export" id="exportTable">Export</a></li>
							<!-- 
							<li><a href="#export" data-toggle="modal" data-target="#export" id="exportTable">Export</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#search" data-toggle="modal" data-target="#search">Search</a></li>	
							-->
						</ul>
					</li>
					<li class="settings">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#addCategory" data-toggle="modal" data-target="#addVal">Add Category/Developer/Status</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#addDeveloper" data-toggle="modal" data-target="#editVal">Edit Category/Developer/Status</a></li>
						</ul>
					</li>					
					<!-- <li><a data-container="body" data-toggle="popover" data-placement="bottom" data-content="This is a help enabler">Help</a></li> -->
				</ul>
			</div><!--/.nav-collapse -->
			</div>
		</nav>
		<div class="container body container-fluid">