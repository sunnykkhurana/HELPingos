<?php
	if(isset($_REQUEST['submit'])){
		$category = $_REQUEST['cat_ins'];
		$conn = mysql_connect("localhost","root","");
		mysql_select_db("helpingos");
	
		$query= "INSERT INTO helpingos_product_category(category_name)
			VALUES('$category')";
		$retval= mysql_query($query,$conn);

		if($retval)
		{
			header('location:productform.php');
		}
		else
		{
			echo $mysql_error;
		}
	}
?>