<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>PHP Types and Variables</title>

		<!-- Bootstrap Core CSS -->
		<link href="../css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="../css/simple-sidebar.css" rel="stylesheet">

		<!-- Custom Fonts -->
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
		<script src="../js/myArt.js"></script>
	</head>
	<body>
		<div id="wrapper">

			<?php
			require_once("../php/stub/nav_stub_sub_dir.php");
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
					<div class="row">
						<div class="col-md-10 col-md-offset-1 col-sm-12">
							<!-- WHAT ARE TYPES AND VARIABLES-->
							<h1 class="text-center">PHP Types and Variables</h1>
							<br>
							<br>
							<h3>
								What are Types and Variables?
							</h3>
							<p>
								Before we explain what types php supports and what syntax we use to declare variables
								and the rules for naming them; I want to try my best at explaining the relationship
								they have to one another for beginning programmers.
							</p>
							<p>
								Types are like containers that can only contain specific things. For example you wouldn't
								try to hold water on a plate, you would use a cup. Variables are like identifiers or name
								tags on the container so that you can quickly reference them. I think that is enough to get you
								through the rest of page.
							</p>
							<br>
							<h3>PHP Types</h3>
							<p>
								Their are eight primitive types that PHP supports. I'll be giving examples of four out of the
								eight which are <em>boolean, int, float, </em>and <em>string</em>. We will go over the other
								four in a later section witch are <em>array, object, resource, </em>and <em>NULL</em>.
							</p>
							<br>
							<table class="table table-condensed">
								<thead>
									<tr>
										<th>TYPE EXAMPLES</th></tr>
									<tr style="background-color: lightgray">
										<th>
											Type
										</th>
										<th>
											Example
										</th>
										<th>
											Description
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>boolean</td>
										<td>false</td>
										<td>Expresses a truth value</td>
									</tr>
									<tr>
										<td>int</td>
										<td>52</td>
										<td>A whole number; no decimal</td>
									</tr>
									<tr>
										<td>float</td>
										<td>16.235</td>
										<td>A number with decimal</td>
									</tr>
									<tr>
										<td>string</td>
										<td>"Dog"</td>
										<td>A series of characters</td>
									</tr>
								</tbody>
							</table>
							<br>
							<p>
								With PHP types are determined by the context in which you use them. That means that you don't
								have to tell PHP what type your variable is when you declare a variable. At runtime PHP decides
								what type it is by what information it contains.
							</p>

						</div>
					</div>
				</div>
			</div>
		</div
			<!-- /#wrapper -->

			<!-- jQuery -->
		<script src="../js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="../js/bootstrap.min.js"></script>

		<!-- Menu Toggle Script -->
		<script>
			$("#menu-toggle").click(function(e) {
				e.preventDefault();
				$("#wrapper").toggleClass("toggled");
			});
		</script>
	</body>