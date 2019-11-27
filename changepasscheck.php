<?php 
	session_start();
	$user= $_SESSION['user'];
    $conn = mysql_connect("localhost","root","") or die ("couldn't connect to the database.!");
	
	mysql_select_db("helpingos") or die ("could not connect..!");
	
      if(isset($_POST['submit']))
      {
		 define("ENCRYPTION_KEY", "!@#$%^&*");
		
		/**
		 * Returns an encrypted & utf8-encoded */
		function encrypt($pure_string, $encryption_key) {
			$iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
			$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
			$encrypted_string = mcrypt_encrypt(MCRYPT_BLOWFISH, $encryption_key, utf8_encode($pure_string), MCRYPT_MODE_ECB, $iv);
			return $encrypted_string;
		}
			
		$passwordold = $_POST['cur_pwd'];
			$encrypted = encrypt($passwordold, ENCRYPTION_KEY);
		$passwordnew = $_POST['password'];
			$encrypted1 = encrypt($passwordnew, ENCRYPTION_KEY);
		$confirm_pwd = $_POST['confirm_pwd'];   
		$select = mysql_query("select email,password from helpingos_member WHERE fname='$user'");
		$fetch = mysql_fetch_array($select);
		$data_pwd = $fetch['password'];
		$email = $fetch['email'];

      if($data_pwd==$encrypted)
        {
		$insert=mysql_query("update helpingos_member set password='$encrypted1' where email='$email'");
		header ('location:changepass.php?vividh=PASSWORD CHANGE SUCCESSFULLY');
        }
      else
        {
		header ('location:changepass.php?vividh=PASSWORD NOT MATCH PLEASE TRY AGAIN');
        }
      }
      ?>