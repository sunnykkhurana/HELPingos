
<html>
	<head>
	<title>Helpingos NGO & online shop</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<!-- Custom Theme files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--webfont-->
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,300,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<!--webfont-->
	<script src="js/jquery.min.js"></script>
	<link rel="stylesheet" href="css/etalage.css">
	<script src="js/jquery.etalage.min.js"></script>
	<script>
		jQuery(document).ready(function($){
			$('#etalage').etalage({
				thumb_image_width: 300,
				thumb_image_height: 400,
				source_image_width: 800,
				source_image_height: 1000,
				show_hint: true,
				click_callback: function(image_anchor, instance_id){
					alert('Callback example:\nYou clicked on an image with the anchor:
					"'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
				}
			});

		});
	</script>
	<link type="text/css" rel="stylesheet" href="css/easy-responsive-tabs.css" />
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true,   // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function(event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});

			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
					});
				});
			</script>
	</head>
<body>
	<!-- header-section-starts -->
	<div class="user-desc">
		<div class="container">
			<form action='search.php' metod='get'>
							<ul>
								<li><input type="text" name="search" placeholder="Type product name">
								<input class="cbp-vm-icon cbp-vm-add" type="submit" name="submit">GO!</li>
								<?php 
									session_start();
									if(isset($_SESSION['user'])){
										$user= $_SESSION['user'];
										if($user=''){
												echo "<li><i class='user'></i><a href='account.php'>Register/Log In</a></li>";
											}
											else{
												echo "<li><i class='user'></i><a href='logout.php'>Log Out</a></li>";
												echo "<li><i class='cog'></i><a href='changepass.php'>Change Password</a></li>";
												
											}
										}
										else{
											echo "<li><i class='user'></i><a href='account.php'>Register/Log In</a></li>";
										}
								?>
								<li><i class="cart"></i><a href="cart.php">Cart	<span><?php
																					$conn=mysql_connect("localhost","root","");
																						mysql_select_db("helpingos");
																						$sql="SELECT count(*) FROM helpingos_cart";
																						$retval=mysql_query($sql,$conn);
																						while($count=mysql_fetch_array($retval)){
																						$count=$count[0];
																						echo "<span style='color:cream'>&nbsp;&nbsp;(".$count.")</span>";
																					}
																			?>	</span>
														</a>
								</li>
							</ul>
			</form>
		</div>
	</div>
	<div class="header">
		<div class="header-top">
			<div class="container">
				<div class="logo">
					<a href="index.php"><img src="images/logo1.png" alt="" /></a>
				</div>
				<div class="top-menu">
				<span class="menu"> </span>
					<ul class="cl-effect-15">
						<li><a href="index.php" data-hover="HOME">HOME</a></li>
						<li><a href="error.php" data-hover="NEWS">NEWS</a></li>
						<li><a class="active" href="products.php?cat_id=2">PRODUCTS</a></li>
						<li><a href="gallery.php" data-hover="GALLERY">GALLERY</a></li>
						<li><a href="contact.php" data-hover="CONTACT">CONTACT</a></li>
					</ul>
				</div>
				<!--script-nav-->
				<script>
				$("span.menu").click(function(){
				$(".top-menu ul").slideToggle("slow" , function(){
				});
				});
				</script>
				<!--script-nav-->
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
<!-- header-section-ends -->
	<!-- start content -->
	<div class="container">
	<div class="single">
			<!-- start span1_of_1 -->
			<?php
				/*$conn= mysql_connect("localhost","root","");
					mysql_select_db("helpingos");*/
				$query= "SELECT * FROM helpingos_product WHERE pro_id='".$_REQUEST['product_id']."'";
				$retval=mysql_query($query,$conn);
					while($product=mysql_fetch_assoc($retval)){
			echo "<div class='left_content'>";
			echo	"<div class='span_1_of_left'>";
			echo		"<div class='grid images_3_of_2'>";
			echo						"<img src='images/".$product['pro_image']."'  />";
			echo			 "<div class='clearfix'></div>";
			echo		"</div>";
			echo		"<div class='span1_of_1_des'>";
			echo			"<div class='desc1'>";
			echo				"<h3> ".$product['pro_name']." </h3>";
			echo				"<p>".$product['pro_code']."</p>";
			echo				"<h5> ".$product['pro_price']." <a href=''>click for offer</a></h5>";
			?>
								<div class="available">
								<h4>Available Options :</h4>
									<div class="btn_form">
										<form id="cartform" name="cartform" method="post" action="add_to_cart.php">
											<ul>
												<li>Color:
													<select>
													<option>Silver</option>
													<option>Black</option>
													<option>Dark Black</option>
													<option>Red</option>
												</select></li>
												<li>Size:
													<select>
														<option>L</option>
														<option>XL</option>
														<option>S</option>
														<option>M</option>
													</select>
												</li>
												<li>Quantity:
													<select id="pro_quantity" name="pro_quantity">
														<option value='1'>1</option>
														<option value='2'>2</option>
														<option value='3'>3</option>
														<option value='4'>4</option>
														<option value='5'>5</option>
													</select>
												</li>
											</ul>
												<input type="hidden" name="pro_id" id="pro_id" value="<?php echo $product['Pro_id'] ?>"/>
												<input type="hidden" name="pro_name" id="pro_name" value="<?php echo $product['pro_name'] ?>" />
												<input type="hidden" name="pro_price" id="pro_price" value="<?php echo $product['pro_price'] ?>" />
												<input type="submit" name="submit" id="button" value="Add to Shopping Cart" />
												<br/>
												<br/>
												<?php
													if(isset($_REQUEST['message'])){
													echo $_REQUEST['message'];
													}
												?>
										</form>
									</div>
									<!--<span class="span_right"><a href="#">login to save in wishlist </a></span>-->
				
									<div class="clearfix"></div>
								</div>
								<!--<div class="filter-by-color">
									<h3>Filter by Color</h3>
									<ul class="w_nav2">
										<li><a class="color1" href="#"></a></li>
										<li><a class="color2" href="#"></a></li>
										<li><a class="color3" href="#"></a></li>
										<li><a class="color4" href="#"></a></li>
										<li><a class="color5" href="#"></a></li>
										<li><a class="color10" href="#"></a></li>
										<li><a class="color7" href="#"></a></li>
										<li><a class="color8" href="#"></a></li>
										<li><a class="color9" href="#"></a></li>
										<li><a class="color10" href="#"></a></li>
										<li><a class="color6" href="#"></a></li>
										<li><a class="color13" href="#"></a></li>
										<li><a class="color14" href="#"></a></li>
										<li><a class="color15" href="#"></a></li>
										<li><a class="color16" href="#"></a></li>
										<li><a class="color17" href="#"></a></li>
										<li><a class="color1" href="#"></a></li>
										<li><a class="color3" href="#"></a></li>
										<li><a class="color2" href="#"></a></li>
									</ul>
								</div>-->
			<?php
			echo			"</div>";
			echo		"</div>";
			echo		"<div class='clearfix'></div>";
			echo	"</div>";
			echo	"<div id='horizontalTab'>";
			echo		"<ul class='resp-tabs-list'>";
			echo			"<li>More Information</li>";
			echo			"<li>Specifications</li>";
			echo		"</ul>";
			echo		"<div class='resp-tabs-container'>";
			echo			"<div class='tab-content'>";
			echo				"<p>More information.</p>";
			echo				"<ul>";
			echo					"<li>".$product['pro_offer']."</li>";
			echo					"<li>".$product['pro_date']."</li>";
			echo				"</ul>";
			echo			"</div>";
			echo			"<div class='tab-content'>";
			echo				"<p class='para'><span>Description</span></p>";
			echo				"<ul class='qua_nav'>";
			echo					"<li>".$product['pro_description']."</li>";
			echo				"</ul>";
			echo			"</div>";
			echo		"</div>";
			echo	"</div>";
			echo"</div>";
					}
			
			?>
			
			<div class="left_sidebar">
					<div class="sellers">
					<!--
						<h4>Best Sellers</h4>
						 <div class="single-nav">
			                <ul>
			                   <li><a href="#">Always free from repetition</a></li>
			                    <li><a href="#">Always free from repetition</a></li>
			                    <li><a href="#">The standard chunk of Lorem Ipsum</a></li>
			                    <li><a href="#">The standard chunk of Lorem Ipsum</a></li>
			                    <li><a href="#">Always free from repetition</a></li>
			                    <li><a href="#">The standard chunk of Lorem Ipsum</a></li>
			                    <li><a href="#">Always free from repetition</a></li>
			                    <li><a href="#">Always free from repetition</a></li>
			                    <li><a href="#">Always free from repetition</a></li>
			                    <li><a href="#">The standard chunk of Lorem Ipsum</a></li>
			                    <li><a href="#">Always free from repetition</a></li>
			                    <li><a href="#">Always free from repetition</a></li>
			                    <li><a href="#">Always free from repetition</a></li>			                    
			                </ul>
			            </div> 
					-->
						<div class="banner-wrap bottom_banner color_link">
							<a href="#" class="main_link">
							<figure><img src="images/delivery.png" alt=""></figure>
							<h5><span>Free Shipping</span><br> on orders over $99.</h5><p>This offer is valid on all our store items.</p></a>
						</div>
						<div class="brands">
							 <h1>Categories</h1>
					  		 <div class="field">
				                <select class="select1">
									<option>Please Select</option>
								<?php 
									/*$conn= mysql_connect("localhost","root","");
									mysql_select_db("helpingos");*/
									$query= "SELECT * FROM helpingos_product_category";
									$retval=mysql_query($query,$conn);
									
									while($category=mysql_fetch_assoc($retval)) {
										echo "<option class='active'><a href='products.php?cat_id=".$category['category_id']."'>".$category['category_name']."</a></option>";
										}
								?>
				                </select>
				            </div>
			    		</div>
					</div>
				</div>
					<!-- end sidebar -->
          	    <div class="clearfix"></div>
	</div>
<!-- content-section-ends -->	
<!-- contact-section-starts -->
<?php include('footer.php');?>