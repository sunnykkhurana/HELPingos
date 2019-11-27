
<!DOCTYPE html>
<html>
<head>
<title>HELPingos</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<!-- Custom Theme files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/component.css" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--webfont-->
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,300,700' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css' />
	  <script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
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
				<div class=".col-md-6">
					<div class="bs-example">
						<form action='search.php' metod='get'>
							<ul>
								<li><input type="text" name="search" placeholder="Type product name">
								<input class="cbp-vm-icon cbp-vm-add" type="submit" name="submit">GO!</li>
								<li><i class="user"></i><a href="account.php">My Account</a></li>
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
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="header">
		<div class="header-top">
			<div class="container">
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" alt="" /></a>
				</div>
				<div class="top-menu">
				 <span class="menu"> </span>
					<ul class="cl-effect-15">
						<li><a class="active" href="index.php" data-hover="HOME">HOME</a></li>
						<li><a href="news.php" data-hover="NEWS">NEWS</a></li>
						<li><a href="products.php?cat_id=2">PRODUCTS</a></li>
						<li><a href="error.php" data-hover="GALLERY">GALLERY</a></li>
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
<!-- content-section-starts -->
	<div class="container">
		<div class="products-page">
			<div class="product">
				<div class="product-listy">
					<h3>Products Categories</h3>
					<ul class="product-list">
					<?php
						$conn= mysql_connect("localhost","root","");
						mysql_select_db("helpingos");
						$query= "SELECT * FROM helpingos_product_category";
						$retval=mysql_query($query,$conn);
						
						while($category=mysql_fetch_assoc($retval)) {
							echo "<li class='active'><a href='products.php?cat_id=".$category['category_id']."'>".$category['category_name']."</a></li>";
							}
						
					?>
					</ul>
				</div>
				<div class="latest-bis">
					<img src="images/top_long.jpg" class="img-responsive">
					<div class="offer">
						<p>40%</p>
						<small>Top Offer</small>
					</div>
				</div>
				<!--<div class="tags">
				    	<h4 class="tag_head">Tags Widget</h4>
				         <ul class="tags_links">
							<li><a href="#">Kitesurf</a></li>
							<li><a href="#">Super</a></li>
							<li><a href="#">Duper</a></li>
							<li><a href="#">Theme</a></li>
							<li><a href="#">Men</a></li>
							<li><a href="#">Women</a></li>
							<li><a href="#">Equipment</a></li>
							<li><a href="#">Best</a></li>
							<li><a href="#">Accessories</a></li>
							<li><a href="#">Men</a></li>
							<li><a href="#">Apparel</a></li>
							<li><a href="#">Super</a></li>
							<li><a href="#">Duper</a></li>
							<li><a href="#">Theme</a></li>
							<li><a href="#">Responsiv</a></li>
					        <li><a href="#">Women</a></li>
							<li><a href="#">Equipment</a></li>
						</ul>
				     </div>-->
			</div>
			<div class="new-product">
				<!--<div class="new-product-top">
					<ul class="product-top-list">
						<li><a href="index.php">Home</a>&nbsp;<span>&gt;</span></li>
						<li><span class="act">Best Sales</span>&nbsp;</li>
					</ul>
					<p class="back"><a href="index.php">Back to Previous</a></p>
					<div class="clearfix"></div>
				</div>
				<div class="mens-toolbar">
                 <div class="sort">
               	   <div class="sort-by">
			            <label>Sort By</label>
			            <select>
			                            <option value="">
			                    Position                </option>
			                            <option value="">
			                    Name                </option>
			                            <option value="">
			                    Price                </option>
			            </select>
			            <a href=""><img src="images/arrow2.gif" alt="" class="v-middle"></a>
	                   </div>
	    		     </div>
		    	        <ul class="women_pagenation dc_paginationA dc_paginationA06">
					     <li><a href="#" class="previous">Page:</a></li>
					     <li class="active"><a href="#">1</a></li>
					     <li><a href="#">2</a></li>
				  	    </ul>
	               		 <div class="clearfix"></div>		
			    </div>-->
			    <div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
					<div class="cbp-vm-options">
						<a href="#" class="cbp-vm-icon cbp-vm-grid cbp-vm-selected" data-view="cbp-vm-view-grid" title="grid">Grid View</a>
						<a href="#" class="cbp-vm-icon cbp-vm-list" data-view="cbp-vm-view-list" title="list">List View</a>
					</div>
					<!--<div class="pages">   
						<div class="limiter visible-desktop">
						<label>Show</label>
							<select>
									<option value="" selected="selected">9</option>
									<option value="">15</option>
									<option value="">30</option>
							</select> per page        
						</div>
					</div>-->
					<div class="clearfix"></div>
					<ul>
		
						<?php
						$key=$_GET['search'];
						$query="select * from helpingos_product where pro_name LIKE '%$key%' OR pro_description LIKE '%$key%'";
						$retval=mysql_query($query,$conn);
							$productCount = mysql_num_rows($retval); // count the output amount
							if ($productCount > 0) {
								while($product=mysql_fetch_array($retval)){
							echo "<li>";
							echo 	"<a class='cbp-vm-image' href='single.php?product_id=".$product['Pro_id']."' >";
							echo 	"<div class='view view-first'>";
							echo 		"<div class='inner_content clearfix'>";
							echo 			"<div class='product_image'>";
							echo 				"<img src='images/".$product['pro_image']."' class='img-responsive' alt=''/>";
							echo 				"<div class='mask'>";
							echo 					"<div class='info'>Quick View</div>";
							echo 				"</div>";
							echo 				"<div class='product_container'>";
							echo 					"<div class='cart-left'>";
							echo 						"<p class='title'>".$product['pro_name']."</p>";
							echo 					"</div>";
							echo 					"<div class='pricey'>".$product['pro_price']."</div>";
							echo 					"<div class='clearfix'></div>";
							echo 				"</div>";	
							echo			"</div>";
							echo		"</div>";
							echo	"</div>";
							echo	"</a>";
							echo	"<div class='cbp-vm-details'>";
							echo		"For -".$product['pro_gender']."<br/>";
							echo		$product['pro_offer'];
							echo	"</div>";
							echo    "</li>";
								}
							}
							else
								echo "<h4><span >Sorry, there is not any product matching your requirment at present.</span></h4>";	
							?>
					</ul>
				</div>
				<script src="js/cbpViewModeSwitch.js" type="text/javascript"></script>
                <script src="js/classie.js" type="text/javascript"></script>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
<?php include('footer.php');?>