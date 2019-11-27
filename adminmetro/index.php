
<?php include('header.php'); ?>
<?php
	$conn = mysql_connect("localhost","root","") or die ("couldn't connect to the database.!");
	mysql_select_db("helpingos") or die ("could not connect..!");
	
	if(!isset($_SESSION['admin'])){
				header('location: login.php');
			}
?>
<h1>Welcome <?php echo $_SESSION['admin'];?></h1>

<?php include('footer.php'); ?>