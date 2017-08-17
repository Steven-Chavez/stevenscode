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
                            <img src="img/profilePic.JPG" alt="Steven Chavez">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6">

                        <blockquote>
                            <p>“Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do.”</p>
                            <footer><cite title="Source Title">Steve Jobs</cite></footer>
                        </blockquote>
                        <p>Hello my name is Steven Chavez. It took me time to find what I loved doing but I knew I needed to find it. Writing code is my passion, I enjoy every aspect of it especially the problem solving and always being able to learn new concepts and skills. It is very meditative to me and keeps my mind on point. Now that I found what I love to do I'm running with no end in sight. With only an amazing and fulfilling career ahead of me. Thank you for your time and welcome to my site. </p>
                    </div>
                </div>
                <br>
                <h2 class="pageBreak"><strong>Current Projects</strong></h2>
                <h3><em>Re-Designing My Personal Site</em></h3>
                <div class="row">
                    <div class="col-sm-12 col-md-9">
                        <p>I decided I needed to give my personal site more of a professional and clean look. Not only is it a good opportunity to practice HTML, CSS, and Bootstrap but also to design a website where I can practice PHP, JavaScript, jQuery, MySQL, and any other language or skills I want to improve. Sorry for any inconvenience my site is currently being worked on and will be completed as soon as possible. </p>
                        <div class="alert alert-info" role="alert"><strong>Heads up!</strong> I am reconstructing my site and will be finished soon.</div>
                    </div>
                </div>
                <h3><em>Zend PHP Certification Training</em></h3>
                <div class="row">
                    <div class="col-sm-12 col-md-3">
                        <a href="http://www.phparch.com/books/zend-php-5-certification-study-guide-3rd-edition/" class="thumbnail">
                            <img src="http://www.phparch.com/wp-content/uploads/2015/02/3d_book-ZCE-260x300.png" alt="Zend Ceritification Study Guide">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <p>
                            I have recently purchased the <em>Zend Certification Study Guide</em> so that I can study and advance my php skills and knowledge. I plan on using my website as my training grounds. Providing me with an easy reference and helping to cement the concepts in my mind.
                        </p>
                        <br>
                        <blockquote>
                            <p>"Zend Certification is an industry-recognized benchmark used to validate PHP expertise while indicating a developer’s commitment to mastering the craft and being a professional programmer."</p>
                        </blockquote>
                    </div>
                </div>
                <h3 ><em>Developing my JavaScript Skills and Knowledge</em></h3>
                <div class="row">
                    <div class="col-sm-12 col-md-3">
                        <a href="http://www.amazon.com/JavaScript-Definitive-Guide-Activate-Guides/dp/0596805527" class="thumbnail">
                            <img src="http://img1.imagesbn.com/p/9780596101992_p0_v2_s260x420.JPG" alt="Zend Ceritification Study Guide">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <p>
                            Right now my projects are to develop my skills. The best ways I can think of doing that is by books and implementing what I've learned into my website. I want to learn JavaScript to add that extra flare to websites. I decided to start by getting <em>JavaScript The Definitive Guide</em>  to take my JavaScript skills to the next level.
                        </p>
                        <br>
                        <blockquote>
                            <p>"Since 1996, JavaScript: The Definitive Guide has been the bible for JavaScript programmers—a programmer's guide and comprehensive reference to the core language and to the client-side JavaScript APIs defined by web browsers."</p>
                        </blockquote>
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
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
