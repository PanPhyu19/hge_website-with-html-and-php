<?php
include('connect.php');
 //////////////////////////////Drop Workshop////////////////////////////////
 $dropworkshop="Drop table workshop";
 $deleteworkshop=mysqli_query($connect,$dropworkshop);
 if($deleteworkshop)
 {
     echo"<p>Workshop table deleted </p>";
 }
 else
 {
     echo mysqli_error($connect);
 }
   ///////////////////Drop Table Booking////////////////////////////////
   $dropbooking="Drop table booking";
   $deletebooking=mysqli_query($connect,$dropbooking);
   if($deletebooking)
       {
           echo"<p>Booking table deleted </p>";
       }
   else
   {
       echo mysqli_error($connect);
    }
   
//////////////////////////////Drop Second Products///////////////////////////////////
$dropsecond="Drop table secondproducts";
$deletesecond=mysqli_query($connect,$dropsecond);
if($deletesecond)
{
    echo"<p>Second Products table deleted </p>";
}
else
{
    echo mysqli_error($connect);
}
/////////////////////////DropTableCustomer////////////////////
$delete="Drop table customer";
$deleteuser=mysqli_query($connect,$delete);
if($deleteuser)
{
    echo"<p>Customer table deleted </p>";
}
else
{
    echo mysqli_error($connect);
}
///////////////Customer////////////////////////////////////////
$create="CREATE TABLE customer
    (
            customerid int not null primary key AUTO_INCREMENT,
            firstname varchar(30),
            surname varchar(30),
            email varchar(30),
            phno varchar (20),
            address varchar(150),
            password varchar(30)
            
    )";

    $queryuser=mysqli_query($connect,$create);
    if($queryuser)
    {
        echo "<p> Customer Register Successful!</p>";
    }
    else
    {
        echo mysqli_error($connect);
    }

$insertuser="Insert into customer(firstname,surname,email,password)
Values('Pan','Phyu','ph@gmail.com','1234')";
$retuser=mysqli_query($connect,$insertuser);
if($retuser)
{
    echo "<script>alert('Registration Successful!')</script>";
    }
    $insertuser1="Insert into customer(firstname,surname,email,password)
    Values('Michael','Blaze','michael@gmail.com','1234')";
    $retuser1=mysqli_query($connect,$insertuser1);
    if($retuser1)
    {
        echo "<script>alert('Registration Successful!')</script>";
        }
        $insertuser2="Insert into customer(firstname,surname,email,password)
    Values('Tom','Reynolds','tom@gmail.com','1234')";
    $retuser2=mysqli_query($connect,$insertuser2);
    if($retuser2)
    {
        echo "<script>alert('Registration Successful!')</script>";
        }
    
    ////////////////////Products//////////////////////////////////
    $delete="Drop table products";
$deleteproduct=mysqli_query($connect,$delete);
if($deleteproduct)
{
    echo"<p>Products table deleted </p>";
}
else
{
    echo mysqli_error($connect);
}
//////////////////////Create Products//////////////////////////
    $createproduct="CREATE TABLE products
    (
            productcode int not null primary key AUTO_INCREMENT,
            productname varchar(100),
            producttype varchar(30),
            productimage text,
            description varchar(150),
            price int,
            quantity int
            
    )";

    $queryproduct=mysqli_query($connect,$createproduct);
    if($queryproduct)
    {
        echo "<p> Product table created</p>";
    }
    else
    {
        echo mysqli_error($connect);
    }
    //////////////////////////////////////////Inserting data into Products////////////////////////////////////
    $insertproduct1="INSERT into products(productname,producttype,productimage,description,price,quantity)
    Values('EVERLAST powercore dual bag and stand','new','images/_Everlast Powercore Dual Bag and Stand.jpg','Dimensions:48.25-by-84-by-69 inches (W x H x D). Great endurance and durability',160,30)";
    $retproduct1=mysqli_query($connect,$insertproduct1);
    if($retproduct1)
    {
        echo "<p>Uploaded successfully!</p>";
        
    }
    $insertproduct2="INSERT into products(productname,producttype,productimage,description,price,quantity)
    Values('Gaiam Premium 2 color yoga mat','new','images/_Gaiam Premium 2-Color Yoga Mat.jpg','Durable and light-weight non-slip yoga mat suitable especially for beginners.',30,35)";
    $retproduct2=mysqli_query($connect,$insertproduct2);
    if($retproduct2)
    {
        echo "<p>Uploaded successfully!</p>";
        
        
    }
    $insertproduct3="INSERT into products(productname,producttype,productimage,description,price,quantity)
    Values('Fitnessery Ab Roller','new','images/_Fitnessery Ab Roller.jpg','A perfect equipment for cardio exercises. It will help you build up six-pack abs by acting as your personal trainer.',24,20)";
    $retproduct3=mysqli_query($connect,$insertproduct3);
    if($retproduct3)
    {
        echo "<p>Uploaded successfully!</p>";
        
        
    }
   $insertproduct4="INSERT into products(productname,producttype,productimage,description,price,quantity)
   Values('NordicTrack Commercial s22i Studio Cycle','new','images/_white nordic track.png','A top-notch workout bike providing Automatic Trainer Control and multiple levels of decline and incline, it becomes one of very few stationary bikes',1499,5)";
     $retproduct4=mysqli_query($connect,$insertproduct4);
     if($retproduct4)
     {
         echo "<p>Uploaded successfully!</p>";
         
         
     }
    $insertproduct5="INSERT into products(productname,producttype,productimage,description,price,quantity)
    Values('Bowflex PR3000 Home Gym','new','images/_Bowflex PR3000 Home Gym.png','A compact space-saving total-body home gym with over 50 exercises and no-change cable system between sets to stay focused on workouts',1099,10)";
    $retproduct5=mysqli_query($connect,$insertproduct5);
    if($retproduct5)
    {
        echo "<p>Uploaded successfully!</p>";
        
        
    }
   $insertproduct6="INSERT into products(productname,producttype,productimage,description,price,quantity)
    Values('FLYBIRD 2021 Adjustable Weight Bench','new','images/_flybird 2021.jpeg','The FLYBIRD adjustable weight bench has a width of 15.7”, a length of 49.2”, and a height of 44.5” and contains a Waist Pad.',116,20)";
     $retproduct6=mysqli_query($connect,$insertproduct6);
     if($retproduct6)
     {
         echo "<p>Uploaded successfully!</p>";
         
         
     }
    $insertproduct7="INSERT into products(productname,producttype,productimage,description,price,quantity)
    Values('Hydrow rower','new','images/_Hydrow rower.png','Provides you the feeling of rowing at the comfort of home including Heart rate monitoring and LED screen',1999,3)";
     $retproduct7=mysqli_query($connect,$insertproduct7);
     if($retproduct7)
     {
         echo "<p>Uploaded successfully!</p>";
         
         
     }
    $insertproduct8="INSERT into products(productname,producttype,productimage,description,price,quantity)
    Values('Tempo-Studio','new','images/_Tempo-Studio.png','A smart home gym which uses 3D censors to correct your posture and includes a digital screen',2000,2)";
     $retproduct8=mysqli_query($connect,$insertproduct8);
     if($retproduct8)
     {
         echo "<p>Uploaded successfully!</p>";
         
         
     }
    $insertproduct9="INSERT into products(productname,producttype,productimage,description,price,quantity)
    Values('Bowflex SelectTech 552 dumbbells','new','images/_Bowflex SelectTech 552 Dumbbells.jpg','Adjustable dumb bells from 52.5 lbs to 5lbs.',200,22)";
     $retproduct9=mysqli_query($connect,$insertproduct9);
     if($retproduct9)
     {
         echo "<p>Uploaded successfully!</p>";
         
         
     }

     $insertproductsecond="INSERT into products(productname,producttype,productimage,description,price,quantity)
     Values('Viavito Exercise Bike','second','images/_Viavito.webp','Bought a year ago and used less than ten times.Still in good condition',140,1)";
      $retproductsecond=mysqli_query($connect,$insertproductsecond);
      if($retproductsecond)
      {
          echo "<p>Uploaded successfully!</p>";
          
        }

        $insertproductsecond1="INSERT into products(productname,producttype,productimage,description,price,quantity)
        Values('CIAPO electric home treadmill','second','images/_CIAPO treadmill 1.jpg','Electric Driving type treadmill including LCD blue screen',212,5)";
         $retproductsecond1=mysqli_query($connect,$insertproductsecond1);
         if($retproductsecond1)
         {
             echo "<p>Uploaded successfully!</p>";
             
           }
           
        $insertproductsecond2="INSERT into products(productname,producttype,productimage,description,price,quantity)
        Values('Gym Bicycle Adjustable Spinning Bike','second','images/_gym bicycle.png','Adjustable indoor spinning bike which is adjustable and includes heart rate monitor',75,1)";
         $retproductsecond2=mysqli_query($connect,$insertproductsecond2);
         if($retproductsecond2)
         {
             echo "<p>Uploaded successfully!</p>";
             
           }

        
           $insertproductsecond3="INSERT into products(productname,producttype,productimage,description,price,quantity)
           Values('Multigym fitness machine','second','images/_Muscle multifunction.jpg','Multi gym fitness machine for various multi muscle funcion including abdominal train',233,3)";
            $retproductsecond3=mysqli_query($connect,$insertproductsecond3);
            if($retproductsecond3)
            {
                echo "<p>Uploaded successfully!</p>";
                
              }


        
              $insertproductsecond4="INSERT into products(productname,producttype,productimage,description,price,quantity)
              Values('VBEST strip Power Tower Pull Up Bar','second','images/__Pull Up bar.jpg','Pull Up Bar for Body improvement at home',75,2)";
               $retproductsecond4=mysqli_query($connect,$insertproductsecond4);
               if($retproductsecond4)
               {
                   echo "<p>Uploaded successfully!</p>";
                   
                 }
        

                 
        $insertproductsecond5="INSERT into products(productname,producttype,productimage,description,price,quantity)
        Values('Second Hand Arm and Leg Exercise Bike','second','images/_Arm and Leg exercise.jpg','Home Bike for Arm and Leg exercise',13,1)";
         $retproductsecond5=mysqli_query($connect,$insertproductsecond5);
         if($retproductsecond5)
         {
             echo "<p>Uploaded successfully!</p>";
             
           }
////////////////////////////////Wearable Uploads/////////////////////////////////////////////
$insertproducttracker="INSERT into products(productname,producttype,productimage,description,price,quantity)
Values('Fitbit Luxe','wearable tracker',	
'images/_fitbit luxe.png','This waterproof fashionable fitness & wellness tracker with a battery which can run up to 5 days and tracks every step including menstrual health.',150,16)";
 $retproducttracker=mysqli_query($connect,$insertproducttracker);
 if($retproducttracker)
 {
     echo "<p>Uploaded successfully!</p>";
     
}

$insertproducttracker1="INSERT into products(productname,producttype,productimage,description,price,quantity)
Values('Fitbit Gorjana Special Edition','wearable tracker','images/_Special Edition gorjana.png','The special edition comes with a gold stainless steel from jewelery brand Gorjana with battery life up to 5 days.',200,6)";
 $retproducttracker1=mysqli_query($connect,$insertproducttracker1);
 if($retproducttracker1)
 {
     echo "<p>Uploaded successfully!</p>";
     
}
$insertproducttracker2="INSERT into products(productname,producttype,productimage,description,price,quantity)
Values('Fitbit Ace 3','wearable tracker','images/_fitbit ace 3.png','This tracker for kids over 6 has battery life up to 8 days and is cool to customize for kids.It is also swim-proof and contains parental controls.',80,18)";
 $retproducttracker2=mysqli_query($connect,$insertproducttracker2);
 if($retproducttracker2)
 {
     echo "<p>Uploaded successfully!</p>";
     
}
$insertproducttracker3="INSERT into products(productname,producttype,productimage,description,price,quantity)
Values('Fitbit Charge 5','wearable tracker','images/_fitbit charge5.png','Most advanced fitness tracker with on-wrist ECG app for heart health and EDA scan app for stress management.Its battery life is up to 7 days.',120,15)";
 $retproducttracker3=mysqli_query($connect,$insertproducttracker3);
 if($retproducttracker3)
 {
     echo "<p>Uploaded successfully!</p>";
     
}
$insertproducttracker4="INSERT into products(productname,producttype,productimage,description,price,quantity)
Values('Fitbit Inspire 2','wearable tracker','images/_fitbit inspire 2.png','This water-proof and easy-to-use tracker measures heart rate and includes stress management system with battery up to 10 days.',100,15)";
 $retproducttracker4=mysqli_query($connect,$insertproducttracker4);
 if($retproducttracker4)
 {
     echo "<p>Uploaded successfully!</p>";
     
}
$insertproductrunning="INSERT into products(productname,producttype,productimage,description,price,quantity)
Values('Garmin Fenix 7','wearable running','images/_fenix 7 series.jpg','This multisport GPS watch with extended battery life includes health and wellness monitoring sensors such as on-wrist heart rate and pulse oximeter measurers.',900,2)";
 $retproductrunning=mysqli_query($connect,$insertproductrunning);
 if($retproductrunning)
 {
     echo "<p>Uploaded successfully!</p>";
     
}
$insertproductrunning1="INSERT into products(productname,producttype,productimage,description,price,quantity)
Values('Garmin Forerunner 55','wearable running','images/_Forerunner 55.jpg','This easy-to-use running watch consists of GPS for runners and health monitoring system such as wrist-based heart rate and so on.',200,5)";
 $retproductrunning1=mysqli_query($connect,$insertproductrunning1);
 if( $retproductrunning1)
 {
     echo "<p>Uploaded successfully!</p>";
     
}
$insertproductrunning2="INSERT into products(productname,producttype,productimage,description,price,quantity)
Values('Garmin Tactix Delta Solar Edition','wearable running','images/_tactix delta series.jpg','This solar edition built to military-standard gets charged from the sunlight and includes multi GNSS support and outdoor sensors to help navigate the world.',2000,1)";
  $retproductrunning2=mysqli_query($connect,$insertproductrunning2);
 if( $retproductrunning2)
 {
     echo "<p>Uploaded successfully!</p>";
     
}
$insertproductrunning3="INSERT into products(productname,producttype,productimage,description,price,quantity)
Values('Garmin Venu 2S','wearable running','images/_Venue Series.webp','This fashionable small-sized GPS smartwatch with advanced monitoring of health and fitness features.',400,5)";
 $retproductrunning3=mysqli_query($connect,$insertproductrunning3);
 if($retproductrunning3)
 {
     echo "<p>Uploaded successfully!</p>";
     
}
$insertproductrunning4="INSERT into products(productname,producttype,productimage,description,price,quantity)
Values('Garmin Vivoactive 4s','wearable running','images/_vivoactive 4s.webp','This small-sized GPS smartwatch is built for your active lifestyle with battery up to 7-days.',350,4)";
 $retproductrunning4=mysqli_query($connect,$insertproductrunning4);
 if($retproductrunning4)
 {
     echo "<p>Uploaded successfully!</p>";
     
}
$insertproductheartrate="INSERT into products(productname,producttype,productimage,description,price,quantity)
Values('POLAR H9','wearable heartrate','images/_POLAR H9.jpg','This reliable heart rate sensor is a chest strap which can be connected to various devices by Bluetooth, ANT+ and 5 kHz technologies.',60,8)";
 $retproductheartrate=mysqli_query($connect,$insertproductheartrate);
 if($retproductheartrate)
 {
     echo "<p>Uploaded successfully!</p>";
     
}
$insertproductheartrate1="INSERT into products(productname,producttype,productimage,description,price,quantity)
Values('POLAR H10','wearable heartrate','images/_POLAR H10.jpg','This accurate and connective heart rate sensor includes high quality electrodes to measure the heart rate accurately.',90,6)";
 $retproductheartrate1=mysqli_query($connect,$insertproductheartrate1);
 if($retproductheartrate1)
 {
     echo "<p>Uploaded successfully!</p>";
     
}

$insertproductheartrate2="INSERT into products(productname,producttype,productimage,description,price,quantity)
Values('POLAR Verity Sense','wearable heartrate','images/_Polar verity sense.jpg','This optical heart rate monitor allows you the maximum freedom of movement and by Bluetooth®, ANT+ and internal memory,you can record your workout.',90,4)";
 $retproductheartrate2=mysqli_query($connect,$insertproductheartrate2);
 if($retproductheartrate2)
 {
     echo "<p>Uploaded successfully!</p>";
     
}


    //////////////////////////////Drop Staff////////////////////////////////
    $dropstaff="Drop table staff";
    $deletestaff=mysqli_query($connect,$dropstaff);
    if($deletestaff)
    {
        echo"<p>Staff table deleted </p>";
    }
    else
    {
        echo mysqli_error($connect);
    }
    //////////////////////////////////Staff////////////////////////////
    $createstaff="CREATE TABLE staff
    (
            staffid int not null primary key AUTO_INCREMENT,
            staffname varchar(30),
            staffemail varchar(30),
            staffpassword varchar(30)
            
            
    )";

    $querystaff=mysqli_query($connect,$createstaff);
    if($querystaff)
    {
        echo "<p> Staff table created!</p>";
    }
    else
    {
        echo mysqli_error($connect);
    }
    $insertstaff="INSERT into staff(staffname,staffemail,staffpassword)
            Values('Ella','ella@gmail.com','1234')";
            $retstaff=mysqli_query($connect,$insertstaff);
            if($retstaff)
            {
                echo "<script>alert('Registration Successful!')</script>";
				
            }
 //////////////////////////////Drop Contact Us////////////////////////////////
 $dropcontact="Drop table contactus";
 $deletecontact=mysqli_query($connect,$dropcontact);
 if($deletecontact)
 {
     echo"<p>Contact Us table deleted </p>";
 }
 else
 {
     echo mysqli_error($connect);
 }
    //////////////////////////////////////////ContactUs//////////////////////////////////////////////
    $createcontact="CREATE TABLE contactus
    (
            contactid int not null primary key AUTO_INCREMENT,
            firstname varchar(30),
            surname varchar(30),
            email varchar(30),
            message varchar(200)

            
            
    )";

    $querycontact=mysqli_query($connect,$createcontact);
    if($querycontact)
    {
        echo "<p> Contact Us Created!</p>";
    }
    else
    {
        echo mysqli_error($connect);
    }

    $insertcontact="INSERT INTO contactus(firstname,surname,email,message)
        values('Pan','Phyu','ph@gmail.com','Does buying the home gym equipment include home installation service?')";
        $retcontact=mysqli_query($connect,$insertcontact);
        if($retcontact)
        {
            echo "<script>alert('Contact Save Successfully')</script>";
        
        }
        
        else
        {
            echo mysqli_error($connect);
        }
       
        /////////////////////Workshop////////////////////////////////////////////
        $createrequest="CREATE TABLE workshop
    (
            requestid int not null primary key AUTO_INCREMENT,
            firstname varchar(30),
            surname varchar(30),
            email varchar(30),
            phno varchar(20),
            address varchar(150),
            section varchar(30),
            others varchar(100),
            message varchar(200),
            customerid int,
            Foreign key (customerid) references customer(customerid)

    )";
     $queryrequest=mysqli_query($connect,$createrequest);
     if($queryrequest)
     {
         echo "<p> Workshop Created!</p>";
     }
     else
     {
         echo mysqli_error($connect);
     }
     //////////////////////////////Drop Services///////////////////////////////////
     $dropservices="Drop table services";
     $deleteservices=mysqli_query($connect,$dropservices);
     if($deleteservices)
     {
         echo"<p>Services table deleted </p>";
     }
     else
     {
         echo mysqli_error($connect);
     }
     /////////////////////////////Services////////////////////////////////////////////
     $createservices="CREATE TABLE services
     (
             serviceid int not null primary key AUTO_INCREMENT,
             servicename varchar(50),
            serviceimage text
 
     )";
      $queryservices=mysqli_query($connect,$createservices);
      if($queryservices)
      {
          echo "<p> Services Created!</p>";
      }
      else
      {
          echo mysqli_error($connect);
      }
      ///////////////////////Insert//////////////////////////////////////////
      $insertservice="INSERT into services(servicename,serviceimage)
      Values('Maintenance','images/_equipment maintenance.jpg')";
       $retservice=mysqli_query($connect,$insertservice);
       if($retservice)
       {
           echo "<p>Uploaded successfully!</p>";
           
         }
         $insertservice1="INSERT into services(servicename,serviceimage)
         Values('Treadmill Repair','images/_treadmill workshop.jpg')";
          $retservice1=mysqli_query($connect,$insertservice1);
          if($retservice1)
          {
              echo "<p>Uploaded successfully!</p>";
              
            }
            $insertservice2="INSERT into services(servicename,serviceimage)
            Values('Gym Installation','images/_gym installation.jpg')";
             $retservice2=mysqli_query($connect,$insertservice2);
             if($retservice2)
             {
                 echo "<p>Uploaded successfully!</p>";
                 
               }
               $insertservice3="INSERT into services(servicename,serviceimage)
               Values('Relocation & Installation','images/_Relocation and installation.jpg')";
                $retservice3=mysqli_query($connect,$insertservice3);
                if($retservice3)
                {
                    echo "<p>Uploaded successfully!</p>";
                    
                  }
                  $insertservice4="INSERT into services(servicename,serviceimage)
               Values('Gym Cable Replacement','images/_cable replacement.jpg')";
                $retservice4=mysqli_query($connect,$insertservice4);
                if($retservice4)
                {
                    echo "<p>Uploaded successfully!</p>";
                    
                  }
                  $insertservice5="INSERT into services(servicename,serviceimage)
                  Values('Elliptical Repair','images/_elliptical repair.jpg')";
                   $retservice5=mysqli_query($connect,$insertservice5);
                   if($retservice5)
                   {
                       echo "<p>Uploaded successfully!</p>";
                       
                     }
                     $insertservice6="INSERT into services(servicename,serviceimage)
                     Values('Weight Equipment Repair','images/_weight equipment repair.jpg')";
                      $retservice6=mysqli_query($connect,$insertservice6);
                      if($retservice6)
                      {
                          echo "<p>Uploaded successfully!</p>";
                          
                        }
                        $insertservice7="INSERT into services(servicename,serviceimage)
                     Values('Gym Upholstery Repair','images/_gym upholstery repair.jpg')";
                      $retservice7=mysqli_query($connect,$insertservice7);
                      if($retservice7)
                      {
                          echo "<p>Uploaded successfully!</p>";
                          
                        }
                        //////////////////////////////Drop Articles///////////////////////////////////
                        $droparticles="Drop table articles";
                        $deletearticles=mysqli_query($connect,$droparticles);
                        if($deletearticles)
                        {
                            echo"<p>Articles table deleted </p>";
                        }
                        else
                        {
                            echo mysqli_error($connect);
                        }
                        /////////////////////////////Articles////////////////////////////////////////////
                        $createarticles="CREATE TABLE articles
                        (
                                articleid int not null primary key AUTO_INCREMENT,
                                articletitle varchar(100),
                                articleauthor varchar(100),
                                articletext varchar(500),
                                articledate date,
                                articleparagraph varchar(500),
                               articleimage text
                    
                        )";
                         $queryarticles=mysqli_query($connect,$createarticles);
                         if($queryarticles)
                         {
                             echo "<p> Articles Created!</p>";
                         }
                         else
                         {
                             echo mysqli_error($connect);
                         }
                         ///////////////////////Insert Articles////////////////////////////////////
                         $insertarticles="INSERT into articles(articletitle,articleauthor,articletext,articledate,articleparagraph,articleimage)
                         Values('Previously unknown aspects of running shoe design uncovered','University at Buffalo','A University at Buffalo researcher has some good news for athletes and fitness enthusiasts who favor thick, heavily cushioned running shoes. Although these shoes are increasingly popular because they provide comfort and a high degree of shock absorbing protection, those benefits were thought to come at the expense of increased overall leg stiffness, which altered a runners normal stride and could increase muscle fatigue.','2022.1.26','A thick running shoe midsole is often favored for its shock absorbing protection, but it has been assumed that these heavily cushioned shoes increase leg stiffness and muscle fatigue. But results of a new study suggest that midsole thickness is unlikely to cause individuals to alter their leg stiffness.',	
                         'images/_running shoes.webp')";
                          $retarticles=mysqli_query($connect,$insertarticles);
                          if($retarticles)
                          {
                              echo "<p>Uploaded successfully!</p>";
                              
                            }
                            $insertarticles1="INSERT into articles(articletitle,articleauthor,articletext,articledate,articleparagraph,articleimage)
                            Values('Can individual walking pace impact their heart failure risk?','Wiley','In a study in the Journal of the American Geriatrics Society of postmenopausal women, those who reported a faster walking pace had a lower risk of developing heart failure.','2022.1.20','In a study of postmenopausal women, those who reported a faster walking pace had a lower risk of developing heart failure.','images/_walking.jpg')";
                             $retarticles1=mysqli_query($connect,$insertarticles1);
                             if($retarticles1)
                             {
                                 echo "<p>Uploaded successfully!</p>";
                                 
                               }
                               $insertarticles2="INSERT into articles(articletitle,articleauthor,articletext,articledate,articleparagraph,articleimage)
                               Values('Does Walking 1 Hour Every Day Aid Weight Loss?','Gavin Van De Walle, MS, RD','Calories burned walking
                               The simplicity of walking makes it an appealing activity for many — particularly those looking to burn extra calories.
                               
                               The number of calories you burn walking depends on numerous factors, especially your weight and walking speed.','2020.5.25',
                               
                               'SUMMARY
                               The number of calories you burn walking depends mainly on your weight and walking speed. Walking faster allows you to burn more calories per hour.','images/_lose weight.jpg')";
                            $retarticles2=mysqli_query($connect,$insertarticles2);
                             if($retarticles2)
                             {
                                 echo "<p>Uploaded successfully!</p>";
                                 
                               }
                               $insertarticles3="INSERT into articles(articletitle,articleauthor,articletext,articledate,articleparagraph,articleimage)
                               Values('Exercise increases the bodys own cannabis-like substance which reduces chronic inflammation','University of Nottingham','Exercise increases the bodys own cannabis-like substances, which in turn helps reduce inflammation and could potentially help treat certain conditions such as arthritis, cancer and heart disease.','2021.11.21','In a new study, published in Gut Microbes, experts from the University of Nottingham found that exercise intervention in people with arthritis, did not just reduce their pain, but it also lowered the levels of inflammatory substances (called cytokines). It also increased levels of cannabis-like substances produced by their own bodies, called endocannabinoids. Interestingly, the way exercise resulted in these changes was by altering the gut microbes.',
                               'images/_exercise.jpg')";
                                $retarticles3=mysqli_query($connect,$insertarticles3);
                                if($retarticles3)
                                {
                                    echo "<p>Uploaded successfully!</p>";
                                    
                                  }
                                 
///////////////////Drop Table Counter////////////////////////////////
$dropcounter="Drop table counter";
$deletecounter=mysqli_query($connect,$dropcounter);
if($deletecounter)
    {
        echo"<p>Counter table deleted </p>";
    }
else
{
    echo mysqli_error($connect);
 }

    ///////////////////////////////////Counter//////////////////////////////
    $createcounter="CREATE TABLE counter
    (
            counterid int not null primary key AUTO_INCREMENT,
            ip_address text,
            view_date timestamp
    )";
     $querycounter=mysqli_query($connect,$createcounter);
     if($querycounter)
     {
         echo "<p> Counter table Created!</p>";
     }
     else
     {
         echo mysqli_error($connect);
     }
     //////////////////////////IP Address///////////////////////
     $insertcounter="Insert into counter(ip_address)
     Values('12:12:12:12')";
     $retcounter=mysqli_query($connect,$insertcounter);
     if($retcounter){
         echo"<p> Inserted Successfully</p>";
     }
                
                
              
    ///////////////////////////////////Booking//////////////////////////////
    $createbooking="CREATE TABLE booking
    (
            bookingid int not null primary key AUTO_INCREMENT,
            bookingname varchar(50),
            bookingtype varchar(100),
            bookingtime varchar(50),
            bookingday varchar(30),
            customerid int,
            Foreign key(customerid) references customer(customerid)
    )";
     $querybooking=mysqli_query($connect,$createbooking);
     if($querybooking)
     {
         echo "<p> Booking table Created!</p>";
     }
     else
     {
         echo mysqli_error($connect);
     }
     //////////////////////////Booking///////////////////////
     $insertbooking="Insert into booking(bookingname,bookingtype,bookingtime,bookingday,customerid)
     Values('Michael','online','Morning','Monday',2)";
     $retbooking=mysqli_query($connect,$insertbooking);
     if($retbooking){
         echo"<p> Inserted Successfully</p>";
     }
      ///////////////////////////////////Second Product//////////////////////////////
    $createsecond="CREATE TABLE secondproducts
    (
            productid int not null primary key AUTO_INCREMENT,
            productname varchar(50),
            description varchar(200),
           productprice int,
            useremail varchar(50),
            customerid int,
            Foreign key(customerid) references customer(customerid)
    )";
     $querysecond=mysqli_query($connect,$createsecond);
     if($querysecond)
     {
         echo "<p> Second Products table Created!</p>";
     }
     else
     {
         echo mysqli_error($connect);
     }
     //////////////////////////SECOND PRODUCT///////////////////////
     $insertsecond="Insert into secondproducts(productname,description,productprice,useremail,customerid)
     Values('Joalsli spin bike','Second Hand cheap professional spin bike','62','user@gmail.com',2)";
     $retsecond=mysqli_query($connect,$insertsecond);
     if($retsecond){
         echo"<p> Inserted Successfully</p>";
     }
                    
    ?>