<?php
session_start();
include('connect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>

<title>Home Gym Equipment</title>
<meta name="description" content="">
<meta name="author" content="">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">

<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lora:700italic' rel='stylesheet' type='text/css'>

</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<!-- =========================
     PRE LOADER       
============================== -->
<div  class="preloader">

	<div class="sk-spinner sk-spinner-pulse"></div>

</div>
<!-- =========================
    NAVIGATION SECTION   
============================== -->
<div class="navbar navbar-default navbar-fixed-top " role="navigation">
	<div class="container">

		<div class="navbar-header">
			
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">HGE</a>
		</div>
		
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right main-navigation">
				<li><a href="index.php" class="smoothScroll">Home</a></li>
				<li><a href="information.php" class="smoothScroll">Information</a></li>
				<li><a href="wanted.php" class="smoothScroll">Wanted</a></li>
				<li><a href="featured.php" class="smoothScroll">Featured</a></li>
				<li><a href="gallery.php" class="smoothScroll">Gallery</a></li>
				<li><a href="workshop.php" class="smoothScroll">Workshop</a></li>
				<li><a href="contact.php" class="smoothScroll">Contact</a></li>
<?php
			if(isset($_SESSION['cid']))
            {
                $cemail=$_SESSION['cemail'];
                echo "<li><a href='viewprofile.php' class='smoothScroll'>$cemail</a></li> 
                ";
            
            }	
               
			
                
        ?>
        <li><a href="Logout.php" class="smoothScroll">Logout<i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
			</ul>
		</div>
		


	</div>
</div>

<!-- =========================
     SCRIPTS   
============================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
<script type="text/javascript">
	function googleTranslateElementInit() {
	 new google.translate.TranslateElement({pageLanguage: 'en-us'}, 'google_translate_element');
	}
	</script>
	
	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>