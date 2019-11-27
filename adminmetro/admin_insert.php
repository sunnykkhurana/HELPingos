<?php
		if(isset($_REQUEST['submit'])){
		$fname=$_REQUEST['fname'];
		$lname=$_REQUEST['lname'];
		$email=$_REQUEST['email'];
		$uname=$_REQUEST['aname'];
		$pwd =$_REQUEST['apass'];
		define("ENCRYPTION_KEY", "!@#$%^&*");
			/**
			 * Returns an encrypted & utf8-encoded
			 */
			function encrypt($pure_string, $encryption_key) {
				$iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
				$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
				$encrypted_string = mcrypt_encrypt(MCRYPT_BLOWFISH, $encryption_key, utf8_encode($pure_string), MCRYPT_MODE_ECB, $iv);
				return $encrypted_string;
			}
			$encrypted = encrypt($pwd, ENCRYPTION_KEY);
		
		$conn = mysql_connect("localhost","root","");
		mysql_select_db("helpingos");

		$query = "INSERT INTO helpingos_admin(firstname,lastname,email,username,password)
		VALUES('$fname','$lname','$email','$uname','$encrypted')";
		$retval = mysql_query($query,$conn);
		
		if($retval)
		{
			header('location:adminform.php');
		}
		else
		{
			echo $mysql_error;
		}
	}
?>