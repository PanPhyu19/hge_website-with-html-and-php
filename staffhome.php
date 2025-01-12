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
			<li><a href="staffhome.php" class="smoothScroll">Home</a></li>
			<li><a href="booking.php"class="smoothScroll">Customer Contact</a></li>
            <li><a href="featured.php" class="smoothScroll">Featured</a></li>
           <li><a href="workshop.php" class="smoothScroll">Workshop</a></li>
            <li><a href="gallery.php" class="smoothScroll">Gallery</a></li>
            <li><a href="products.php"class="smoothScroll">Products</a></li>
		<li><a href="articles.php"class="smoothScroll">Articles</a></li>
	
	
        <li><a href="Logout.php" class="smoothScroll">Logout<i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
			</ul>
		</div>
		


	</div>
</div>
<?php
session_start();
include('connect.php');

$ip=$_SERVER[ 'REMOTE_ADDR' ];

$insert="INSERT INTO counter(ip_address)
Values('$ip')";
$query=mysqli_query($connect,$insert);
$ret="Select * from counter";
$querycount=mysqli_query($connect,$ret);
$viewscount=mysqli_num_rows($querycount);

 if(isset($_POST['btnsubmit']))
    {
        $name=$_POST['txtname'];
        $email=$_POST['txtemail'];
        $type=$_POST['txttypes'];
        $time=$_POST['txttime'];
		$day=$_POST['txtday'];
      
		$select="Select * from customer where email='$email'";
		$query1=mysqli_query($connect,$select);
		$count=mysqli_num_rows($query1);
		if($count>0){
			$selectid="Select customerid from customer where email='$email'";
			$queryid=mysqli_query($connect,$selectid);
			if ($queryid){
				$insert="INSERT INTO booking(bookingname,bookingtype,bookingtime,bookingday)
				values('$name','$type','$time','$day')";
				$query2=mysqli_query($connect,$insert);
				if($query2)
        {
            echo "<script>alert('Appointment Made Successfully')</script>";
        
        }
			}
			
        
		}
        
        
        else
        {
            echo "<script>alert('Please create an account first!')</script>";
        }
       
        
    }
    

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
<link rel="stylesheet" href="css/new.css">

<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lora:700italic' rel='stylesheet' type='text/css'>

</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">



<!---=============================POPUP SCREEN==========================-->
<div class="popup-screen">
	<div class="popup-box">
		
		<h2>Cookies</h2>
		<p>This site uses cookies to personalize your experience and to provide optimal performance.</p>
		<a href="#" class="popup-btn">I Accept</a>
	</div>
</div>

	

<!-- =========================
    HOME SECTION   
============================== -->
<section id="home" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-1 col-md-10 col-sm-12">
				<h3 class="wow bounceIn" data-wow-delay="0.9s">Your Body Can Do It</h3>
				<h1 class="wow fadeInUp" data-wow-delay="1.6s">It's Time To Convince Your Mind<br></h1>
				<a href="register.php" class="wow fadeInUp smoothScroll btn btn-default" data-wow-delay="2s">JOIN US NOW</a>
			</div>

		</div>
	</div>
</section>
<!----=======================Search bar============================-->
<form action="index.php" method="POST">
<div class="search-container">
<input type="text" name="txtsearch" placeholder="Search" class="search-text">
<input type="submit" name="btnsearch" class="search-btn" value="Search"> 
</div>
</form>
<!---=====================Top Picks================================ ----> 
<section id="blog" class="parallax-section">
      <div class="container">
        <div class="row">
<?php 
                if(isset($_POST['btnsearch']))
                {
                      $EquipmentName=$_POST['txtsearch'];
                        $query="SELECT * FROM products 
                                
                               where  productname LIKE '%$EquipmentName%'";
                        $result=mysqli_query($connect,$query);
                        $count=mysqli_num_rows($result);
						echo"<div class='wow fadeInUp col-md-12 col-sm-12' >
						<h2>Search Results</h2>";
                        if ($count>0)
                        {
                           
                            for ($i=0; $i < $count; $i+=1)
                            { 
                                $query1="SELECT * FROM products 
                               
                                where productname LIKE '%$EquipmentName%'
                                LIMIT $i,1";
                                $result1=mysqli_query($connect,$query1);
                                $count1=mysqli_num_rows($result1);
                                
                                for ($j=0; $j < $count1; $j++)
                                { 
                                    $arr=mysqli_fetch_array($result1);
                                    $productid=$arr['productcode'];
                                    $productname=$arr['productname'];
                                    $price=$arr['price'];
                                    $image=$arr['productimage'];
                                    $description=$arr['description'];
                                    echo "
									
                                    <div class='wow fadeInUp col-md-3 col-sm-6' data-wow-delay='1.9s'>
                    <div class='product-thumb'>
                    
                        <img src='$image' class='img-responsive' alt='Trainer'>
                    </div>
                    <a href='productdetails.php?PID=$productid'>
                    <h3>$productname</h3>
                    </a>
                    <h3>$ $price</h3>
                    <a href='cartlist.php' class='cart-btn' data-wow-delay='1s'>Add to Cart</a>
                    
                </div>
                
            ";
                                }
                                
                            }
                            
                        }
                        else
                        {
                        echo "<h1><b><u>Search Record Not Found</u></b></h1>";
                        }
                    }
?>
</div>
        <div class='wow fadeInUp col-md-12 col-sm-12' >
          <h2>Top Picks For This Month</h2>
        <?php
        $query="SELECT * FROM products where productcode=7 or productcode=24 or productcode=18 Order by productcode ";
        $ret=mysqli_query($connect,$query);
        $count=mysqli_num_rows($ret);
        if($count<1)
        {
            echo "<p>No Product Data Found.</p>";
            exit();
        }
        for ($a=0; $a <$count ; $a+=1) 
        { 
            $query1="SELECT * FROM products where productcode=7 or productcode=24 or productcode=18 or productcode=28 Order by productcode  LIMIT $a,1";
            $ret1=mysqli_query($connect,$query1);
            $count1=mysqli_num_rows($ret1);
            
            for ($b=0; $b <$count1 ; $b++) 
            { 
                $arr=mysqli_fetch_array($ret1);
                $productid=$arr['productcode'];
                $productname=$arr['productname'];
                $price=$arr['price'];
                $image=$arr['productimage'];
                $description=$arr['description'];
                
            
    echo"   
			<div class='wow fadeInUp col-md-3 col-sm-6' data-wow-delay='1.9s' >
				<div class='product-thumb'>
        <a href='productdetails.php?PID=$productid'>
					<img src='$image' class='img-responsive' alt='Trainer'>
						
				</div>
				
				<h3>$productname</h3>
        </a>
        <h3>$ $price</h3>
                
				<a href='cartlist.php' class='cart-btn' data-wow-delay='1s'>Add to Cart</a>
				
			</div>
            
        ";
            }
        }
        
    ?>
	
        
    
<br><br>
	</div>
	</div>
	</section>

<!-- =========================
    OVERVIEW SECTION   
============================== -->
<section id="overview" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="col-md-6 col-sm-12">
				<video class="img-responsive" alt="Overview" controls autoplay muted loop poster="images/Bowflex PR3000 Home Gym.png" preload="metadata"> 
					<source src="images/Bowflex PR3000 Home Gym(360P).mp4" type="video/mp4"> 
				</video>
				
			</div>

			<div class="col-md-1"></div>

			<div class="wow fadeInUp col-md-4 col-sm-12" data-wow-delay="1s">
				<div class="overview-detail">
					<h2>Bowflex PR3000 HOME Gym </h2>
					<p>The Bowflex PR3000 is a compact space-saving total-body home gym with over 50 exercises to strengthen muscles and no-change cable system between sets to stay focused on workouts. <a href="productdetails.php?PID=5">Shop Now</a> </p>
					
				</div>
			</div>
		</div>
		<br><br><br><br><br>
		<div class="row">

			
			

			<div class="wow fadeInUp col-md-4 col-sm-12" data-wow-delay="1s">
				<div class="overview-detail">
					<h2>NordicTrack Commercial s22i Studio Cycle</h2>
					<p>The NordicTrack Commercial S22i Studio Cycle is a top-notch workout bike produced by NordicTrack.It consists of special features to offer an experience of cycling studio-like in the home comfort and allows various levels of digital resistance.
						Providing Automatic Trainer Control and multiple levels of decline and incline, it becomes one of very few stationary bikes.<a href="productdetails.php?PID=4">Shop Now</a>
						
				</div>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-6 col-sm-12">
				<video class="img-responsive" alt="Overview" controls autoplay muted loop preload="metadata"> 
					<source src="images/Experience Next-Level Cycling in Your Home with the NordicTrack Commercial S22i Studio Cycle(480P).mp4" type="video/mp4"> 
				</video>
				
			</div>

		</div>
		<br><br><br><br><br><br><br>
		<div class="row">

			<div class="col-md-6 col-sm-12">
				<video class="img-responsive" alt="Overview" controls autoplay muted loop preload="metadata"> 
					<source src="images/FLYBIRD 2021 New Design-FLYBIRD Adjustable Weight Bench with Waist Pad(480P).mp4" type="video/mp4"> 
				</video>
				
			</div>

			<div class="col-md-1"></div>

			<div class="wow fadeInUp col-md-4 col-sm-12" data-wow-delay="1s">
				<div class="overview-detail">
					<h2>FLYBIRD 2021 Adjustable Weight Bench</h2>
					<p>The FLYBIRD adjustable weight bench has a width of 15.7”, a length of 49.2”, and a height of 44.5” and contains a Waist Pad.This 2021 model can cater to up to 620lbs.<a href="productdetails.php?PID=6">Shop Now</a>
						
				</div>
			</div>
		</div>
</section>






<!-- =========================
    NEWSLETTER SECTION   
============================== -->
<section id="newsletter" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10" data-wow-delay="0.9s">
				<h2>Booking Section</h2>
				<p>If you want one-to-one consultations,please take an appointment here!</p>
				<div class="newsletter_detail">
					<form action="index.php" method="post" id="newsletter-signup">
						<div class="col-md-6 col-sm-6">
							<input name="txtname" type="text" class="form-control" id="name" placeholder="Name">
					  	</div>
						<div class="col-md-6 col-sm-6">
							<input name="txtemail" type="email" class="form-control" id="email" placeholder="Email">
					  	</div>
						  <div class="col-md-4 col-sm-4">
						  <select name="txttypes"> 
                    <option value="">Types of Consultations</option>
                    <option value="Online">Online</option>
                    <option value="Face to Face">At the HGE office</option>
                    
                  </select>
					</div>
					<div class="col-md-4 col-sm-4">
					<select name="txttime"> 
                    <option value="">Appointment Time Interval</option>
                    <option value="Morning">9:00am-12:00pm</option>
                    <option value="Evening">12:00pm-3:00pm</option>
                    
                  </select>
					</div>
					<div class="col-md-4 col-sm-4">
					<select name="txtday"> 
                    <option value="">Appointment Day</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
					<option value="Wednesday">Wednesday</option>
					<option value="any day">Any day</option>
                  </select>
					</div>
						<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
							<input name="btnsubmit" type="submit" class="form-control" id="submit" value="MAKE AN APPOINTMENT">
						</div>
				  	</form>
				</div>
			</div>

		</div>
	</div>
</section>





<!-- =========================
    TESTIMONIAL SECTION   
============================== -->
<section id="testimonial" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Testimonial Owl Carousel section
			================================================== -->
			<div id="owl-testimonial" class="owl-carousel">

				<div class="item col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 wow fadeInUp" data-wow-delay="0.6s">
					<i class="fa fa-quote-left"></i>
					<h3>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate.</h3>
					<h4>Sandar ( Fashion Designer )</h4>
				</div>

				<div class="item col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 wow fadeInUp" data-wow-delay="0.6s">
					<i class="fa fa-quote-left"></i>
					<h3>Yes! Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue.</h3>
					<h4>James Job ( Social Assistant )</h4>
				</div>

				<div class="item col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 wow fadeInUp" data-wow-delay="0.6s">
					<i class="fa fa-quote-left"></i>
					<h3>Sed dapibus rutrum lobortis. Sed nec interdum nunc, quis sodales ante. Maecenas volutpat congue.</h3>
					<h4>Mark Otto ( New Cyclist )</h4>
				</div>

				<div class="item col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 wow fadeInUp" data-wow-delay="0.6s">
					<i class="fa fa-quote-left"></i>
					<h3>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus.</h3>
					<h4>David Moore ( Pro Boxer )</h4>
				</div>
				
			</div>
			<div class="wow fadeInUp col-md-5 col-sm-4"  data-wow-delay="0.9s">
			<h3>Total Views Counter</h3>
			<h3> <?php echo "No Of Views -".$viewscount ; ?><h3>
			</div>
		</div>
	</div>
</section>


<!-- =========================
    FOOTER SECTION   
============================== -->
<footer>
	<div class="container">
		<div class="row">
			<div class="wow fadeInUp col-md-4 col-sm-4"  data-wow-delay="0.9s">
				<ul class="footer-list">
					<li><a href="index.php">Home</a></li>
					<li><a href="information.php">Information</a></li>
					<li><a href="wanted.php">Wanted</a></li>
					<li><a href="workshop.php">Workshop</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="featured.php">Featured</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					
				</ul>
			</div>
			<div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.6s">
			<h2>Contact Us</h2>
				<p>Address-4th floor of Sedona Hotel Yangon, No.1, Kabar Aye Pagoda Road, Yankin Township, Myanmar</p>
        <p>Phone Number-09912345</p>
        <p>Email-homegymequipment@gmail.com</p>
		
 </div>

			</div>
			<div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1s">
				<h2>Follow us</h2>
				<ul class="social-icon">
					<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="1s"></a></li>
					<li><a href="#" class="fa fa-twitter wow fadeInUp" data-wow-delay="1.3s"></a></li>
					<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="1.6s"></a></li>
					<li><a href="#" class="fa fa-behance wow fadeInUp" data-wow-delay="1.9s"></a></li>
					<li><a href="#" class="fa fa-google-plus wow fadeIn" data-wow-delay="2s"></a></li>
				</ul>
			</div>
			<div class="wow fadeInUp col-md-3 col-sm-4" data-wow-delay="1s">
				
			</div>
			<div class="clearfix"></div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.9402454457318!2d96.15282331434604!3d16.82932022309041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1935707460ac1%3A0x530b5b3a49642e2!2sSedona%20Hotel%20Yangon!5e0!3m2!1sen!2smm!4v1642347586669!5m2!1sen!2smm"  allowfullscreen="" loading="lazy" class="map"></iframe>
			<div class="col-md-12 col-sm-12">
				<p class="copyright-text">Copyright &copy;HGE Home Gym Equipment
                 </p>
			</div>
			
		</div>
	</div>
</footer>

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
	
<script type="text/javascript">
	const popupScreen = document.querySelector(".popup-screen");
	const popupBox = document.querySelector(".popup-box");
	const popupBtn = document.querySelector(".popup-btn");
	window.addEventListener("load",() => {
		setTimeout(() => {
			popupScreen.classList.add("active");
		},2000);
	});
	popupBtn.addEventListener("click",() =>{
		popupScreen.classList.remove("active");
		document.cookie="WebsiteName=testWebsite; max-age=" + 24 *60 *60;
	});
	const WebsiteCookie=document.cookie.indexOf("WebsiteName=");
	if (WebsiteCookie != -1) {
		popupScreen.style.display= "none";
	}
	else{
		popupScreen.style.display= "flex";
	}
</script>
</body>
</html>

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