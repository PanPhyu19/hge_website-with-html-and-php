<?php 
session_start();
    include('connect.php');
   
//////////////////////////Login////////////////////////////////////////////
    if(isset($_POST['btnlogin']))
    {
        $email=$_POST['txtemail'];
        $password=$_POST['txtpassword'];
       

        $insert="SELECT * FROM staff where staffemail='$email' and staffpassword='$password'";
        $query=mysqli_query($connect,$insert);
        $count=mysqli_num_rows($query);
        if($count>0)
        {    $data=mysqli_fetch_array($query);
         $staffid=$data['staffid'];
         $staffemail=$data['staffemail'];
         
         $_SESSION['sid']=$staffid;
         $_SESSION['semail']=$staffemail;
            echo "<script>alert('Login Successful')</script>";
            echo "<script>window.location='staffhome.php'</script>";
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
    ///////////////////////////////Signup//////////////////////////////////////////////////////////////////
    if (isset($_POST['btnsignup']))
    {
        $name=$_POST['txtname'];
        $email=$_POST['txtemail'];
        $password=$_POST['txtpassword'];
        if ($_POST['g-recaptcha-response'] != "")
      {
         $secret = '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe';
         $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
         $responseData = json_decode($verifyResponse);
         if ($responseData->success){

        $select="SELECT *From staff where staffemail='$email'";
        $query=mysqli_query($connect,$select);
        $count=mysqli_num_rows($query);
        if($count>0)
        {
            echo"<script>alert('This email address has already taken')</script>";
        }
        else
        {

            $insert="INSERT into staff(staffname,staffemail,staffpassword)
            Values('$name','$email','$password')";
            $ret=mysqli_query($connect,$insert);
            if($ret)
            {
               $select="SELECT * FROM staff where staffemail='$email' and staffpassword='$password'";
               $query=mysqli_query($connect,$select);
               $count=mysqli_num_rows($query);
               
                $data=mysqli_fetch_array($query);
                $staffid=$data['staffid'];
                $staffemail=$data['staffemail'];
                
                $_SESSION['sid']=$staffid;
                $_SESSION['semail']=$staffemail;
                echo "<script>alert('Registration Successful!')</script>";
                echo "<script>window.location='staffhome.php'</script>";
               
				
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
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://www.google.com/recaptcha/api.js"></script>
   </head>
   <body class="body">
      <div class="wrapper">
         <div class="title-text">
            <div class="title login">
               Admin Login 
            </div>
            <div class="title signup">
               Admin Signup
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
               <form action="staffregister.php" class="login" method="POST">
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
                  <!-- <div class="signup-link">
                     Not a member? <a href="">Signup now</a>
                  </div> -->
                  
               </form>
               <form action="staffregister.php" class="signup" method="POST">
               <div class="field">
                     <input type="text" placeholder="Enter Name" name="txtname" required>
                  </div>
                  
                  <div class="field">
                     <input type="text" placeholder="Enter Email Address" name="txtemail" required>
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
      </div>
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