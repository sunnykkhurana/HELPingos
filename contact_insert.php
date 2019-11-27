<?php
		$uname  = $_REQUEST['userName'];
		$email  = $_REQUEST['userEmail'];
		$phone = $_REQUEST['userPhone'];
		$message = $_REQUEST['userMsg'];
		
		$conn = mysql_connect("localhost","root","");
			mysql_select_db("helpingos");

			$query = "INSERT INTO helpingos_contactus(contact_name,contact_email,contact_number,contact_message)
				VALUES('$uname','$email','$phone','$message')";
			$retval = mysql_query($query,$conn);

	date_default_timezone_set('Asia/Calcutta');

	require("class.phpmailer.php");

	$message_body = 'Thank You For Contacting Us.<br/> Your Query"<strong>'.$message.'</strong>" will be look after soon.';

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
	  $Mail->Subject     = 'Contact Us Reply';
	  $Mail->ContentType = 'text/html; charset=utf-8\r\n';
	  $Mail->From        = 'dummykonakart@gmail.com';
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
		header('location:contact.php?message=<h3>Your Queries will be solved soon.<strong>Thank you</strong> for feedback</h3>');
		return TRUE;
	  }
	  
?>
