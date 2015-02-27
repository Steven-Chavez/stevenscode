<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Steven Chavez</title>

		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="css/simple-sidebar.css" rel="stylesheet">

		<!-- Custom Fonts -->
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
		<script src="js/myArt.js"></script>
	</head>
	<body>
		<div id="wrapper">

			<?php
			require_once("php/stub/nav_stub.php")
			?>
			<!-- Page Content -->
			<div id="page-content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-3">
							<a href="#menu-toggle" class="btn btn-default btn-lg" id="menu-toggle">
								<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"> Menu</span>
							</a>
						</div>
					</div>
					<br>
					<main class="row">
						<div class="col-md-10 col-md-offset-1 col-sm-12">
							<h1 class="text-center">PHP</h1>
							<h2 class="text-center">(PHP: Hypertext Preprocessor)</h2>
							<p class="text-center">I want to take my PHP knowledge to the next level. The best way I can think of doing that is by teaching and implementing the new concepts I learned here on my website. Also by developing this page and the pages that will be linked to it will help me prepare for the <em>Zend PHP Certification Exam</em>.</p>
						</div>
					</main>
					<section class="row">
						<div class="col-lg-6 col-sm-12">
							<h3>PHP Basics</h3>
							<ul>
								<li><a href="phpSyntax.php">Syntax</a></li>
								<!-- <li><a href="#">Operators</a></li>
								<li><a href="#">Variables</a></li>
								<li><a href="#">Control Structures</a></li>
								<li><a href="#">Namespaces</a></li>
								<li><a href="#">Extensions</a></li>
								<li><a href="#">Language Constructs and Functions</a></li>
								<li><a href="#">Config</a></li>
								<li><a href="#">Performance/bytecode caching</a></li> -->
							</ul>
						</div>
						<div class="col-lg-6 col-sm-12">

						</div>
					</section>
				</div>
			</div>
		</div
			<!-- /#wrapper -->

			<!-- jQuery -->
		<script src="js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>

		<!-- Menu Toggle Script -->
		<script>
			$("#menu-toggle").click(function(e) {
				e.preventDefault();
				$("#wrapper").toggleClass("toggled");
			});
		</script>
	</body>