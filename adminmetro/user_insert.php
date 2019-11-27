
<?php
		$fname  = $_REQUEST['mem_name'];
		$email  = $_REQUEST['mem_email'];
		$pass = $_REQUEST['mem_password'];
		define("ENCRYPTION_KEY", "!@#$%^&*");
		
		/**
		 * Returns an encrypted & utf8-encoded */
		function encrypt($pure_string, $encryption_key) {
			$iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
			$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
			$encrypted_string = mcrypt_encrypt(MCRYPT_BLOWFISH, $encryption_key, utf8_encode($pure_string), MCRYPT_MODE_ECB, $iv);
			return $encrypted_string;
		}
		$encrypted = encrypt($pass, ENCRYPTION_KEY);

		$gender = $_REQUEST['mem_gender'];
		$age 	= $_REQUEST['mem_agegroup'];
		
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
		
		$phone  = $_REQUEST['mem_phone'];
		$adrs   = $_REQUEST['mem_address'];
		
		$conn = mysql_connect("localhost","root","");
		
		mysql_select_db("helpingos");

		$query = "INSERT INTO helpingos_member(fname,email,password,gender,agegroup,volunteer,donor,partner,contact_number,address)
			VALUES('$fname','$email','$encrypted','$gender','$age','$vol','$don','$par','$phone','$adrs')";
		$retval = mysql_query($query,$conn);
		
		if($retval)
		{
			header('location:index.php');
		}
		else
		{
			echo $mysql_error;
		}
?>