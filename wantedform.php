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
if(isset($_POST['btnsubmit']))
    {
      if(isset($_SESSION['cid'])){
        $cid=$_SESSION['cid'];
        $productname=$_POST['txtproductname'];
        $description=$_POST['txtdescription'];
        $price=$_POST['txtprice'];
        $email=$_POST['txtemail'];
       
       
        
        $insert="INSERT INTO secondproducts(productname,description,productprice,useremail,customerid)
        values('$productname','$description','$price','$email',$cid)";
        $query=mysqli_query($connect,$insert);
        if($query)
        {
            echo "<script>alert('Requested Successfully')</script>";
        
        }
      }
       else{
         echo "<script>alert('Please Login First!')</script>";
         echo "<script>window.location='register.php'</script>";
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



</head>

<body>
    <form action="wantedform.php" method="POST">
    
           
    <section id="newsletter" class="parallax-section">
    <div class="container">
      <div class="row">
  
        <div class="wow fadeInUp col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10" data-wow-delay="0.9s">
          <h2 >Send Your Enquiries Now</h2>
         
          <div class="newsletter_detail">
            <form action="" method="post" id="newsletter-signup">
              <div class="col-md-12 col-sm-12">
                <input name="txtproductname" type="text" class="form-control" id="name" placeholder="Enter Product Name" required>
                </div>
                            <div class="col-md-12 col-sm-12">
                <input name="txtdescription" type="text" class="form-control" id="name" placeholder="Enter Product Description" required>
                </div>
              <div class="col-md-12 col-sm-12">
                <input name="txtprice" type="text" class="form-control" id="name" placeholder="Enter Price" required>
                </div>
                            <div class="col-md-12 col-sm-12">
                <input name="txtemail" type="email" class="form-control" id="email" placeholder="Enter Email" required>
                </div>
               
              
               
                            
              <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
                <input name="btnsubmit" type="submit" class="form-control" id="submit" value="Request">
              </div>
              </form>
          </div>
        </div>
  
      </div>
    </div>
   
  </section>
<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>



</body>
</html>
<?php
include('footer.php');
?>