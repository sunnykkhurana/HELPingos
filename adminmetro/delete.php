<?php	
	$conn = mysql_connect("localhost","root","");
	
	mysql_select_db("helpingos");
	if( isset($_GET['del']))
	{
		$regid =$_GET['del'];
		$sql="DELETE FROM helpingos_admin WHERE regid='$regid'";
		echo $sql;
		$retval=mysql_query($sql);
		header('location:tables.php');
	}
?>
	
<?php	
	$conn = mysql_connect("localhost","root","");
	
	mysql_select_db("helpingos");
	if( isset($_GET['del']))
	{
		$userid =$_GET['del'];
		$sql="DELETE FROM helpingos_member WHERE userid='$userid'";
		echo $sql;
		$retval=mysql_query($sql);
		header('location:tables.php');
	}
?>
		
<?php	
	$conn = mysql_connect("localhost","root","");
	
	mysql_select_db("helpingos");
	if( isset($_GET['del']))
	{
		$Pro_id =$_GET['del'];
		$sql="DELETE FROM helpingos_product WHERE Pro_id='$Pro_id'";
		echo $sql;
		$retval=mysql_query($sql);
		header('location:tables.php');
	}
?>
