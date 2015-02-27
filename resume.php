<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Steven Chavez's Resume</title>

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
						<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
							<h1 class="text-center">Steven Chavez</h1>
							<p class="text-center">
								schavez256@yahoo.com | (505) 306-3479
							</p>
							<p class="text-center">
								<a href="https://www.linkedin.com/pub/steven-chavez/a7/2a3/988">
									<img class="resumeIcons" src="img/icons/LinkedIn-InBug-2CRev(1).png" /> LinkedIn
								</a>  |
								<a href="https://github.com/Steven-Chavez">
									<img class="resumeIcons" src="img/icons/GitHub-Mark-64px.png" /> /Steven-Chavez
								</a>
							</p>
							<p class="text-center">
								<a href="https://twitter.com/schavez256">
									<img class="resumeIcons" src="img/icons/Twitter_logo_blue.png" />
									@schavez256
								</a>
							</p>
							<h2 class="resumeTitles">
								OBJECTIVE
							</h2>
							<p>
								Recent graduate of the Deep Dive Coding Bootcamp with a certificate in web development. Seeking to apply my skills and work experience to obtain an entry level programming position. A focused, detail-oriented and reliable worker aiming to achieve company goals and take on more responsibility as quickly as possible.
							</p>
							<h2 class="resumeTitles">SKILLS</h2>
							<ul>
								<li>
									Database Experience: MySQL and Oracle
								</li>
								<li>
									Object Oriented Programming (PHP, C++)
								</li>
								<li>
									Front-End Programming (HTML, CSS3)
								</li>
								<li>
									Able to learn and succeed in a fast passed learning environment
								</li>
								<li>
									Self-motivated, eager to learn new skills and concepts
								</li>
								<li>
									Detail oriented and well organized
								</li>
								<li>
									Logical and resourceful problem solver
								</li>
							</ul>
							<h2 class="resumeTitles">EDUCATION EXPERIENCE</h2>
							<p><strong>Central New Mexico Community College</strong></p>
							<p>
								<em>
									Deep Dive Coding Bootcamp (certificate of completion),
								</em>
								December 2014
							</p>
							<ul>
								<li>
									Intense 9-week course learning and applying HTML, CSS, PHP, JavaScript, jQuery, MySQL and Object-oriented programming with an emphasis on security. Also used GitHub to collaborate, and managed projects through Asana.
								</li>
							</ul>
							<p><strong>Central New Mexico Community College</strong></p>
							<p>
								<em>
									Associate of Applied Science,
								</em>
								Anticipated Completion Summer 2016
							</p>
							<ul>
								<li>
									Major in Computer Information Systems, concentrated in computer programming. Emphasize on designing and building computer programs with C++, Java and C#.
								</li>
							</ul>

						</div>
					</main>
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