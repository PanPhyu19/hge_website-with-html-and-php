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
    if(isset($_POST['btnsubmit']))
    {
      if(isset($_SESSION['cid'])){
        $cid=$_SESSION['cid'];
        $firstname=$_POST['txtfirstname'];
        $surname=$_POST['txtsurname'];
        $email=$_POST['txtemail'];
        $phno=$_POST['txtphno'];
        $address=$_POST['txtaddress'];
        $section=$_POST['txtsection'];
        $others=$_POST['txtothers'];
        $message=$_POST['txtmessage'];
       
        
        $insert="INSERT INTO workshop(firstname,surname,email,phno,address,section,others,message,customerid)
        values('$firstname','$surname','$email','$phno','$address','$section','$others','$message',$cid)";
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
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Workshop</title>
 
  <link rel="stylesheet" href="test.css">
  <link rel="stylesheet" href="responsive.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">

</head>
<body>
  
  
        
 
  <section id="overview" class="parallax-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          
          
          <h2 id="workshop-bg">HGE Workshop For Equipment Care And Repair</h2>
        </div>
  
        <div class="col-md-5 col-sm-12">
          <img src="images/repair center.jpg" class="img-responsive" alt="Overview">
          
        </div>
  
        <div class="col-md-1"></div>
  
        <div class="wow fadeInUp col-md-5 col-sm-12" data-wow-delay="1s">
          <div class="overview-detail">
            <h2>About Us</h2>
            <p>HGE Workshop is one of the leading providers of care and repair services for gym equipment offering various types of repair services and maintenance care. 
              We provide services either in your home or at the HGE service center. Well-experienced and qualified technicians are waiting to help your little fitness environment to come alive again!</p>
              <h4 class="font-colour">Opening Hours-9:00am-6:00pm <br>
                We close on Sundays!
            </h4>
            </div>
        </div>
  
        <div class="col-md-1"></div>
  
      </div>
    </div>
  </section>
  <section id="price" class="parallax-section">
    <div class="container">
      <div class="row">
  
        <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.9s">
          <h2>Types Of Services we offer</h2>
        </div>
  <div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="1s">
          <div class="pricing__item">
                      <h4 class="pricing__title">Maintenance Services</h3>
                      <img src="images/maintenance service.jpg" class="img-service" alt="Trainer">
                      <ul class="pricing__feature-list">
                        <li class="pricing__feature">Preventive Maintenance</li>
                        <li class="pricing__feature">Reduce Breakdown</li>
                        <li class="pricing__feature">Cleaning Services</li>
                        <li class="pricing__feature">Special Service Cost</li>
                    </ul>
                     
                    <a href="#newsletter" class="pricing__action">Request Now</a>
                  </div>
        </div>
  
        <div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="1.3s">
          <div class="pricing__item">
                      <h4 class="pricing__title">Installation Services</h3>
                      <img src="images/weight repair.jpg" class="img-service" alt="Trainer">
                                        
                      <ul class="pricing__feature-list">
                         
                          <li class="pricing__feature">Transportation Service</li>
                          <li class="pricing__feature">Setup Correctly</li>
                          <li class="pricing__feature">Efficient and Reliable</li>
                          <li class="pricing__feature">Install smoothly</li>

                      </ul>
                      <a href="#newsletter" class="pricing__action">Request Now</a>
                  </div>
        </div>
  
        <div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="1.6s">
          <div class="pricing__item">
                      <h4 class="pricing__title">Repair Services</h3>
                      <img src="images/Hge repair.jpg" class="img-service" alt="Trainer">
                      <ul class="pricing__feature-list">
                          <li class="pricing__feature">Mechanical Repairs</li>
                          <li class="pricing__feature">Welding & Fabrication</li>
                          <li class="pricing__feature">Electrical Repairs</li>
                          <li class="pricing__feature">Cable Replacement</li>
                      </ul>
                      <a href="#newsletter" class="pricing__action">Request Now</a> 
                  </div>
        </div>
  
      </div>
      
    </div>
    <form action="workshop.php" method="POST">
             
               
        <!-- ============Services   ================================== -->
                <section id="products" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="1.3s">
				<h2>Some Completed Services</h2>
				
			</div> 
      <?php
        $query="SELECT * FROM services ORDER BY serviceid";
        $ret=mysqli_query($connect,$query);
        $count=mysqli_num_rows($ret);
        if($count<1)
        {
            echo "<p>No Product Data Found.</p>";
            exit();
        }
        for ($a=0; $a <$count ; $a+=1) 
        { 
            $query1="SELECT * FROM services  ORDER BY serviceid  LIMIT $a,1";
            $ret1=mysqli_query($connect,$query1);
            $count1=mysqli_num_rows($ret1);
            
            for ($b=0; $b <$count1 ; $b++) 
            { 
                $arr=mysqli_fetch_array($ret1);
                $serviceid=$arr['serviceid'];
                $servicename=$arr['servicename'];
                $image=$arr['serviceimage'];
               
                
            
    echo"   
			<div class='wow fadeInUp col-md-3 col-sm-6' data-wow-delay='1.9s'>
				<div class='product-thumb'>
					<img src='$image' class='img-responsive' alt='Trainer'  id='service-img'>
						
							</div>
				
				<h3>$servicename</h3>
				
                
			</div>
            
        ";
            }
        }
    ?> 
      
      </div>
	</div>
</section>
 
  </section>
  <section id="newsletter" class="parallax-section">
    <div class="container">
      <div class="row">
  
        <div class="wow fadeInUp col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10" data-wow-delay="0.9s">
          <h2 >Request Our Services Now</h2>
         
          <div class="newsletter_detail">
            <form action="workshop.php" method="post" id="newsletter-signup">
              <div class="col-md-12 col-sm-12">
                <input name="txtfirstname" type="text" class="form-control" id="name" placeholder="Enter First Name" required>
                </div>
                            <div class="col-md-12 col-sm-12">
                <input name="txtsurname" type="text" class="form-control" id="name" placeholder="Enter Surname" required>
                </div>
              <div class="col-md-12 col-sm-12">
                <input name="txtemail" type="email" class="form-control" id="email" placeholder="Enter Email" required>
                </div>
                            <div class="col-md-12 col-sm-12">
                <input name="txtphno" type="text" class="form-control" id="name" placeholder="Enter Phone Number" required>
                </div>
                <div class="col-md-12 col-sm-12">
                  <input name="txtaddress" type="text" class="form-control" id="name" placeholder="Enter Address" required>
                  </div>
                <div class="col-md-6 col-sm-6">
                 <h4>Please Choose Type Of Service</h4> 
                 </div>
                 <div class="col-md-6 col-sm-6">
                  <select name="txtsection"> 
                    <option value="">Select</option>
                    <option value="Installation">Installation Service</option>
                    <option value="Maintenance">Maintenance Service</option>
                    <option value="Repairs">Repair Service</option>
                    <option value="Other">Others</option>
                  </select>
                </div>
                  <div class="col-md-12 col-sm-12">
                    <input name="txtothers" type="text" class="form-control" id="name" placeholder="If Others,Please Specify" >
                    </div>
                  <div class="col-md-12 col-sm-12">
                    <input name="txtmessage" type="text" class="form-control" id="name" placeholder="Any Message">
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
  
</body>
</html>
<?php
$page='workshop';
include('footer.php');
?>