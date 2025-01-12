<?php
session_start();
include ('connect.php');
include ('cartfunction.php');
if(isset($_SESSION['cid']))
{
	include('header1.php');

}
else{
	include('header.php');
}
if (isset($_REQUEST['PID'])) 
{

	$pid=$_REQUEST['PID'];
	$qty=$_REQUEST['qty'];
	Add($pid,$qty);
	

}

if (isset($_REQUEST['productid'])) 
	{
		$remove=$_REQUEST['productid'];
		Remove($remove);
	}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="css/new.css">
</head>
<body>
<legend>Product List</legend>
		<?php
		if (!isset($_SESSION['shopcart'])) 
		{
			echo "<p>No Shopping Record Found.</p>";
			exit();
		}
		?>
		<table class="table">
			<tr>
				<th>Image</th>
				<th>ProductID</th>
				<th>ProductName</th>
				<th>Price</th>
				<th>Quantity</th>
				<!-- <th>Action</th> -->
			</tr>
		<?php
		$size=count($_SESSION['shopcart']);
		for ($i=0; $i <$size ; $i++) 
		{ 
			$image1=$_SESSION['shopcart'][$i]['image1'];
			$productid=$_SESSION['shopcart'][$i]['productid'];
			$productname=$_SESSION['shopcart'][$i]['productname'];
			$price=$_SESSION['shopcart'][$i]['price'];
			$quantity=$_SESSION['shopcart'][$i]['quantity'];
		
			echo"<tr>";
			echo"<td><img src='$image1' width='100px' height='100px'/></td>";
			echo "<td>$productid</td>";
			echo "<td>$productname</td>";
			echo "<td>$ $price </td>";
			echo "<td>$quantity </td>";
			// echo "<td><a href='cartlist.php?productid=$productid'> Remove</a></td>";

			echo "</tr>";
		}
		?>	


	</table>
	</fieldset>
</body>
</html>
		