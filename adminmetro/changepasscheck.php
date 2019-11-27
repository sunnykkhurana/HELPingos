<?php 
	session_start();
	$user= $_SESSION['admin'];
    $conn= mysql_connect("localhost","root","");
	
	mysql_select_db("helpingos") or die ("could not connect..!");
	
      if(isset($_POST['submit']))
      {
      $passwordold = $_REQUEST['cur_pwd'];
	
	  define("ENCRYPTION_KEY", "!@#$%^&*");
		
		/**
		 * Returns an encrypted & utf8-encoded */
		function encrypt($pure_string, $encryption_key) {
			$iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
			$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
			$encrypted_string = mcrypt_encrypt(MCRYPT_BLOWFISH, $encryption_key, utf8_encode($pure_string), MCRYPT_MODE_ECB, $iv);
			return $encrypted_string;
		}
		$encrypted = encrypt($passwordold, ENCRYPTION_KEY);
		
		$passwordnew = $_REQUEST['password'];
		$encrypted1 = encrypt($passwordnew, ENCRYPTION_KEY);
	
      $query = "SELECT email,password FROM helpingos_admin WHERE username='$user'";
	  $retval = mysql_query($query,$conn);
      $fetch = mysql_fetch_array($retval);
      $data_pwd = $fetch['password'];
	  $email = $fetch['email'];

      if($data_pwd==$encrypted)
        {
		$insert=mysql_query("update helpingos_admin set password='$encrypted1' where email='$email'");
		header ('location:changepass.php?vividh=PASSWORD CHANGE SUCCESSFULLY');
        }
      else
        {
		header ('location:changepass.php?vividh=PASSWORD NOT MATCH PLEASE TRY AGAIN');
        }
      }
      ?>