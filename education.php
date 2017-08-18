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
                            <h1 class="text-center">Education</h1><br>

                            <!--<h2 class="resumeTitles">
                                Overview
                            </h2>-->
                            <p>
                                Working full-time and being a successful full-time student is one of my biggest
                                accomplishments. I know the importance of having an education but I also know that
                                you are not guaranteed anything just because you have a degree. Because I know this 
                                truth, in order to give myself that extra edge I have decided to do three things. One 
                                is keeping up with current events in my field. Second is through projects and personal
                                challenges. Lastly is obtaining degrees in a field that I am passionate about.
                            </p>
                            <h2 class="resumeTitles">Central New Mexico Community College</h2>
                            <!-- GCU -->
                            <div class="row">
                                <div class="col-md-2 col-sm-12">
                                    <a href="https://www.gcu.edu/">
                                        <img style="height: 8em; width: 8em;"  src="img/gcu.jpg" alt="Steven Chavez">
                                    </a>
                                </div>
                                <div class="col-md-10 col-sm-12">
                                    <p>
                                        <em>
                                            Bachelor Of Science In Information Technology With An Emphasis In Cyber Security,
                                        </em>
                                        September 2019
                                    </p>
                                    <ul>
                                        <li>
                                            Building a solid all-around foundation in information technology to advance business performance. Acquiring valuable knowledge in cyber security to better manage and protect business assets from cyber threats.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- CNM -->
                            <h2 class="resumeTitles">Central New Mexico Community College</h2>
                            <div class="row">
                                <div class="col-md-2 col-sm-12">
                                    <a href="http://www.cnm.edu/">
                                        <img style="height: 8em; width: 8em;"  src="img/cnm.jpg" alt="Steven Chavez">
                                    </a>
                                </div>
                                <div class="col-md-10 col-sm-12">
                                    <p>
                                        <em>
                                            Associate of Applied Science,
                                        </em>
                                        April 2016
                                    </p>
                                    <ul>
                                        <li>
                                            Major in Computer Information Systems, concentrated in computer programming. Emphasize on designing and building computer programs with C++, Java and C#.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- DEEP DIVE CODING BOOTCAMP -->
                            <h2 class="resumeTitles">Central New Mexico Community College</h2>
                            <div class="row">
                                <div class="col-md-2 col-sm-12">
                                    <a href="https://deepdivecoding.com">
                                        <img style="height: 8em; width: 8em;"  src="img/deep_dive_coding.png" alt="Steven Chavez">
                                    </a>
                                </div>
                                <div class="col-md-10 col-sm-12">
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

