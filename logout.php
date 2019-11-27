<?php
	session_start();
	$conn = mysql_connect("localhost","root","");
	
	mysql_select_db("helpingos");
	
		$sql="DELETE FROM helpingos_cart";
		$retval=mysql_query($sql);
		
	session_destroy();
	
	header('location:index.php');
?>
	