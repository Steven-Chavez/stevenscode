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
    </head>

    <body>

        <div id="wrapper">

            <?php
            require_once("php/stub/nav_stub.php");
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
                    <h1 class="pageBreak"><strong>Steven Chavez</strong></h1>
                    <br>
                    <div class="row">
                        <div class="col-sm-12 col-md-3">
                            <a href="#" class="thumbnail">
                                <img src="img/profile_pic.jpg" alt="Steven Chavez">
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6">

                            <blockquote>
                                <p>“Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do.”</p>
                                <footer><cite title="Source Title">Steve Jobs</cite></footer>
                            </blockquote>
                            <p>
                                Welcome, my name is Steven Chavez. I am a programmer, full-stack web developer,
                                IT professional, information security specialist in training, and an avid learner. 
                                Problem solving, researching new technologies,
                                and becoming profecient at those technologies is how I like to spend my time. Please
                                feel free to follow me and my journey in the IT field at my LinkedIn and GitHub accounts. 
                            </p>
                            <br>
                            <div class="row">
                                <div class="col-md-2 col-md-offset-4">
                                    <a href="https://github.com/Steven-Chavez">
                                        <img style="height: 4em; width: 4em;"  src="img/GitHub-Mark-64px.png" alt="Steven Chavez">
                                    </a>
                                </div>
                                <div class="col-md-2">
                                    <a href="https://www.linkedin.com/pub/steven-chavez/a7/2a3/988">
                                        <img style="height: 4em; width: 4em;"  src="img/LinkedIn-InBug-2CRev(1).png" alt="Steven Chavez">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <h2 class="pageBreak"><strong>Current Projects</strong></h2>
                    <h3><em>Learning Design Patterns</em></h3>
                    <div class="row">
                        <div class="col-sm-12 col-md-9">
                            <p>
                                Having a solid background in Object-Oriented programming principles
                                like abstraction, inheritance, encapsulation, and polymorphism is crucial.
                                But knowing Object-Oriented programming basics does not mean you are a good
                                Object-Oriented designer. Design patterns give you the ability to build 
                                flexible, reusable, and maintainable code.
                            </p>
                        </div>
                    </div>
                    <h3><em>Code Everyday Challenge</em></h3>
                    <div class="row">
                        <div class="col-sm-12 col-md-9">
                            <p>
                                If you want to improve. You have to put the work in. That is why I decided to 
                                challenge myself to code everyday. In order to keep track of my progress
                                commit my code to <a href="https://github.com/Steven-Chavez">GitHub</a>. 
                                My programming instructor told us, "Don't just code.
                                Code something hard". I accomplish this through side projects like: 
                                <a href="https://github.com/Steven-Chavez/CryptoChallenges">Crypto Challenges</a>,
                                and <a href="https://github.com/Steven-Chavez/Inventory">Inventory</a>. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>

        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Menu Toggle Script -->
        <script>
            $("#menu-toggle").click(function (e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>

    </body>

</html>
