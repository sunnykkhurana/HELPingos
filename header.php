
<!DOCTYPE html>
<html>
<head>
	<title>HELPingos Website</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/demo1.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--webfont-->
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,300,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/etalage.css">
	<link type="text/css" rel="stylesheet" href="css/easy-responsive-tabs.css" />
</head>
<body>
	<!-- header-section-starts -->
	<div class="user-desc">
		<div class="container">
			<ul>
				<?php 
					session_start();
					if(isset($_SESSION['user'])){
						$user= $_SESSION['user'];
						if($user=''){
								echo "<li><i class='user'></i><a href='account.php'>Register/Log In</a></li>";
							}
							else{
								echo "<li><i class='user'></i><a href='logout.php'>Log Out</a></li>";
								echo "<li><i class='user'></i><a href='changepass.php'>Change Password</a></li>";
							}
						}
						else{
							echo "<li><i class='user'></i><a href='account.php'>Register/Log In</a></li>";
						}
				?>
				
				<li><i class="cart"></i><a href="cart.php">Cart<span><?php
																			$conn=mysql_connect("localhost","root","");
																				mysql_select_db("helpingos");
																				$sql="SELECT count(*) FROM helpingos_cart";
																				$retval=mysql_query($sql,$conn);
																				while($count=mysql_fetch_array($retval)){
																				$count=$count[0];
																				echo "<span style='color:cream'>&nbsp;&nbsp;(".$count.")</span>";
																			}
																?></span>
										</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="header">
		<div class="header-top">
			<div class="container">
				<div class="logo">
				<br/>
					<a href="index.php"><img src="images/logo1.png" alt="" /></a>
				</div>
				<div class="top-menu">
					<span class="menu"> </span>
					<ul class="cl-effect-15">
						<li><a class="active" href="index.php">HOME</a></li>
						<li><a href="news.php" data-hover="NEWS">NEWS</a></li>
						<li><a href="products.php?cat_id=2" data-hover="PRODUCTS">PRODUCTS</a></li>
						<li><a href="gallery.php" data-hover="GALLERY">GALLERY</a></li>
						<li><a href="contact.php" data-hover="CONTACT">CONTACT</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
<!-- header-section-ends -->
<!-- content-section-starts -->
	<div class="content">