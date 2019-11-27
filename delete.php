<?php	
	$conn = mysql_connect("localhost","root","");
	
	mysql_select_db("helpingos");
	if( isset($_GET['del']))
	{
		$cart_id =$_GET['del'];
		$sql="DELETE FROM helpingos_cart WHERE cart_id='$cart_id'";
		$retval=mysql_query($sql);
		header('location:cart.php');
	}
?>

<?php	
	$conn = mysql_connect("localhost","root","");
	
	mysql_select_db("helpingos");
	if( isset($_GET['delete']))
	{
		$order_id =$_GET['delete'];
		$sql1="DELETE FROM helpingos_order WHERE order_id='$order_id'";
		$retval1=mysql_query($sql1);
		$sql2="DELETE FROM helpingos_order_item WHERE order_item_order_id='$order_id'";
		$retval2=mysql_query($sql2);
		header('location:order.php');
	}
?>