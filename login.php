<html>

<!-- By Abhishek Arya, Mon, 16 Apr 2018 21:46:28 GMT -->

<head>


<style>
div#copyright {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
}


</style>





<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Clasified">
    <meta name="generator" content="Wordpress! - Open Source Content Management">
    <title>Login | ByteCode</title>

     <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">    
    <link rel="stylesheet" href="assets/css/jasny-bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jasny-bootstrap.min.css" type="text/css">
    <!-- Material CSS -->
    <link rel="stylesheet" href="assets/css/material-kit.css" type="text/css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
        <!-- Line Icons CSS -->
    <link rel="stylesheet" href="assets/fonts/line-icons/line-icons.css" type="text/css">
    <!-- Line Icons CSS -->
    <link rel="stylesheet" href="assets/fonts/line-icons/line-icons.css" type="text/css">
    <!-- Main Styles -->
    <link rel="stylesheet" href="assets/css/main.css" type="text/css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/extras/animate.css" type="text/css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/extras/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/extras/owl.theme.css" type="text/css">
    <link rel="stylesheet" href="assets/extras/settings.css" type="text/css">
    <!-- Responsive CSS Styles -->
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css">
        <!-- Bootstrap Select -->
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">  
    
  </head>
  <body>  
    <!-- Header Section Start -->
    <div class="header">    
      <nav class="navbar navbar-default main-navigation" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand logo" href="index.html"><img src="assets/img/logo.png" alt=""></a>
          </div>
          <!-- brand and toggle menu for mobile End -->

          <!-- Navbar Start -->
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="login.html"><i class="lnr lnr-enter"></i> Login</a></li>
              <li><a href="signup.html"><i class="lnr lnr-user"></i> Signup</a></li>
              <li class="postadd">
                <a class="btn btn-danger btn-post" href="submit.html"><span class="fa fa-plus-circle"></span> Submit a Resource</a>
              </li>
            </ul>
          </div>
          <!-- Navbar End -->
        </div>
      </nav>
      
   
    <!-- Header Section End -->

  
<?php
include'phphead.php';
	
	
	$useremailid=$_GET['useremailid'];
	$userpass=$_GET['userpass'];


	

	
$raw_results = mysqli_query($con,"SELECT * FROM users WHERE (`useremailid` = '".$useremailid."') AND (`userpass` = '".$userpass."')") or die("Some error occured...");
             
        
        if(mysqli_num_rows($raw_results) > 0){ 
             
            while($results = mysqli_fetch_array($raw_results)){
            
            echo"<center>"; 
			echo"You are now successfully logged in as - <b>".$results['username']."</b>";
			echo"<br>";
			echo"<br>";
			echo"<br>";
			echo'<script type="text/javascript"> 
			<!--
			function Redirect() {
				window.location="/ByteCode/index.html";
				}
				//--> 
				</script>
            </head> 
			<body>									
			<p>Click the following button, you will be redirected to the <a href="/ByteCode/index.html">Homepage</a></p>';
               
            }
             
        }
        else
		{
			$raw2=mysqli_query($con,"SELECT useremailid FROM users WHERE (useremailid='$useremailid')");
			if(mysqli_num_rows($raw2) > 0){ 
             
			while($results2 = mysqli_fetch_array($raw2)){		
				echo"<center>";
				echo"<h3>";
				echo"<br>";
				echo"Invalid Username and Password Combination !";
				echo"</h3>";
				echo"<br>";
				echo"<h5>Please try again.....</h5>";
				echo'<br>';
				echo'<script type="text/javascript"> 
			<!--
			function Redirect() {
				window.location="/ByteCode/login.html";
				}
				//--> 
				</script>
            </head> 
			<body>									
			<p>Click the following button to <a href="/ByteCode/index.html">try again.....</a></p>';
				}
			}
			else{
				echo"<center>";
				echo'<br><br><h3><b>User does not exists.....Please Signup first.....</b></h3>
				<br>';
				
				echo'<br>';
			echo'<script type="text/javascript"> 
			<!--
			function Redirect() {
				window.location="/ByteCode/signup.html";
				}
				//--> 
				</script>
            </head> 
			<body>									
			<p>Click the following button, you will be redirected for <a href="/ByteCode/index.html">Signup...</a></p>'; 
echo'</head>  
<body>';

			
        }
			}
			
?>


<form>
         <input type="button" value="Redirect Me" onclick="Redirect();" />
</form>

<!-- Copyright Start  -->
    	<div id="copyright">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
              <div class="site-info pull-left">
                <p>Design & Development by <a href="about.html">Abhishek Arya</br></a>All copyrights reserved @ 2018 - GrayGrids</p>
              </div>    					
              <div class="bottom-social-icons social-icon pull-right">  
                <a class="facebook" target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a> 
                <a class="twitter" target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                <a class="flickr" target="_blank" href="https://www.flickr.com/"><i class="fa fa-flickr"></i></a>
                <a class="youtube" target="_blank" href="https://youtube.com/"><i class="fa fa-youtube"></i></a>
                <a class="google-plus" target="_blank" href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a>
                <a class="linkedin" target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
              </div>
    				</div>
    			</div>
    		</div>
    	</div>
    	<!-- Copyright End -->
 

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="fa fa-angle-up"></i>
    </a>  
      
    <!-- Main JS  -->
    <script type="text/javascript" src="assets/js/jquery-min.js"></script>      
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/material.min.js"></script>
    <script type="text/javascript" src="assets/js/material-kit.js"></script>
    <script type="text/javascript" src="assets/js/jquery.parallax.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/wow.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="assets/js/waypoints.min.js"></script>
    <script type="text/javascript" src="assets/js/jasny-bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/form-validator.min.js"></script>
    <script type="text/javascript" src="assets/js/contact-form-script.js"></script>    
    <script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
  </body>

<!-- By Abhishek Arya, Tue, 17 Apr 2018 05:36:01 GMT -->
</html>
