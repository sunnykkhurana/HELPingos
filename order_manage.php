<?php
	session_start();
	if(isset($_SESSION['user'])){
	
	$conn= mysql_connect("localhost","root","");	
	mysql_select_db("helpingos");
	
	$today = date("Y-m-d");
	$user = $_SESSION['user'];
	$total= $_REQUEST['total'];
	
	$sql ="INSERT INTO helpingos_order(date_of_order,user_id,total_amount)
		values('$today','$user','$total')";
	
	$retval = mysql_query($sql,$conn);
	$orderid= mysql_insert_id();
	
	if(!$retval)
	{
	  die('Could not enter data: ' . mysql_error());
	}
	echo "Entered data successfully\n";

	$sql1 ="SELECT * FROM helpingos_cart";
	$retval1 = mysql_query($sql1,$conn);
	while($cart=mysql_fetch_assoc($retval1)){
		$cart1=$cart['cart_pro_id'];
		$cart2=$cart['cart_pro_quantity'];
		$cart3=$cart['cart_pro_price'];
		}
	
	$query= "INSERT INTO helpingos_order_item(order_item_order_id,order_item_product_id,order_item_quantity,order_item_price)
		VALUES('$orderid','$cart1','$cart2','$cart3')";
	echo $query;
	$retval3 = mysql_query($query,$conn);
	
	header('location:order.php');
	}
	else{
		header('location:cart.php?errormessage=You must log In to place order');
	}
?>
