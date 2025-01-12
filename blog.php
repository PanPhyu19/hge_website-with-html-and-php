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

if (isset($_REQUEST['AID']))
{
	$articleid=$_REQUEST['AID'];
	$query="SELECT * FROM articles
    WHERE articleid='$articleid'
	and articleid != 5";
    $ret=mysqli_query($connect,$query);
    $arr=mysqli_fetch_array($ret);

    $ArticleID=$arr['articleid'];
    $ArticleTitle=$arr['articletitle'];
    $ArticleAuthor=$arr['articleauthor'];
    $ArticleDate=$arr['articledate'];
    $ArticleText=$arr['articletext'];
    $ArticleParagraph=$arr['articleparagraph'];
    $ArticleImage=$arr['articleimage'];
 
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

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">

<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lora:700italic' rel='stylesheet' type='text/css'>

</head>
<body>








<!-- =========================
    BLOG SECTION   
============================== -->
<section id="blog" class="parallax-section">
	<div class="container">
		<div class="row">
<?php
echo"
			<div class='col-md-8 col-sm-7'>

				<div class='blog-content wow fadeInUp' data-wow-delay='1s'>
                	<h3> $ArticleTitle</h3>
					<span class='meta-date'> $ArticleDate</span>
					
					<span class='meta-author'><a href='#'> $ArticleAuthor</a></span>
					<div class='blog-clear'></div>
					<p>$ArticleText</p>
                    
                    <div class='blog-image wow fadeInUp' data-wow-delay='0.9s'>
                        <img src='$ArticleImage' class='img-responsive' alt='blog'>
                    </div>
                
					
					<p>$ArticleParagraph</p>
				</div>
                ";
                
				
                ?>
				

				

			</div>

			<div class="col-md-4 col-sm-5 wow fadeInUp" data-wow-delay="1.3s">
            
            	

				<div class="recent-post">
					<h3>Recent Posts</h3>
<?php

$queryarticle="SELECT * FROM articles  
where articleid<>$articleid
ORDER BY articleid";
$retarticle=mysqli_query($connect,$queryarticle);
$countarticle=mysqli_num_rows($retarticle);
if($countarticle<1)
{
    echo "<p>No Product Data Found.</p>";
    exit();
}
for ($a=0; $a <$countarticle ; $a+=1) 
{ 
    $queryarticle1="SELECT * FROM articles 
    where articleid<>$articleid
     ORDER BY articleid LIMIT $a,1";
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
        <div class='media'>
							<div class='media-object pull-left'>
								<a href=a href='blog.php?AID=$articleid'><img src='$articleimage' class='img-responsive' alt='blog'></a>
							</div>
							<div class='media-body'>
								<h5>$articledate</h5>
								<h4 class='media-heading'><a href='blog.php?AID=$articleid'>$articletitle</a></h4>
							</div>
						</div>"
    ;
    }
}
?>
						
						
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
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
<?php
include('footer.php');
?>