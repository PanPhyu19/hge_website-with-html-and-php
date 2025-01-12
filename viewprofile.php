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

$UserID = $_SESSION['cid'];
$SelectUser = "Select * from customer where customerid = '$UserID'";
$SelectUserRun = mysqli_query($connect, $SelectUser);
$Ufetch = mysqli_fetch_array($SelectUserRun);

$Name = $Ufetch['firstname'];
$SurName = $Ufetch['surname'];
$Email = $Ufetch['email'];
$Phone = $Ufetch['phno'];

$Address = $Ufetch['address'];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
	 <link rel="stylesheet" href="css">
 </head>
 <body>
 <section id="newsletter" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10" data-wow-delay="0.9s">
				<h2 >Profile</h2>
				
				<div class="newsletter_detail">
					<form action="viewprofile.php" method="post" id="newsletter-signup">
					<div class="col-md-12 col-sm-12">
						<h3 >Firstname</h3>
					</div>
						<div class="col-md-12 col-sm-12">
							<p  id="name"class="form-control"><?php echo "$Name"?></p>
						  </div>
						  <div class="col-md-12 col-sm-12">
						<h3 > Surname</h3>
						</div>
                          <div class="col-md-12 col-sm-12">
						  <p  id="name"class="form-control"><?php echo "$SurName"?></p>
						  </div>
						  <div class="col-md-12 col-sm-12">
						<h3>Email</h3>
						</div>
						<div class="col-md-12 col-sm-12">
						<p  id="email"class="form-control"><?php echo "$Email"?></p>
						  </div>
						  <div class="col-md-12 col-sm-12">
						<h3>Phone Number</h3>
						</div>
                          <div class="col-md-12 col-sm-12">
						  <p  id="name" class="form-control"><?php echo "$Phone"?></p>
						  </div>
						  <div class="col-md-12 col-sm-12">
						<h3>Address</h3>
						</div>
                          <div class="col-md-12 col-sm-12">
						  <p  id="name"class="form-control"><?php echo "$Address"?></p>
						  </div>
              
                          
						<div class="col-md-12 col-sm-12">
							<a href="updateprofile.php"><h3>Update Profile?</h3></a>
						</div>
						<div class="col-md-12 col-sm-12">
							<a href="chgpassword.php"><h3>Change Password?</h3></a>
						</div>
					  </form>
				</div>
			</div>

		</div>
	</div>
 
</section>
 <a href="updateprofile.php">Update Profile</a> <a href="chgpassword.php">Change Password</a>
 </body>
 </html>
 <?php 
include 'footer.php'
  ?>
  