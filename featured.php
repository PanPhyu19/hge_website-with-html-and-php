<?php
session_start();
include('connect.php');
if (isset($_SESSION['cid']))
{
include ('header1.php');

}
else if(isset($_SESSION['sid']))
{
  include('staffheader.php');
}

else{
include('header.php');
}
?>
<!DOCTYPE html>
<html lang="en" class="html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/review.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">

<!-- Main css -->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   
<!-- Main css -->


<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lora:700italic' rel='stylesheet' type='text/css'>

    <title>Featured</title>
</head>
<body >
<header>
    
</header>
    <section class="review">
        <div class="about-section">
            <div class="inner-container">
              <h1>Fitbit Luxe Review</h1>
              <p class="text">
                Fitbit likes to say its wearables resemble jewelry. But it’s difficult to make a fitness tracker that actually looks like jewelry and does everything from logging your steps, sleep and workouts to telling you to breathe and relax. 
              </p>
             
                <a href="review.php" class="review-link">Read More  <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
              
            </div>
          </div>
    </section>
    <section id="blog" class="parallax-section">
      <div class="container">
        <div class="row">
        <div class='wow fadeInUp col-md-8 col-sm-7' >
        <h2>Featured Products</h2>
        <?php
        $query="SELECT * FROM products where productcode=18 or productcode=24 or productcode=28 ORDER BY productcode DESC";
        $ret=mysqli_query($connect,$query);
        $count=mysqli_num_rows($ret);
        if($count<1)
        {
            echo "<p>No Product Data Found.</p>";
            exit();
        }
        for ($a=0; $a <$count ; $a+=1) 
        { 
            $query1="SELECT * FROM products where productcode=18 or productcode=24 or productcode=28  ORDER BY productcode DESC LIMIT $a,1";
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
			<div class='wow fadeInUp col-md-4 col-sm-6' data-wow-delay='1.9s' id='featured'>
				<div class='product-thumb'>
        <a href='productdetails.php?PID=$productid'>
					<img src='$image' class='img-responsive' alt='Trainer'>
						
				</div>
				
				<h3>$productname</h3>
        </a>
        <h3>$ $price</h3>
                
				<a href='cartlist.php?PID=$productid&qty=1' class='cart-btn' data-wow-delay='1s'>Add to Cart</a>
				
			</div>
            
        ";
            }
        }
        
    ?>
    <hr>
    <div class='wow fadeInUp col-md-12 col-sm-12' data-wow-delay='1.9s' id='running-watch'>
          <h2>Fitness Trackers</h2>
      </div>
        <?php
        $query="SELECT * FROM products where producttype='wearable tracker' ORDER BY productcode DESC";
        $ret=mysqli_query($connect,$query);
        $count=mysqli_num_rows($ret);
        if($count<1)
        {
            echo "<p>No Product Data Found.</p>";
            exit();
        }
        for ($a=0; $a <$count ; $a+=1) 
        { 
            $query1="SELECT * FROM products where producttype='wearable tracker' ORDER BY productcode DESC LIMIT $a,1";
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
			<div class='wow fadeInUp col-md-4 col-sm-6' data-wow-delay='1.9s' id='fitness-tracker'>
				<div class='product-thumb'>
        <a href='productdetails.php?PID=$productid'>
					<img src='$image' class='img-responsive' alt='Trainer'>
						
				</div>
				
				<h3>$productname</h3>
        </a>
        <h3>$ $price</h3>
                
				<a href='cartlist.php?PID=$productid&qty=1' class='cart-btn' data-wow-delay='1s'>Add to Cart</a>
				
			</div>
            
        ";
            }
        }
        
    ?>
   	<div class='wow fadeInUp col-md-4 col-sm-6' data-wow-delay='1.9s' id='fitness-tracker'>
				
		</div>
    <hr>
    <div class='wow fadeInUp col-md-12 col-sm-12' data-wow-delay='1.9s' id='running-watch'>
     <h2>Running Watches</h2>
      </div>
    <?php
        $query2="SELECT * FROM products where producttype='wearable running' ORDER BY productcode DESC";
        $ret2=mysqli_query($connect,$query2);
        $count2=mysqli_num_rows($ret2);
        if($count2<1)
        {
            echo "<p>No Product Data Found.</p>";
            exit();
        }
        for ($a=0; $a <$count2 ; $a+=1) 
        { 
            $query3="SELECT * FROM products where producttype='wearable running' ORDER BY productcode DESC LIMIT $a,1";
            $ret3=mysqli_query($connect,$query3);
            $count3=mysqli_num_rows($ret3);
            
            for ($b=0; $b <$count3 ; $b++) 
            { 
                $arr1=mysqli_fetch_array($ret3);
                $productid1=$arr1['productcode'];
                $productname1=$arr1['productname'];
                $price1=$arr1['price'];
                $image1=$arr1['productimage'];
                $description1=$arr1['description'];
                
            
    echo"   
			<div class='wow fadeInUp col-md-4 col-sm-6' data-wow-delay='1.9s' id='running-watch'>
				<div class='product-thumb'>
        <a href='productdetails.php?PID=$productid1'>
					<img src='$image1' class='img-responsive' alt='Trainer'>
						
				</div>
				
				<h3>$productname1</h3>
        </a>  
        <h3>$ $price1</h3>
             
				<a href='cartlist.php?PID=$productid&qty=1' class='cart-btn' data-wow-delay='1s'>Add to Cart</a>
				
			</div>
            
        ";
            }
        }
    ?>
    <div class='wow fadeInUp col-md-4 col-sm-6' data-wow-delay='1.9s' id='running-watch'>
				
        </div>
        <hr>
        <div class='wow fadeInUp col-md-12 col-sm-12' data-wow-delay='1.9s' id='heartrate-monitor'>
         <h2>Heart Rate Monitors</h2>
          </div>
          <?php
        $query4="SELECT * FROM products where producttype='wearable heartrate' ORDER BY productcode DESC";
        $ret4=mysqli_query($connect,$query4);
        $count4=mysqli_num_rows($ret4);
        if($count4<1)
        {
            echo "<p>No Product Data Found.</p>";
            exit();
        }
        for ($a=0; $a <$count4 ; $a+=1) 
        { 
            $query5="SELECT * FROM products where producttype='wearable heartrate' ORDER BY productcode DESC LIMIT $a,1";
            $ret5=mysqli_query($connect,$query5);
            $count5=mysqli_num_rows($ret5);
            
            for ($b=0; $b <$count5 ; $b++) 
            { 
                $arr2=mysqli_fetch_array($ret5);
                $productid2=$arr2['productcode'];
                $productname2=$arr2['productname'];
                $price2=$arr2['price'];
                $image2=$arr2['productimage'];
                $description2=$arr2['description'];
                
            
    echo"   
			<div class='wow fadeInUp col-md-4 col-sm-6' data-wow-delay='1.9s' id='heartrate-monitor'>
				<div class='product-thumb'>
        <a href='productdetails.php?PID=$productid2'>
					<img src='$image2' class='img-responsive' alt='Trainer'>
						
				</div>
				
				<h3>$productname2</h3>
        </a>  
        <h3>$ $price2</h3>
                
				<a href='cartlist.php?PID=$productid&qty=1' class='cart-btn' data-wow-delay='1s'>Add to Cart</a>
				
			</div>
            
        ";
            }
        }
    ?>    
</div>
          <div class="col-md-4 col-sm-5 wow fadeInUp" data-wow-delay="1.3s">
          
      <div class="recent-post">
        <h3>Wearable Categories</h3>
        <div class="media">
            <div class="media-object pull-left">
              <a href="#featured"><img src="images/wearablefeatured.jpg" class="img-responsive" alt="blog"></a>
            </div>
            <div class="media-body">
          
              <h4 class="media-heading"><a href="#featured">Featured Products</a></h4>
            </div>
          </div>
          <div class="media">
            <div class="media-object pull-left">
              <a href="#fitness-tracker"><img src="images/fitbit.jpg" class="img-responsive" alt="blog"></a>
            </div>
            <div class="media-body">
              
              <h4 class="media-heading"><a href="#fitness-tracker">Fitness Trackers</a></h4>
            </div>
          </div>
          <div class="media">
            <div class="media-object pull-left">
              <a href="#running-watch"><img src="images/running watch.jpg" class="img-responsive" alt="blog"></a>
            </div>
            <div class="media-body">
              
              <h4 class="media-heading"><a href="#running-watch">Running Watches</a></h4>
            </div>
          </div>
          <div class="media">
            <div class="media-object pull-left">
              <a href="#heartrate-monitor"><img src="images/heart rate monitor.jfif" class="img-responsive" alt="blog"></a>
            </div>
            <div class="media-body">
          
              <h4 class="media-heading"><a href="#heartrate-monitor">Heart Rate Monitors</a></h4>
            </div>
          </div>
      </div>
              
    </div>
    
  </div>
</div>
</section>
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
</body>
</html>
<?php
$page='featured';
include('footer.php');
?>