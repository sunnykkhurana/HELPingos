<?php
		$fname  = $_REQUEST['mem_name'];
		$email  = $_REQUEST['mem_email'];
		$gender = $_REQUEST['mem_gender'];
		$age 	= $_REQUEST['mem_agegroup'];
		
		if(isset($_REQUEST['volunteer']))
		{
			$vol= $_REQUEST['volunteer'];
		}
		else{
			$vol="-";
		}
		
		if(isset($_REQUEST['donor']))
		{
			$don= $_REQUEST['donor'];
		}
		else{
			$don="-";
		}
		
		if(isset($_REQUEST['partner']))
		{
			$par= $_REQUEST['partner'];
		}
		else{
			$par="-";
		}
		$phone  = $_REQUEST['mem_phone'];
		$password = $_REQUEST['mem_password'];
		
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
		$encrypted = encrypt($password, ENCRYPTION_KEY);

		
			$conn = mysql_connect("localhost","root","");
			mysql_select_db("helpingos");

			$query = "INSERT INTO helpingos_member(fname,email,gender,agegroup,volunteer,donor,partner,contact_number,password)
				VALUES('$fname','$email','$gender','$age','$vol','$don','$par','$phone','$encrypted')";
			$retval = mysql_query($query,$conn);
		
			if($retval)
			{
				header('location:account.php');
			}
?>
<?php
	$to='';
	date_default_timezone_set('Asia/Calcutta');

	require("class.phpmailer.php");

	$message_body = 'Thank You, <strong>'.$fname.'</strong> for Becoming a part of our<strong> helpingos </strong>family.<br/>We are glad to have you and will look forward for taking help from you for needy people.';

	  $Mail = new PHPMailer();
	  $Mail->IsSMTP(); // Use SMTP
	  $Mail->Host        = "smtp.gmail.com"; // Sets SMTP server
	  $Mail->SMTPDebug   = 2; // 2 to enable SMTP debug information
	  $Mail->SMTPAuth    = TRUE; // enable SMTP authentication
	  $Mail->SMTPSecure  = "tls"; //Secure conection
	  $Mail->Port        = 587; // set the SMTP port
	  $Mail->Username    = 'dummykonakart@gmail.com'; // SMTP account username
	  $Mail->Password    = 'dummydum'; // SMTP account password
	  $Mail->Priority    = 1; // Highest priority - Email priority (1 = High, 3 = Normal, 5 = low)
	  $Mail->CharSet     = 'UTF-8';
	  $Mail->Encoding    = '8bit';
	  $Mail->Subject     = 'Thank you for Registration';
	  $Mail->ContentType = 'text/html; charset=utf-8\r\n';
	  $Mail->From        = 'helpingos@gmail.com';
	  $Mail->FromName    = 'Helpingos Team';
	  $Mail->WordWrap    = 900; // RFC 2822 Compliant for Max 998 characters per line

	  $Mail->AddAddress( $email ); // To:
	  $Mail->isHTML( TRUE );
	  $Mail->Body    = $message_body;
	  $Mail->Send();
	  $Mail->SmtpClose();

	  if ( $Mail->IsError() ) { // ADDED - This error checking was missing
		return FALSE;
	  }
	  else {
		header('location:account.php?inform=<h3>Thank you for registration!</h3>');
		return TRUE;
	  }
	  
?>
