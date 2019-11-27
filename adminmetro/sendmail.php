<?php
date_default_timezone_set('Asia/Calcutta');

require("class.phpmailer.php");

			if(isset($_REQUEST['submit']))
				{
					$to = $_REQUEST['email'];

				mysql_connect("localhost","root","") or die ("couldn't connect to the database.!");
				
				mysql_select_db("helpingos") or die ("could not connect..!");
				
				$sql = "SELECT email, password FROM helpingos_admin WHERE email='$to'";
				$getpasswrd = mysql_query($sql);
				
				while($passfetch=mysql_fetch_assoc($getpasswrd)) {
					
					define("ENCRYPTION_KEY", "!@#$%^&*");
					$encrypted= $passfetch['password'];
					/**
					 * Returns decrypted original string
					 */
					function decrypt($encrypted_string, $encryption_key) {
						$iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
						$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
						$decrypted_string = mcrypt_decrypt(MCRYPT_BLOWFISH, $encryption_key, $encrypted_string, MCRYPT_MODE_ECB, $iv);
						return $decrypted_string;
					
					echo $decrypted = decrypt($encrypted, ENCRYPTION_KEY);
				}
			}

$message_body = 'Your Password is  "<strong>'.$decrypted.'</strong>". <br />Please inform us if you had not asked for your helpingos password <a href="">Contact Us</a><br />';

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
  $Mail->Subject     = 'Admin Password';
  $Mail->ContentType = 'text/html; charset=utf-8\r\n';
  $Mail->From        = 'dummykonakart@gmail.com';
  $Mail->FromName    = 'Helpingos Team';
  $Mail->WordWrap    = 900; // RFC 2822 Compliant for Max 998 characters per line

  $Mail->AddAddress( $to ); // To:
  $Mail->isHTML( TRUE );
  $Mail->Body    = $message_body;
  $Mail->Send();
  $Mail->SmtpClose();

  if ( $Mail->IsError() ) { // ADDED - This error checking was missing
    return FALSE;
  }
  else {
	header('location:login.php?inform=<h3>We have send your password to your mail ID please check and login here!</h3>');
    return TRUE;
  }
  
?>
