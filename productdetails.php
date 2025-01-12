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

if (isset($_REQUEST['PID']))
{
	$productid=$_REQUEST['PID'];
	$query="SELECT * FROM products
    WHERE productcode='$productid'";
    $ret=mysqli_query($connect,$query);
    $arr=mysqli_fetch_array($ret);

    $ProductCode=$arr['productcode'];
    $ProductName=$arr['productname'];
    $ProductType=$arr['producttype'];
    $Price=$arr['price'];
    $Quantity=$arr['quantity'];
    $Description=$arr['description'];
    $ProductImage=$arr['productimage'];
 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Gym Equipment</title>
    <link href="css/new.css" rel="stylesheet">
</head>
<body>
    <div class="hero">
        
             <div class="container">
                <div class="row">

                <div class="productrow">
                    <div class='wow fadeInUp col-md-6 col-sm-12' data-wow-delay='1.9s'>
                    <div class="productcol">
                        <div class="productslider">
                <?php
               echo" 
                    <div class='product'>
        <img src='$ProductImage' alt='' onclick='clickme(this)' >
                        

                    </div>
                    <div class='productpreview'>
                        <img src=' $ProductImage' id='imagebox' alt=''>
                    </div>
                </div>

            </div>
            </div>";
           
            ?>
             <div class='wow fadeInUp col-md-6 col-sm-12' data-wow-delay='1.9s'>
    <?php
         echo"    <div class='productcol'>

<div class='productcontent'>
    
    <h2> $ProductName</h2>
   
    <p class='productprice'>$ $Price</p>
    <p>
     $Description
    </p>
    <p>Quantity: <input type='text' value='1'></p>
    <a href='cartlist.php?PID=$productid&qty=1'><button type='button'>
        <i class='fa fa-shopping-cart'></i>
        Add to cart</button></a>
</div>

</div>
</div>
</div>";

?>
                  
                         
            </div>
            </div>
        </div>
   
</body>
</html>