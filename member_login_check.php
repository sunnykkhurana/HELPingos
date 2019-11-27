
<?php
	session_start();
	if(isset($_REQUEST['submit']))
	{
		$username = $_REQUEST['email'];
		$password = $_REQUEST['password'];

	$conn = mysql_connect("localhost","root","") or die ("couldn't connect to the database.!");
	
	mysql_select_db("helpingos") or die ("could not connect..!");
	
	$query = "SELECT email, password FROM helpingos_member WHERE email= '$username' and password='$password'";
	$retval = mysql_query($query,$conn);
	
	$numrows = mysql_num_rows($retval);
	$check = mysql_fetch_array($retval);
	if($numrows==1)
		{	
		$_SESSION['user'] = $check['email'];
		header('location:index.php');
		}
	else
		{
		header('location:account.php?errormessage=<h2>Please enter valid username and password</h2>');
		}
	}
	else
		die("Please Enter A Username and Password");
?>
