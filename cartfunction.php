<?php
include('connect.php');
session_start();
function Add($productid,$quantity)

{
    $connect=mysqli_connect("localhost", "root", "","hge(db)");

	$query="SELECT * FROM products WHERE productcode='$productid'";
	$ret=mysqli_query($connect,$query);
	$count=mysqli_num_rows($ret);
	if ($count<1) 
	{
		echo "<p>No Record Found.</p>";
		exit();
	}
 $arr=mysqli_fetch_array($ret);
 $productname=$arr['productname'];
 $price=$arr['price'];
 $image1=$arr['productimage'];
if (isset($_SESSION['shopcart']))
 {
 	  $index=IndexOf($productid);
	  if($index==-1)	
	  {
	  	$size=count($_SESSION['shopcart']);

	  	$_SESSION['shopcart'][$size]['productid']=$productid;
	  	$_SESSION['shopcart'][$size]['productname']=$productname;
	  	$_SESSION['shopcart'][$size]['price']=$price;
	  	$_SESSION['shopcart'][$size]['quantity']=$quantity;
	  	$_SESSION['shopcart'][$size]['image1']=$image1;

	  
		}
		
 }
 else
 {
 	$_SESSION['shopcart']=array();
 	$_SESSION['shopcart'][0]['productid']=$productid;
 	$_SESSION['shopcart'][0]['productname']=$productname;
 	$_SESSION['shopcart'][0]['price']=$price;
 	$_SESSION['shopcart'][0]['quantity']=$quantity;
 	$_SESSION['shopcart'][0]['image1']=$image1;
 }
   echo "<script>window.location='cartlist.php'</script>";
}

function IndexOf($productid)
  {
  	 if(!isset($_SESSION['shopcart']))
  	{
  		return -1;
  	}
  	$size=count($_SESSION['shopcart']);
  	if($size==0)
  	{
  		return -1;
  	}
  	for($i=0; $i<$size; $i++)
  	{
  		if($productid==$_SESSION['shopcart'][$i]['productid'])
     {
     	return $i;
     }
  	}
     return -1;
  }


function Remove($productid)
{
	$index=IndexOf($productid);
	if($index!=-1)
	{
		unset($_SESSION['shopcart'][$index]);
		echo "<script>window.location='cartlist.php'</script>";
	}
}
