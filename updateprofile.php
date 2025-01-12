<?php 
session_start();
include('connect.php');
if (isset($_SESSION['cid']))
{
include ('header1.php');

}
else{
include('header.php');
};

$UserID = $_SESSION['cid'];
$UserName=$_SESSION['cname'];
$SelectUser = "Select * from customer where customerid = '$UserID'";
$SelectUserRun = mysqli_query($connect, $SelectUser);
$Ufetch = mysqli_fetch_array($SelectUserRun);



if (isset($_POST['btnupdate'])) {
	$UpUserName = $_POST['txtusername'];
	$UpSurName = $_POST['txtsurname'];
	
	$UpPhoneNumber = $_POST['txtPN'];

	$UpAddress = $_POST['txtAdd'];
	

	
	echo $Update = "Update customer Set 
				firstname = '$UpUserName',
				surname='$UpSurName',
				phno= '$UpPhoneNumber', 
				address = '$UpAddress' where customerid = '$UserID'";

	$Urun = mysqli_query($connect, $Update);

	if ($Urun)
	{
	echo "<script>window.alert('User data updated successfully')</script>";
	echo "<script>window.location='index.php'</script>";
	}
	else
	{
	echo "<script>window.alert('Something went wrong')</script>";
	echo mysqli_error($connect);
	}

}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
	 <link rel="stylesheet" href="css/style.css">
 </head>
 <body>
 <section id="newsletter" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10" data-wow-delay="0.9s">
				
				<div class="newsletter_detail">
					<form action="updateprofile.php" method="post" id="newsletter-signup">
					<div class="col-md-6 col-sm-6">
							<h5>First Name</h5>
						  </div>
						<div class="col-md-6 col-sm-6">
							<input name="txtusername" type="text" class="form-control" id="name" value="<?php $FirstName ?>">
						  </div>
                          <div class="col-md-6 col-sm-6">
							<h5>Surname</h5>
						  </div>
						<div class="col-md-6 col-sm-6">
							<input name="txtsurname" type="text" class="form-control" id="name" value="<?php $SurName ?>">
						  </div>
						 
                          <div class="col-md-6 col-sm-6">
							<h5>Phone Number</h5>
						  </div>
						<div class="col-md-6 col-sm-6">
							<input name="txtPN" type="text" class="form-control" id="name" value="">
						  </div>
						  <div class="col-md-6 col-sm-6">
							<h5>Address</h5>
						  </div>
						<div class="col-md-6 col-sm-6">
							<input name="txtAdd" type="text" class="form-control" id="name" value="">
						  </div>
              <div class="col-md-12 col-sm-12">
							
            
                          
						<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
							<input name="btnupdate" type="submit" class="form-control" id="submit" value="Update">
						</div>
					  </form>
				</div>
			</div>

		</div>
	</div>
 
</section>
 </body>
 </html>
 <?php 
include ('footer.php');
  ?>