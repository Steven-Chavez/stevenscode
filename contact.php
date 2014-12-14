<?php
session_start();
$_SESSION["temp"] = 0;
require_once("lib/csrf.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<?php require_once("php/stubs/header.php"); ?>
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	</head>
	<body>
		<div class="container">
			<header>
				<a href="index.php"><h1 class="nameHeader">STEVEN CHAVEZ</h1></a>
			</header>
			<div class="row mainBody">
				<nav class="nav">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-6 tab">
							<a href="articles.php">
								<h3>Articles</h3>
							</a>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 tab">
							<a href="resume.php">
								<h3>Resume</h3>
							</a>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 tab">
							<a href="myArt.php">
								<h3>My Art</h3>
							</a>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 active">
							<a href="contact.php">
								<h3>Contact</h3>
							</a>
						</div>
					</div>
				</nav>
				<div class="row">
					<div class="col-md-6 col-md-offset-3 contact">
						<div class="alert alert-danger" role=\"alert\"><strong>I apologize!</strong> currently working on this page, come back at another time or use the contact information from the resume tab above</div>
						<h2 id="contactHeader">Contact Me</h2>
						<p>Please feel free to contact me with questions, concerns, opportunities, opinions, etc.</p>
						<form role="form"  action="php/form-processor/contact-processor.php" method="post">
							<?php generateInputTags(); ?>
							<div class="form-group">
								<label for="firstName">First Name</label>
								<input type="text" class="form-control" id="firstName" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label for="lastName">Last Name</label>
								<input type="text" class="form-control" id="lastName" placeholder="Enter Last Name">
							</div>
							<div class="form-group">
								<label for="contactEmail1">Email address</label>
								<input type="email" class="form-control" id="contactEmail" placeholder="Contact Email">
							</div>
							<div class="form-group">
								<label for="subject">Subject</label>
								<input type="text" class="form-control" id="subject" placeholder="Enter Subject">
							</div>
							<div class="form-group">
								<label for="contactMsg">Message</label>
								<textarea rows="8" class="form-control" id="contactMsg" placeholder="Enter Message Here...." ></textarea>
							</div>

							<!-- <button type="submit" class="btn btn-primary btn-lg">Submit</button>-->
						</form>

					</div>
				</div>
			</div>
			<footer class="row">
			</footer>
		</div>
	</body>
</html>