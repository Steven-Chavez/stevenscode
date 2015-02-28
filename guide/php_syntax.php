<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>PHP Syntax</title>

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
							<!-- PHP TAGS -->
							<h1 class="text-center">PHP Syntax</h1>
							<br>
							<br>
							<h3>PHP Tags</h3>
							<p>
								When writing php code you need php tags which are <code>&lt?php</code> and <code>?&gt</code>. The parser looks for these opening and closing tags and interprets the code between the tags.
							</p>
							<p>
								This comes in handy when you want to inline php into your HTML file because everything outside of the tags are ignored by the PHP parser. It's preferred to only use the php opening tag <code>&lt?php</code> when the file is pure PHP code and to leave out the closing tag <code>?&gt</code>.
							</p>
							<br>
							<h4>Embedded PHP Example</h4>
							<ol>
								<li class="codeLine">
									<span class="htmlCode">&ltbody&gt</span>
								</li>
								<li class="codeLine indent">
									<span class="phpCode">&lt?php</span>
									<span class="phpCode">echo</span>
									<span class="stringCode">"Hello World";</span>
									<span class="phpCode">?&gt</span>
								</li>
								<li class="codeLine indent">
									<span class="htmlCode">&ltp&gt</span>
									<span class="stringCode">line 2 is embedded php.</span>
									<span class="htmlCode">&lt/p&gt</span>
								</li>
								<li class="codeLine">
									<span class="htmlCode">&ltbody&gt</span>
								</li>
							</ol>
							<br>
							<h4>Pure PHP File Example</h4>
							<ol>
								<li class="codeLine">
									<span class="phpCode">&lt?php</span>
								</li>
								<li class="codeLine indent">
									<span class="phpCode">echo</span>
									<span class="stringCode">"Pure PHP file";</span>
								</li>
								<li class="codeLine indent">
									<span class="codeComment">
										// ... more code
									</span>
								</li>
								<li class="codeLine indent">
									<span class="codeComment">
										// Finish code with no closing tag
									</span>
								</li>
							</ol>
							<br>
							<!-- TERMINATING STATEMENTS -->
							<h3>Terminating Statements</h3>
							<p>
								In programming you have to have a way of letting the parser know you are done with a
								statement or instruction. We do this by adding a semicolon <code>;</code> at the end
								of statements. Some examples of statements are calling functions, declaring variables
								and more.
							</p>
							<br>
							<h4>Terminating Statements Example</h4>
							<ol>
								<li class="codeLine">
									<span class="codeComment">// with out the semicolon (;) the program would not work</span>
								</li>
								<li class="codeLine">
									<span class="phpCode">functionCall()</span><span class="stringCode">;</span>
								</li>
								<li class="codeLine"></li>
								<li class="codeLine">
									<span class="phpCode">$variableDeclaration = </span><span class="stringCode">20.55;</span>
								</li>
							</ol>
							<br>
							<!-- PHP COMMENTS -->
							<h3>PHP Comments</h3>
							<p>
								Well documented code is the sign of a good programmer. It makes your code easier to read and understand for others and your future self. You have two kinds of commenting single line and multiple line commenting. In order to do a single line comment you start by using to forward slashes (<span class="codeComment">//</span>). If you are going to write multiple lines of comments start of with (<span class="codeComment">/*</span>) comment as much as you need and then close with (<span class="codeComment">*/</span>). Make sure to close the comment or else the parser will see the rest of the code as an entire comment.
							</p>
							<br>
							<h4>Comment Example</h4>
							<ol>
								<li class="codeLine">
									<span class="codeComment">
										// this is a single line comment
									</span>
								</li>
								<li class="codeLine"></li>
								<li class="codeLine">
									<span class="codeComment">
										/* this is a multiple line comment
									</span>
								</li>
								<li class="codeLine">
									<span class="codeComment">
										.... Add as much as you need
									</span>
								</li>

								<li class="codeLine">
									<span class="codeComment">
										in between. */
									</span>
								</li>
							</ol>
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