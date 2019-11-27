<?php
	$pcat= $_REQUEST['pro_category'];
	$pname= $_REQUEST['pro_name'];
	$pcode= $_REQUEST['pro_code'];
	$pgen= $_REQUEST['pro_gen'];
	$pprice= $_REQUEST['pro_price'];
	$pdate= $_REQUEST['pro_joindate'];
	$poffer= $_REQUEST['pro_offer'];
	$pdesc= $_REQUEST['pro_desc'];
	$pimage= $_FILES['pro_image']['name'];
	$tmp_name= $_FILES['pro_image']['tmp_name'];
	$destination = "upload/" .time(). $_FILES['pro_image']['name'];
		move_uploaded_file($source, $destination);
	
	$conn = mysql_connect("localhost","root","");
		mysql_select_db("helpingos");

		$query = "INSERT INTO helpingos_product(pro_category_id,pro_name,pro_code,pro_gender,pro_price,pro_date,pro_offer,pro_description,pro_image)
			VALUES('$pcat','$pname','$pcode','$pgen','$pprice','$pdate','$poffer','$pdesc','$pimage')";
		$retval = mysql_query($query,$conn);
		
		if($retval)
		{
			header('location:productform.php');
		}
		else
		{
			echo $mysql_error;
		}
?>