<?php	
	$conn = mysql_connect("localhost","root","");
	mysql_select_db("helpingos");
	
	if(isset($_REQUEST['update1'])){

		$regid= $_REQUEST['regid'];
		$fname= $_REQUEST['fname'];
		$lname= $_REQUEST['lname'];
		$email= $_REQUEST['email'];
		$uname= $_REQUEST['aname'];
		
		$sql="UPDATE helpingos_admin SET firstname='$fname',lastname='$lname',email='$email',username='$uname' WHERE regid=$regid";
		echo $sql;
		$retval=mysql_query($sql);
		
		
		header('location:tables.php');
	}
?>

<?php	

	if(isset($_REQUEST['update2'])){
		
		$uid= $_REQUEST['userid'];
		$fname= $_REQUEST['mem_name'];
		$email= $_REQUEST['mem_email'];
		$gender= $_REQUEST['mem_gender'];
		$age= $_REQUEST['mem_agegroup'];
		if(isset($_REQUEST['v']))
		{
			$vol= $_REQUEST['v'];
		}
		else{
			$vol= "-";
		}
		
		if(isset($_REQUEST['d']))
		{
			$don= $_REQUEST['d'];
		}
		else{
			$don= "-";
		}

		if(isset($_REQUEST['p']))
		{
			$par= $_REQUEST['p'];
		}
		else{
			$par= "-";
		}
		$phone= $_REQUEST['mem_phone'];
		$address= $_REQUEST['mem_address'];
		
		$sql="UPDATE helpingos_member SET fname='$fname',email='$email',gender='$gender',agegroup='$age',
			volunteer='$vol',donor='$don',partner='$par',contact_number='$phone',address='$address' WHERE userid=$uid";
		echo $sql;
		$retval=mysql_query($sql);
		
		header('location:tables.php');
	}
?>

<?php	
	$conn = mysql_connect("localhost","root","");
	mysql_select_db("helpingos");
	
	if(isset($_REQUEST['update3'])){

		$pid= $_REQUEST['proid'];
		$pname= $_REQUEST['pro_name'];
		$pcode= $_REQUEST['pro_code'];
		$pgen= $_REQUEST['pro_gen'];
		$price= $_REQUEST['pro_price'];
		$pdate= $_REQUEST['pro_joindate'];
		$poffer= $_REQUEST['pro_offer'];
		$pdes= $_REQUEST['pro_desc'];
		$pimg= $_REQUEST['pro_image'];
		
		
		$sql="UPDATE helpingos_product SET pro_name='$pname',pro_code='$pcode',pro_gender='$pgen',pro_price='$price',pro_date='$pdate',
			pro_offer='$poffer',pro_desc='pdes',pro_image='$pimg' WHERE Pro_id=$pid";
		echo $sql;
		$retval=mysql_query($sql);
		echo $retval;
		
		header('location:tables.php');
	}
?>