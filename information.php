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
<link rel="stylesheet" href="test1.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="test.css">

</head>

<body>


<!-- =========================
    Products SECTION   
============================== -->
<section id="products" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="1.3s">
				<h2>Latest Products</h2>
				
			</div>
 <?php
        $query="SELECT * FROM products where producttype='new' ORDER BY productcode DESC";
        $ret=mysqli_query($connect,$query);
        $count=mysqli_num_rows($ret);
        if($count<1)
        {
            echo "<p>No Product Data Found.</p>";
            exit();
        }
        for ($a=0; $a <$count ; $a+=1) 
        { 
            $query1="SELECT * FROM products where producttype='new' ORDER BY productcode DESC LIMIT $a,1";
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
			<div class='wow fadeInUp col-md-3 col-sm-6' data-wow-delay='1.9s' id='frame'>
				<div class='product-thumb'>
				<a href='productdetails.php?PID=$productid'>
					<img src='$image' class='img-responsive' alt='Trainer'>
				</div>
				<h3>$productname</h3>
				</a>
				<a href='cartlist.php?PID=$productid&qty=1' class='cart-btn' data-wow-delay='1s'>Add to Cart</a>
				
			</div>
           
        ";
            }
        }
    ?>

		
		</div>
	</div>
</section>

<!-- =========================
    BLOG SECTION   
============================== -->
<section id="blog" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12 text-center">
				<h2>Latest Fitness Information</h2>
				
			</div>
			<?php
        $queryarticle="SELECT * FROM articles  ORDER BY articleid";
        $retarticle=mysqli_query($connect,$queryarticle);
        $countarticle=mysqli_num_rows($retarticle);
        if($countarticle<1)
        {
            echo "<p>No Product Data Found.</p>";
            exit();
        }
        for ($a=0; $a <$countarticle ; $a+=1) 
        { 
            $queryarticle1="SELECT * FROM articles where articleid<> 5 ORDER BY articleid LIMIT $a,1";
            $retarticle1=mysqli_query($connect,$queryarticle1);
            $countarticle1=mysqli_num_rows($retarticle1);
            
            for ($b=0; $b <$countarticle1 ; $b++) 
            { 
                $arr1=mysqli_fetch_array($retarticle1);
                $articleid=$arr1['articleid'];
                $articletitle=$arr1['articletitle'];
                $articleauthor=$arr1['articleauthor'];
				$articletext=$arr1['articletext'];
				$articledate=$arr1['articledate'];
                $articleparagraph=$arr1['articleparagraph'];
                $articleimage=$arr1['articleimage'];
				
                
            echo"
			<div class='wow fadeInUp col-md-6 col-sm-12' data-wow-delay='0.9s'>
				<div class='blog-thumb'>
					<span class='blog-date'>$articledate</span>
					<h3 class='blog-title'><a href='blog.php?AID=$articleid'>$articletitle</a></h3>
					<h5 id='blog-author'>by $articleauthor</h5>
				</div>
			</div>";
			}
		}
?>

			
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
$page='information';
include('footer.php');
?>