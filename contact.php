<?php 
  session_start();
  include('connect.php');
  if (isset($_SESSION['cid']))
{
include ('header1.php');

}

else{
include('header.php');
}
?>
<?php if(isset($_POST['submit']))
    {
        $firstname=$_POST['txtfirstname'];
        $surname=$_POST['txtsurname'];
        $email=$_POST['txtemail'];
        $message=$_POST['txtmessage'];
        $policy=$_POST['txtpolicy'];
        if($policy=='Agree')
        {
        $insert="INSERT INTO contactus(firstname,surname,email,message)
        values('$firstname','$surname','$email','$message')";
        $query=mysqli_query($connect,$insert);
        if($query)
        {
            echo "<script>alert('Message Sent Successfully')</script>";
        
        }
        }
        else
        {
            echo "<script>alert('Please check privacy and policy')</script>";
        }
       
        
    }
    
?> 
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home Gym Equipment </title>
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



<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="responsive.css">


<link rel="stylesheet" href="test.css">

</head>

<body>
<!-- =========================
    NEWSLETTER SECTION   
============================== -->
<section id="newsletter" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10" data-wow-delay="0.9s">
				<h2 >Contact Us</h2>
				<p>You can send us messages to contact with us!</p>
				<div class="newsletter_detail">
					<form action="contact.php" method="post" id="newsletter-signup">
						<div class="col-md-12 col-sm-12">
							<input name="txtfirstname" type="text" class="form-control" id="name" placeholder="Enter First Name">
						  </div>
                          <div class="col-md-12 col-sm-12">
							<input name="txtsurname" type="text" class="form-control" id="name" placeholder="Enter Surname">
						  </div>
						<div class="col-md-12 col-sm-12">
							<input name="txtemail" type="email" class="form-control" id="email" placeholder="Enter Email">
						  </div>
                          <div class="col-md-12 col-sm-12">
							<input name="txtmessage" type="text" class="form-control" id="name" placeholder="Any Message">
						  </div>
              <div class="col-md-12 col-sm-12">
							
              <input type="checkbox" name="txtpolicy" value="Agree">
                         <a href="PrivacyPolicy.html"> Agree Privacy and Policy</a>
						  </div>
                          
						<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
							<input name="submit" type="submit" class="form-control" id="submit" value="SEND MESSAGE">
						</div>
					  </form>
				</div>
			</div>

		</div>
	</div>
 
</section>
<section class="map-bg" >
<div class="container">
  <div class="row">
  <div class="col-md-6 col-sm-6">
  <ul class="footer-list">
					<li><a href="index.php">Home</a></li>
					<li><a href="information.php">Information</a></li>
					<li><a href="wanted.php">Wanted</a></li>
					<li><a href="workshop.php">Workshop</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="featured.php">Featured</a></li>
					<li class="footer-active"><a href="contact.php">Contact Us</a></li>
					
				</ul>
  </div>
    <div class="col-md-6 col-sm-6">
    <h2 class="colour">Get in Touch With Us</h2>
				<p>Address-4th floor of Sedona Hotel Yangon, No.1, Kabar Aye Pagoda Road, Yankin Township, Myanmar</p>
        <p>Phone Number-09912345</p>
        <p>Email-homegymequipment@gmail.com</p>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.9402454457318!2d96.15282331434604!3d16.82932022309041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1935707460ac1%3A0x530b5b3a49642e2!2sSedona%20Hotel%20Yangon!5e0!3m2!1sen!2smm!4v1642347586669!5m2!1sen!2smm"  allowfullscreen="" loading="lazy" class="map"></iframe>
  </div>
</div>


</section>

  </body>