<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
    <script type='text/javascript' src='scripts/fg_captcha_validator.js'></script>

    <title>Corinthians Recruitment Services</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link rel="STYLESHEET" type="text/css" href="contact.css" />

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/contact-form-attachment.html
*/
require_once("./include/fgcontactform.php");

$formproc = new FGContactForm();

//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('jeffgamasan@gmail.com'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('HG9hPBpn9Bn26yg');

$formproc->AddFileUploadField('photo','docx,doc,pdf,xls,xlsx',10240);

if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        /* $formproc->RedirectToURL("thank-you.php"); */
        $formproc->RedirectToURL("thank you.html");

   }
}

?>

</head>

<body>

    <div class="brand">Corinthians Recruitment Services</div>
    <div class="address-bar">MRJR Bldg., 34 DBP Main Road | Pulanglupa II, Las Piñas City | (02) 843 4405</div>

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
                    <h2 class="intro-text text-center">
                        <strong>Corinthians Recruitment Services</strong>
                        <address>Applying Form</address>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <div class="col-lg-12 text-center">
                    <p>You can now Upload your resume without registration just fill up the blank fields by filling your valid email and contact together with your resume</p>
                    </div>
    </div>
    <!-- /.container -->
<div class="container">
<div class="box">
<div class="col-lg-7 text-center">
    <div class="col-lg-7 text-left">
    <form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>

<table class="table table-bordered" >
<legend>Apply Now!!</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>        
<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />

<div class='short_explanation'>* required fields</div>

<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='name' >Your Full Name*: </label><br/>
    <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
    <span id='contactus_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='email' >Email Address*:</label><br/>
    <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='contact' >Contact Number*:</label><br/>
    <input type='text' name='contact' id='contact' value='<?php echo $formproc->SafeDisplay('contact') ?>' maxlength="50" /><br/>
    <span id='contactus_contact_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='message' >Message:</label><br/>
    <span id='contactus_message_errorloc' class='error'></span>
    <textarea rows="10" cols="50" name='message' id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
</div>
<div class='container'>
    <label for='document' >Upload your Resume:</label><br/>
    <input type="file" name='photo' id='document' /><br/>
    <span id='contactus_document_errorloc' class='error'></span>
</div>
<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>

</table>
</form>
</div> <!-- endn off row box -->
</div> <!-- end of container -->
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->
   
<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");

    frmvalidator.addValidation("contact","contact","Please provide a valid contact Number");

    frmvalidator.addValidation("photo","file_extn=doc;docx;pdf;xls;xlsx","Upload documents only. Supported file types are: doc;docx;pdf;xls;xlsx");
// ]]>
</script>
<div class="col-lg-12">
                    <ul class="pager">
                    <li class="previous"><a href="blog.html">back</a></li>
                    <!--  <li class="previous"><a href="#">&larr; Previous Page</a> -->
                        </li> 
                        <li class="next"><a href="index.html">Home Page</a>
                        </li>
                    </ul>
</div>
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
