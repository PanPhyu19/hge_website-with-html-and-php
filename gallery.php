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
   
    $web_url = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
 
    $str = "<?xml version='1.0' ?>";
    $str .= "<rss version='2.0'>";
        $str .= "<channel>";
            $str .= "<title>Home Gym Equipment</title>";
            $str .= "<description>HGE is a home gym equipment sales website offering a variety of home gym equipment from different categories. We also provide care and repair services.</description>";
            $str .= "<language>en-US</language>";
            $str .= "<link>$web_url</link>";
     
            $conn = mysqli_connect("localhost", "root", "", "hge(db)");
            $query="SELECT * FROM products ORDER BY productcode DESC";
            $result = mysqli_query($conn,$query);
     
            while ($row = mysqli_fetch_object($result))
            {
                $str .= "<item>";
                    $str .= "<title>" . htmlspecialchars($row->productname) . "</title>";
                    $str .= "<description>" . htmlspecialchars($row->description) . "</description>";
                    $str .= "<link>" . $web_url . "/product.php?id=" . $row->productcode . "</link>";
                $str .= "</item>";
            }
     
        $str .= "</channel>";
    $str .= "</rss>";
     
    file_put_contents("rss.xml", $str);

   ?>
<!DOCTYPE html>

<html lang="en" class="all">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="css/new.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">
  </head>
<body class="body">
  <h2>Our Products </h2>
  <div class="gallerywrapper">
    <!-- filter Items -->
    <nav>
    <a href="rss.xml" target="_blank"><img src="images/rss.jpg" alt="" class="rssimage"></a>
      <div class="items">
        <span class="item active" data-name="all">All</span>
        <span class="item" data-name="latest">Latest</span>
        <span class="item" data-name="second hand">Second Hand</span>
        <span class="item" data-name="wearable">Wearables</span>
        
      </div>
    </nav>
    <!-- filter Images -->
    <div class="gallery">
    <?php
        $query="SELECT * FROM products where producttype='new'  ORDER BY productcode ";
        $ret=mysqli_query($connect,$query);
        $count=mysqli_num_rows($ret);
        if($count<1)
        {
            echo "<p>No Product Data Found.</p>";
            exit();
        }
        for ($a=0; $a <$count ; $a+=1) 
        { 
            $query1="SELECT * FROM products where producttype='new'  ORDER BY productcode  LIMIT $a,1";
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
           
    <div class='image' data-name='latest'><span><a href='productdetails.php?PID=$productid'><img src='$image' alt=''></a></span>
    </div>";
            }
        }
        $queryfeatured="SELECT * FROM products where producttype like 'wearable %'  ORDER BY productcode ";
        $retfeatured=mysqli_query($connect,$queryfeatured);
        $countfeatured=mysqli_num_rows($retfeatured);
        if($countfeatured<1)
        {
            echo "<p>No Product Data Found.</p>";
            exit();
        }
        for ($a=0; $a <$countfeatured ; $a+=1) 
        { 
            $queryfeatured1="SELECT * FROM products where producttype like 'wearable %'  ORDER BY productcode  LIMIT $a,1";
            $retfeatured1=mysqli_query($connect,$queryfeatured1);
            $countfeatured1=mysqli_num_rows($retfeatured1);
            
            for ($b=0; $b <$countfeatured1 ; $b++) 
            { 
                $arr=mysqli_fetch_array($retfeatured1);
                $productid2=$arr['productcode'];
                $productname2=$arr['productname'];
                $price2=$arr['price'];
                $image2=$arr['productimage'];
                $description2=$arr['description'];
                
            
    echo"   
           
    <div class='image' data-name='wearable'><span><a href='productdetails.php?PID=$productid2'><img src='$image2' alt=''></a></span>
    </div>";
            }
        }
        
        $querywanted="SELECT * FROM products where producttype='second'  ORDER BY productcode ";
        $retwanted=mysqli_query($connect,$querywanted);
        $countwanted=mysqli_num_rows($retwanted);
        if($countwanted<1)
        {
            echo "<p>No Product Data Found.</p>";
            exit();
        }
        for ($a=0; $a <$countwanted ; $a+=1) 
        { 
            $querywanted1="SELECT * FROM products where producttype='second'  ORDER BY productcode  LIMIT $a,1";
            $retwanted1=mysqli_query($connect,$querywanted1);
            $countwanted1=mysqli_num_rows($retwanted1);
            
            for ($b=0; $b <$countwanted1 ; $b++) 
            { 
                $arr=mysqli_fetch_array($retwanted1);
                $productid1=$arr['productcode'];
                $productname1=$arr['productname'];
                $price1=$arr['price'];
                $image1=$arr['productimage'];
                $description1=$arr['description'];
                
            
    echo"   
           
    <div class='image' data-name='second hand'><span><a href='productdetails.php?PID=$productid1'><img src='$image1' alt=''></a></span>
    </div>";
            }
        }
        
        
    ?>
      
      
    </div>
  </div>
  
  <div class="preview-box">
    <div class="details">
     
      <span class="title">Image Category: <p></p></span>
      <span class="icon fas fa-times"></span>
    </div>
    <div class="image-box"><img src="" alt=""></div>
  </div>
  <div class="shadow"></div>
 
 <!-- =========================
    FOOTER SECTION   
============================== -->
<section class="map-bg" >
<div class="container">
  <div class="row">
    
  <div class="col-md-4 col-sm-4">
  <ul class="footer-list">
					<li><a href="index.php">Home</a></li>
					<li><a href="information.php">Information</a></li>
					<li><a href="wanted.php">Wanted</a></li>
					<li><a href="workshop.php">Workshop</a></li>
					<li class="footer-active"><a href="gallery.php">Gallery</a></li>
					<li><a href="featured.php">Featured</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					
				</ul>
      </div>
    <div class="col-md-4 col-sm-4">
    <h2 class="colour">Get in Touch With Us</h2>
				<p>Address-4th floor of Sedona Hotel Yangon, No.1, Kabar Aye Pagoda Road, Yankin Township, Myanmar</p>
        <p>Phone Number-09912345</p>
        <p>Email-homegymequipment@gmail.com</p>
    </div>
    <div class="col-md-4 col-sm-4">
    <h2 class="colour">Follow us</h2>
				<ul class="social-icon">
					<li><a href="#" class="fa fa-facebook " ></a></li>
					<li><a href="#" class="fa fa-twitter " ></a></li>
					<li><a href="#" class="fa fa-dribbble" ></a></li>
					<li><a href="#" class="fa fa-behance " ></a></li>
					<li><a href="#" class="fa fa-google-plus "></a></li>
				</ul>
      </div>
      
      <div class="col-md-12 col-sm-12">
				<p class="copyright-text">Copyright &copy;HGE Home Gym Equipment
                 </p>
			</div>
  </div>
</div>


</section>

  <script src="js/script.js"></script>
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