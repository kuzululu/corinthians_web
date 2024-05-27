<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact - Corinthians Recruitment Services</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<body>

    <div class="brand">Corinthians Recruitment Services</div>
    <div class="address-bar">MRJR Bldg., DBP Main Road | Pulanglupa II Las Piñas City | (02) 843 4405</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Corinthians Recruitment Service</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="blog.html">Job Vacancy</a>
                    </li>
                     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">About<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                       <li><a href="mission.html">Mission</a></li>
                       <li><a href="vision.html">Vision</a></li>
                       <li><a href="our story.html">Our Story</a></li>
                       </ul>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    <li>
                        <a href="apply.php">Apply Now</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>Corinthians Recruitment Services</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <?php 
                        include("map.php");
                     ?>
                </div>
                <div class="col-md-4">
                    <p>Phone:
                        <strong>(02) 843 4405</strong>
                    </p>
                    <p>Email:
                        <strong>core.mgt@corinhiansphilippines.com</strong>
                    </p>
                    <p>Address:
                        <strong>MRJR Bldg., 34 DBP Main Road
                            <br>Pulanglupa II, Las Piñas City</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>form</strong>
                    </h2>
                    <hr>
                    <p>Give us a call, send us your concern and we will call you back after as soon as we rich your concern. Call or send your resume in our<a href="apply.php" target="_blank"> form page</a> or contact us by the given number above thank you.</p>
                  <!--  <form role="form" action="contact.php" method="POST"> -->
                  <form name="form" role="form" method="POST" action="email.php">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" name="contact">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" rows="6" name="message"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="hide" value="contact">
                            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Corinthians Recruitment Services 2016 | Powered by <a href="https://startbootstrap.com/" target="_blank">bootstraps</a> |<a href="https://www.facebook.com/jeffronald.gamasan" target="_blank">Contact</a> Web Designer<br>Contact Number: (02) 843 4405</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
