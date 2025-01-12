<?php 
session_start();
    include('connect.php');
   
if(isset($_POST['btnlogin']))
   {
        $email=$_POST['txtemail'];
        $password=$_POST['txtpassword'];
        
      if ($_POST['g-recaptcha-response'] != "")
      {
         $secret = '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe';
         $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
         $responseData = json_decode($verifyResponse);
         if ($responseData->success) {
            $select="SELECT * FROM customer where email='$email' and password='$password'";
        $query=mysqli_query($connect,$select);
        $count=mysqli_num_rows($query);
        if($count>0)
        {
         $data=mysqli_fetch_array($query);
         $customerid=$data['customerid'];
         $customeremail=$data['email'];
         
         $_SESSION['cid']=$customerid;
         $_SESSION['cemail']=$customeremail;
          echo "<script>alert('Customer Login Successfully')</script>";
         echo "<script>window.location='index.php'</script>";
            
            
        }
         else
         {
      if (isset($_SESSION['loginError']))
      {
        $countError=$_SESSION['loginError'];
        if ($countError==1)
         {
        $_SESSION['loginError']=2;
        echo "<script>window.alert('Login failed! Please try again! Error Attempt 2')</script>";
         }
      if ($countError==2)
         {
        echo "<script>window.alert('Login failed! Error Attempt 3! Account is locked for 10mins! Please try again later.')</script>";
        echo "<script>window.location='LoginTimer.php'</script>";
         }
    
      }
      else
         {
        $_SESSION['loginError']=1;
        echo "<script>window.alert('Login failed! Please try again! Error Attempt 1')</script>";
          }
      
    }
 
   }
}
}          
 
   
        
    
    if (isset($_POST['btnsignup']))
    {
        $firstname=$_POST['txtfirstname'];
        $surname=$_POST['txtsurname'];
        $email=$_POST['txtemail'];
        $password=$_POST['txtpassword'];
        if ($_POST['g-recaptcha-response'] != "")
      {
         $secret = '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe';
         $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
         $responseData = json_decode($verifyResponse);
         if ($responseData->success){

        $select="SELECT *From customer where email='$email'";
        $query=mysqli_query($connect,$select);
        $count=mysqli_num_rows($query);
        $data=mysqli_fetch_array($query);
       
        if($count>0)
        {
            echo"<script>alert('This email address has already taken')</script>";
        }
        else
        {

            $insert="INSERT into customer(firstname,surname,email,password)
            Values('$firstname','$surname','$email','$password')";
            $ret=mysqli_query($connect,$insert);
            if($ret)
            { 
               $select="SELECT * FROM customer where email='$email' and password='$password'";
               $query=mysqli_query($connect,$select);
               $count=mysqli_num_rows($query);
               
                $data=mysqli_fetch_array($query);
                $customerid=$data['customerid'];
                $customeremail=$data['email'];
                
                $_SESSION['cid']=$customerid;
                $_SESSION['cemail']=$customeremail;
                 echo "<script>alert('Customer Login Successfully')</script>";
                echo "<script>window.location='viewprofile.php'</script>";
         }
        
        
    	   }
         }
}
}  
    include('header.php');
?>
<html lang="en" dir="ltr" class="html">
   <head>
      <meta charset="utf-8">
      <title>Home Gym Equipment</title>
      <link rel="stylesheet" href="css/new.css">
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

      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://www.google.com/recaptcha/api.js"></script>
   </head>
   <body class="body">
      

      <section class="wrapper">
         <div class="title-text">
            <div class="title login">
               Login Form
            </div>
            <div class="title signup">
               Signup Form
            </div>
         </div>
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">Login</label>
               <label for="signup" class="slide signup">Signup</label>
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
               <form action="register.php" class="login" method="POST">
                  <div class="field">
                     <input type="email" placeholder="Email Address" name="txtemail"required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" name="txtpassword" required>
                  </div>
                  <div class="g-recaptcha brochure__form__captcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Login" name="btnlogin">
                  </div>
                  <div class="signup-link">
                     Not a member? <a href="">Signup now</a>
                  </div>
                  <div class="admin-link">
                     Admin? <a href="staffregister.php">Login here</a>
                  </div>
               </form>
               <form action="register.php" class="signup" method="POST">
               <div class="field">
                     <input type="text" placeholder="Enter First Name" name="txtfirstname" required>
                  </div>
                  <div class="field">
                     <input type="text" placeholder="Enter Surname" name="txtsurname" required>
                  </div>
                  <div class="field">
                     <input type="email" placeholder="Enter Email Address" name="txtemail" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Enter Password" name="txtpassword" required>
                  </div>
                  <div class="g-recaptcha brochure__form__captcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Signup" name="btnsignup">
                  </div>
               </form>
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
<script type="text/javascript">
	function googleTranslateElementInit() {
	 new google.translate.TranslateElement({pageLanguage: 'en-us'}, 'google_translate_element');
	}
	</script>
	
	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
      <script>
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
      </script>
     
   </body>
</html>
