<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Education</title>

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
                            <h1 class="text-center">Programming Languages</h1><br>

                            <!-- <h2 class="resumeTitles">
                                Overview
                            </h2> -->
                            <p>
                                Having a solid understanding of object-oriented principles, and
                                following good programming practices and techniques is far 
                                more valuable than mastering any singe language.
                                Technology is always evolving and knew languages are always being made. Being 
                                flexible is key. Any good developer with the above traits should be able to pick 
                                up a programming book and learn a new language with minimal effort. The following 
                                are programming languages that I have worked in. Below each logo are links to code 
                                that I have writen in each langauge on my <a href="https://github.com/Steven-Chavez">GitHub</a> account. 
                            </p>
                            <br>
                            <div class="row">
                                <div style="padding-bottom: 3em;" class="col-md-6 col-md-offset-0 col-sm-12 col-sm-offset-3">
                                    <a href="#">
                                        <img class="thumbnail" style="height: 15em; width: 15em;"  src="img/cpp.png" alt="Steven Chavez">
                                    </a>
                                    <a href="https://github.com/Steven-Chavez/CourseWork-AssociatesDegree/tree/master/CIS1275">
                                        CIS 1275 C++ Programming I
                                    </a><br>
                                    <a href="https://github.com/Steven-Chavez/CourseWork-AssociatesDegree/tree/master/CIS2275">
                                        CIS 2275 C++ Programming II
                                    </a>
                                </div>
                                <div style="padding-bottom: 3em;" class="col-md-6 col-md-offset-0 col-sm-12 col-sm-offset-3">
                                    <a href="#">
                                        <img class="thumbnail" style="height: 15em; width: 15em;"  src="img/csharp.jpg" alt="Steven Chavez">
                                    </a>
                                    <a href="https://github.com/Steven-Chavez/CryptoChallenges">
                                        Crypto Challenges
                                    </a><br><br>
                                </div>
                            </div>
                            <div class="row">
                                <div style="padding-bottom: 3em;" class="col-md-6 col-md-offset-0 col-sm-12 col-sm-offset-2">
                                    <a href="#">
                                        <img class="thumbnail" style="height: 15em; width: 20em;"  src="img/php-logo.png" alt="Steven Chavez">
                                    </a>
                                    <a href="https://github.com/Steven-Chavez/Inventory">
                                        Inventory
                                    </a><br>
                                    <a href="https://github.com/Steven-Chavez/stevenscode">
                                        Stevens Code
                                    </a><br>
                                    <a href="https://github.com/curlymon/deep-dive-connect">
                                        Deep Dive Connect
                                    </a><br><br>
                                </div>
                                <div style="padding-bottom: 3em;" class="col-md-6 col-md-offset-0 col-sm-12 col-sm-offset-3">
                                    <a href="#">
                                        <img class="thumbnail" style="height: 15em; width: 15em;"  src="img/java.png" alt="Steven Chavez">
                                    </a>
                                    <a href="https://github.com/Steven-Chavez/CourseWork-AssociatesDegree/tree/master/CIS2235">
                                        CIS 2235 Java Programming I
                                    </a><br><br>
                                </div>
                            </div>
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
            $("#menu-toggle").click(function (e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>
    </body>



