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

if(isset($_SESSION['cid']))
{
    
    $cusid=$_SESSION['cid'];
	$password=$_POST['txtpsw'];
	
if (isset($_POST['btnchange']))
{	
	$select="SELECT * FROM customer where customerid='$cusid' and password='$password'";
	$query=mysqli_query($connect,$select);
	$count=mysqli_num_rows($query);
	if ($count<1)
	
	{
		echo"<script>alert('Old Password is wrong. Please check again!')</script>";
		
	}
	else{
		$newpassword=$_POST['txtnewpsw'];
		$update="UPDATE customer set password='$newpassword' where customerid='$cusid'";
		$query=mysqli_query($connect,$update);
	
		if(isset($query))
		{
			echo "<script>alert('Password Change Successful!')</script>";
			echo"<script>window.location='index.php'</script>";
		}
	}
    

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
					<form action="chgpassword.php" method="post" id="newsletter-signup">
					<div class="col-md-6 col-sm-6">
							<h5>Old Password</h5>
						  </div>
						<div class="col-md-6 col-sm-6">
							<input name="txtpsw" type="pasword" class="form-control" id="name" >
						  </div>
                          <div class="col-md-6 col-sm-6">
							<h5>New Password</h5>
						  </div>
						<div class="col-md-6 col-sm-6">
							<input name="txtnewpsw" type="password" class="form-control" id="name" >
						  </div>
						
						<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
							<input name="btnchange" type="submit" class="form-control" id="submit" value="Change">
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