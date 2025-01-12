<?php
include('connect.php');
// include('staffheader.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/new.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/new.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">
    <title></title>
</head>
<body>


<legend>Booking List</legend>
<table class="table">
			<tr>
				<th>BookingID</th>
				<th>Name</th>
				<th>Booking Type</th>
				<th>Booking Time</th>
				<th>Booking Day</th>
				<th>Customer ID</th>
			</tr>
		<?php
    $query="SELECT * FROM booking
    ORDER BY bookingid";
    $result=mysqli_query($connect,$query);
    $count=mysqli_num_rows($result);
    if ($count>0)
    {
        
        for ($i=0; $i < $count; $i+=1)
        { 
        $query1="SELECT * FROM booking 
            ORDER BY bookingid
            LIMIT $i,1";
            $result1=mysqli_query($connect,$query1);
            $count1=mysqli_num_rows($result1);
           
            for ($j=0; $j < $count1; $j++)
            { 
                $arr=mysqli_fetch_array($result1);
                $bookingid=$arr['bookingid'];
                $bookingname=$arr['bookingname'];
                $type=$arr['bookingtype'];
                $day=$arr['bookingday'];
                $time=$arr['bookingtime'];
                $customerid=$arr['customerid'];
                
                echo"<tr>";
			echo"<td>$bookingid</td>";
			echo "<td>$bookingname</td>";
			echo "<td>$type</td>";
			echo "<td>$ $time</td>";
			echo "<td>$day </td>";
			echo "<td>$customerid</td>";

			echo "</tr>";
            }
        }
    }
    else{
        echo"<p>No booking record found</p>";
    }
		
?>
	</table>
	</fieldset>
    <legend>Workshop Service List</legend>
<table class="table" >
			<tr>
				<th>Request ID</th>
				<th>Firstname</th>
				<th>Surname</th>
				<th>Email</th>
				<th>Phone number</th>
                <th>Address</th>
                <th>Section</th>
                <th>Others</th>
                <th>Message</th>
				<th>Customer ID</th>
			</tr>
		<?php
    $query="SELECT * FROM booking
    ORDER BY bookingid";
    $result=mysqli_query($connect,$query);
    $count=mysqli_num_rows($result);
    if ($count>0)
    {
        
        for ($i=0; $i < $count; $i+=1)
        { 
        $query1="SELECT * FROM workshop
            ORDER BY requestid
            LIMIT $i,1";
            $result1=mysqli_query($connect,$query1);
            $count1=mysqli_num_rows($result1);
           
            for ($j=0; $j < $count1; $j++)
            { 
                $arr=mysqli_fetch_array($result1);
                $requestid=$arr['requestid'];
                $firstname=$arr['firstname'];
                $surname=$arr['surname'];
                $email=$arr['email'];
                $phno=$arr['phno'];
                $address=$arr['address'];
                $section=$arr['section'];
                $others=$arr['others'];
                $message=$arr['message'];
                $customerid=$arr['customerid'];
                
                echo"<tr>";
			echo"<td>$requestid</td>";
			echo "<td>$firstname</td>";
			echo "<td>$surname</td>";
			echo "<td>$email</td>";
			echo "<td>$phno </td>";
            echo "<td>$address</td>";
            echo "<td>$section </td>";
            echo "<td>$others</td>";
            echo "<td>$message</td>";
			echo "<td>$customerid</td>";

			echo "</tr>";
            }
        }
    }
    else{
        echo"<p>No service request record found</p>";
    }
		
?>
	</table>
	</fieldset>          
            
    <legend>Contact Us Information</legend>
<table class="table">
			<tr>
				<th>Contact ID</th>
				<th>Firstname</th>
				<th>Surname</th>
				<th>Email</th>
			    <th>Message</th>
				
			</tr>
		<?php
    $query="SELECT * FROM contactus
    ORDER BY contactid";
    $result=mysqli_query($connect,$query);
    $count=mysqli_num_rows($result);
    if ($count>0)
    {
        
        for ($i=0; $i < $count; $i+=1)
        { 
        $query1="SELECT * FROM contactus
            ORDER BY contactid
            LIMIT $i,1";
            $result1=mysqli_query($connect,$query1);
            $count1=mysqli_num_rows($result1);
           
            for ($j=0; $j < $count1; $j++)
            { 
                $arr=mysqli_fetch_array($result1);
                $contactid=$arr['contactid'];
                $firstname=$arr['firstname'];
                $surname=$arr['surname'];
                $email=$arr['email'];
                $message=$arr['message'];
               
                
                echo"<tr>";
			echo"<td>$contactid</td>";
			echo "<td>$firstname</td>";
			echo "<td>$surname</td>";
			echo "<td>$email</td>";
		    echo "<td>$message</td>";

			echo "</tr>";
            }
        }
    }
    else{
        echo"<p>No contact record found</p>";
    }
		
?>
	</table>
	</fieldset>          
    <legend>Second Products Enquiries</legend>
<table class="table">
			<tr>
				<th>Product ID</th>
				<th>Product name</th>
				<th>Description</th>
                <th>Product Price</th>
				<th>Email</th>
			    <th>Customer ID</th>
				
			</tr>
		<?php
    $query="SELECT * FROM secondproducts
    ORDER BY productid";
    $result=mysqli_query($connect,$query);
    $count=mysqli_num_rows($result);
    if ($count>0)
    {
        
        for ($i=0; $i < $count; $i+=1)
        { 
        $query1="SELECT * FROM secondproducts
            ORDER BY productid
            LIMIT $i,1";
            $result1=mysqli_query($connect,$query1);
            $count1=mysqli_num_rows($result1);
           
            for ($j=0; $j < $count1; $j++)
            { 
                $arr=mysqli_fetch_array($result1);
                $productid=$arr['productid'];
                $productname=$arr['productname'];
                $description=$arr['description'];
                $email=$arr['useremail'];
                $customerid=$arr['customerid'];
               
                
                echo"<tr>";
			echo"<td>$productid</td>";
			echo "<td>$productname</td>";
			echo "<td>$description</td>";
			echo "<td>$email</td>";
		    echo "<td>$customerid</td>";

			echo "</tr>";
            }
        }
    }
    else{
        echo"<p>No product record found</p>";
    }
		
?>
	</table>
	</fieldset>                 
</body>
</html>