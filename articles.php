<?php 
session_start();
    include('connect.php');
if (isset($_POST['btnupload']))
    {
        $title=$_POST['txttitle'];
        $author=$_POST['txtauthor'];
        $text=$_POST['txttext'];
        $date=$_POST['txtdate'];
        $paragraph=$_POST['txtparagraph'];
        $Image1=$_FILES['txtimage']['name'];
        $Folder="Images/";
        $filename=$Folder."_".$Image1;
        $image=copy($_FILES['txtimage']['tmp_name'],$filename);
        if(!$image)
        {
            echo"<p> Cannot Upload Product Image </p>";
            exit();
        }

            $insert="INSERT into articles(articletitle,articleauthor,articledate,articletext,articleparagraph,articleimage)
            Values('$title','$author','$date','$text','$paragraph','$filename')";
            $ret=mysqli_query($connect,$insert);
            if($ret)
            {
                echo "<script>alert('Uploaded successfully!')</script>";
				
            }
        
        
    	
	}
    

?>
<!DOCTYPE html>
<html lang="en" class="html">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Products</title>
   <link rel="stylesheet" href="css/new.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/new.css">
   <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">
</head>
<body class="body">
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
<br><br><br><br>
<div class="product-wrapper">
         <div class="title-text">
            <div class="title">
               <h3 class="product-title">Articles Upload</h3>
            </div>
            <div class="form-inner">
               <form action="articles.php" class="login" method="POST" enctype="multipart/form-data">
                  <div class="field">
                     <input type="text" placeholder="Article Title" name="txttitle"required>
                  </div>
                  <div class="field">
                     <input type="text" placeholder="Article Author" name="txtauthor" required>
                  </div>
                  
                  <div class="field">
                     <input type="text" placeholder="Article Date" name="txtdate" required>
                  </div>
                  <div class="field">
                     <input type="text" placeholder="Article Text" name="txttext" required>
                  </div>
                  <div class="field">
                     <input type="file" name="txtimage" required>
                  </div>
                  <div class="field">
                      <textarea name="txtparagraph" rows="6" cols="50"  required placeholder="Paragraph"></textarea>
                     
                  </div>
                  <br> <br><br>
                  
                  
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Upload" name="btnupload">
                  </div>
                </form>
            </div>
        </div>
</div>
</body>
</html>

 