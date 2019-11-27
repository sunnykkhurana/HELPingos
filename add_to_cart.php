
<?php
	//adding to database in cart table.
	if(isset($_REQUEST['submit'])){
		$pid= $_REQUEST['pro_id'];
		$pname= $_REQUEST['pro_name'];
		$pprice= $_REQUEST['pro_price'];
		$pqty= $_REQUEST['pro_quantity'];
		$ptotal = $pprice * $pqty;
		
		$conn = mysql_connect("localhost","root","");
			mysql_select_db("helpingos");

			$query = "INSERT INTO helpingos_cart(cart_pro_id,cart_pro_name,cart_pro_quantity,cart_pro_price,cart_pro_total)
				VALUES('$pid','$pname','$pqty','$pprice','$ptotal')";

			$retval = mysql_query($query,$conn);
			
			if($retval)
			{
				header('location:single.php?product_id='.$pid.'&message=<h3>Your product is added to Cart successfully</h3>');
			}
			else
			{
				echo "Some error occured";
			}
		}
?>