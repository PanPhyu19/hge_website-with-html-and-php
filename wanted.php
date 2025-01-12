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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Gym Equipment</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form action="wanted.php" method="POST" enctype="multipart/form-data">
<section id="products" class="parallax-section">
      <div class="container">
        <div class="row">
        <input type="text" name="txtsearch" class="searchbar" placeholder="Search Second Hand Equipment">
            <input type="submit" name="btnsearch" value="Search" class="searchbtn">
<?php 
                if(isset($_POST['btnsearch']))
                {    
                    if (isset($_SESSION['cid']))
                    {
                      $EquipmentName=$_POST['txtsearch'];
                        $query="SELECT * FROM products 
                                
                     where  producttype='second' and productname LIKE '%$EquipmentName%'";
                        $result=mysqli_query($connect,$query);
                        $count=mysqli_num_rows($result);
						echo"<div class='wow fadeInUp col-md-12 col-sm-12' >
						<h2>Search Results</h2>";
                        if ($count>0)
                        {
                           
                            for ($i=0; $i < $count; $i+=1)
                            { 
                                $query1="SELECT * FROM products 
                               
                                where producttype='second' and productname LIKE '%$EquipmentName%'
                                LIMIT $i,1";
                                $result1=mysqli_query($connect,$query1);
                                $count1=mysqli_num_rows($result1);
                                
                                for ($j=0; $j < $count1; $j++)
                                { 
                                    $arr=mysqli_fetch_array($result1);
                                    $productid=$arr['productcode'];
                                    $productname=$arr['productname'];
                                    $price=$arr['price'];
                                    $image=$arr['productimage'];
                                    $description=$arr['description'];
                                    echo "
									
                                    <div class='wow fadeInUp col-md-3 col-sm-6' data-wow-delay='1.9s'>
                    <div class='product-thumb'>
                    
                        <img src='$image' class='img-responsive' alt='Trainer'>
                    </div>
                    <a href='productdetails.php?PID=$productid'>
                    <h3>$productname</h3>
                    </a>
                    <h3>$ $price</h3>
                    <a href='cartlist.php?PID=$productid&qty=1' class='cart-btn' data-wow-delay='1s'>Add to Cart</a>
                    
                </div>
                
            ";
                                }
                                
                            }
                            
                        }
                        else
                        {
                        echo "<h1><b><u>Search Record Not Found</u></b></h1>";
                        }
                    }
                    else{
                        echo "<script>alert('You Need to Login First')</script>";
                        echo "<script>window.location='register.php'</script>";
                    }
                }
?>
</div>
            <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="1.3s">
				<h2>Second Hand Home Gym Equipment</h2>
               <?php $query2="SELECT * FROM products where producttype='second'
                    ORDER BY productname";
                    $result2=mysqli_query($connect,$query2);
                    $count2=mysqli_num_rows($result2);

                    if ($count2>0)
                    {
                        
                        for ($i=0; $i < $count2; $i+=1)
                        { 
                        $query1="SELECT * FROM products where producttype='second' 
                            ORDER BY productname
                            LIMIT $i,1";
                            $result1=mysqli_query($connect,$query1);
                            $count1=mysqli_num_rows($result1);
                           
                            for ($j=0; $j < $count1; $j++)
                            { 
                                $arr=mysqli_fetch_array($result1);
                                $productid=$arr['productcode'];
                                $productname=$arr['productname'];
                                $price=$arr['price'];
                                $image=$arr['productimage'];
                                $description=$arr['description'];
                                echo "<div class='wow fadeInUp col-md-3 col-sm-6' data-wow-delay='1.9s'>
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
                
            }
        ?>
</div>
<div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="1.3s">
<a href="wantedform.php"><h3>If You Have Any Second Hand Equipment To Sell, Click Here To Contact Us</h3></a>
        </div>
        </div>
        </div>
        </section>


        </form>
    
</body>
</html>
<?php
$page='wanted';
include('footer.php');
?>