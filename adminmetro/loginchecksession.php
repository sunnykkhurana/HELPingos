
<?php
	session_start();
	if(isset($_REQUEST['submit']))
	{
		$username = $_REQUEST['username'];
		echo $password = $_REQUEST['password'];
		define("ENCRYPTION_KEY", "!@#$%^&*");
		
		/**
		 * Returns an encrypted & utf8-encoded */
		function encrypt($pure_string, $encryption_key) {
			$iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
			$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
			$encrypted_string = mcrypt_encrypt(MCRYPT_BLOWFISH, $encryption_key, utf8_encode($pure_string), MCRYPT_MODE_ECB, $iv);
			return $encrypted_string;
		}
		echo $encrypted = encrypt($password, ENCRYPTION_KEY);
		/**
		 * Returns decrypted original string
		
		function decrypt($encrypted_string, $encryption_key) {
			$iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
			$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
			$decrypted_string = mcrypt_decrypt(MCRYPT_BLOWFISH, $encryption_key, $encrypted_string, MCRYPT_MODE_ECB, $iv);
			return $decrypted_string;
		}
		 $decrypted = decrypt($password, ENCRYPTION_KEY);
		 */
	$conn = mysql_connect("localhost","root","") or die ("couldn't connect to the database.!");
	
	mysql_select_db("helpingos") or die ("could not connect..!");
	
	$query = "SELECT username, password FROM helpingos_admin WHERE username= '$username' and password='$encrypted'";
	$retval = mysql_query($query,$conn);
	
	$numrows = mysql_num_rows($retval);
	$check = mysql_fetch_array($retval);
		echo $check['password'];
	if($numrows==1)
		{	
		$_SESSION['admin'] = $check['username'];
		header('location:index.php');
		}
	else
		{
		header('location:login.php?vividh=Please enter valid username and password');
		}
	}
	else
		die("Please Enter A Username and Password");
?>
