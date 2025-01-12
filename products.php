<?php 
session_start();
    include('connect.php');
if (isset($_POST['btnupload']))
    {
        $name=$_POST['txtname'];
        $type=$_POST['txttype'];
        $description=$_POST['txtdescription'];
        $price=$_POST['txtprice'];
        $quantity=$_POST['txtquantity'];
        $Image3=$_FILES['txtimage']['name'];
    $Folder="images/";
    $filename=$Folder . '_' . $Image3; // Images/_a.jpg
    $image=copy($_FILES['txtimage']['tmp_name'],$filename);
    if(!$image)
    {
    echo "<p>Cannot Upload  Product Image</p>";
    exit();
    }
            $insert="INSERT into products(productname,producttype,productimage,description,price,quantity)
            Values('$name','$type','$filename','$description','$price','$quantity')";
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
<body class="body" >


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
<br><br><br>
<div class="product-wrapper">
         <div class="title-text">
            <div class="title">
               <h3 class="product-title">Product upload</h3>
            </div>
            <div class="form-inner">
               <form action="products.php" class="login" method="POST" enctype="multipart/form-data">
                  <div class="field">
                     <input type="text" placeholder="Product Name" name="txtname"required>
                  </div>
                  <div class="field">
                    <select name="txttype">
                        <option value="">Select Product Type</option>
                        <option value="new">New</option>
                        <option value="second">Second Hand</option>
                        <option value="wearable tracker">Fitness Tracker</option>
                        <option value="wearable running">Running Watches</option>
                        <option value="wearable heartrate">Heartrate Monitors</option>
                    </select>
                  </div>
                  
                  <div class="field">
                     <input type="text" placeholder="Price" name="txtprice" required>
                  </div>
                  <div class="field">
                     <input type="text" placeholder="Quantity" name="txtquantity" required>
                  </div>
                  <div class="field">
                     <input type="file" name="txtimage" required>
                  </div>
                  <div class="field">
                      <textarea name="txtdescription" rows="6" cols="50"  required placeholder="Description"></textarea>
                     
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

 