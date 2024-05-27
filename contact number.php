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

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">3

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php
   if (isset($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['phone_number']) && isset($_POST['message'])){
    $contact_name = $_POST['contact_name'];
    $contact_email = $_POST['contact_email'];
    $phone_number = $_POST['phone_number'];
    $message = $_POST['message'];
    if (!empty($contact_name) && !empty($contact_email) && !empty($phone_number) && !empty($message)){
        $to = 'jeffgamasan@gmail.com,gonzaleserbert@gmail.com,cor.mgmt@corinthiansphilippines.com,
melanie@corinthiansphilippines.com,grace@corinthiansphilippines.com';
        $subject = 'Contact form submitted';
        $body = $contact_name."\n".$message. "\n" .$phone_number;
        $headers = 'From: '.$contact_email;
    if (@mail($to, $subject, $body, $headers)){
       echo 'Thanks for contacting us. We\'ll be in touch soon';
    
   
    }else{
        echo 'Sorry, an error occured. Please try again later';

    }

    }else{
        echo 'all fields are required>';
    }
}
?> 

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
                <a class="navbar-brand" href="index.html">Corinthians Recruitment Services</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="blog.html">Job Vacancy</a>
                    </li>
                    <li>
                        <a href="contact number.php">Contact</a>
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
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                 <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com.ph/maps/embed/v1/place?key=AIzaSyAVBbMSPHV-vKJkR2isSF4Y1Hn9WgW3-YE&q=34, MRJR Building, DBP Street, DBP Village, Pulanglupa 2, Las Pinas, 1740 Metro Manila"></iframe>
                </div>
                <div class="col-md-4">
                    <p>Phone:
                        <strong>(02) 843 4405</strong>
                    </p>
                    <p>Email:
                        <strong>cor.mgmt@corinthiansphilippines.com</strong>
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, vitae, distinctio, possimus repudiandae cupiditate ipsum excepturi dicta neque eaque voluptates tempora veniam esse earum sapiente optio deleniti consequuntur eos voluptatem.</p>
                    <form role="form" action="thank you.html" method="POST">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" class="form-control" name="contact_name">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="contact_email">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" name="phone_number">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" rows="6" name="message"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                              <!--  <button type="submit" class="btn btn-default">Submit</button> -->
                            <!-- <input type="file" name="attachment"> -->
                            <input type="submit" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <<footer>
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
