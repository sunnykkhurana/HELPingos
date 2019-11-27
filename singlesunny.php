<?php 
    session_start(); 
    if(isset($_GET['page'])){ 
        $pages=array("products", "cart"); 
    
        if(in_array($_GET['page'], $pages)) {           
            $_page=$_GET['page']; 
        }else{ 
            $_page="products"; 
        } 
    }else{      
        $_page="products"; 
    }
?>
<?php 
  
    if(isset($_GET['action']) && $_GET['action']=="add"){ 
          
        $id=intval($_GET['Pro_id']); 
          
        if(isset($_SESSION['cart'][$id])){ 
              
            $_SESSION['cart'][$id]['quantity']++; 
              
        }else{ 
            $conn = mysql_connect("localhost","root",""); 
            $sql_s= "SELECT * FROM helpingos_product WHERE Pro_id= $pro_id"; 
            $query_s=mysql_query($sql_s,$conn); 
            if(mysql_num_rows($query_s)!=0){ 
                $row_s=mysql_fetch_array($query_s); 
                  
                $_SESSION['cart'][$row_s['Pro_id']]=array( 
                        "quantity" => 1, 
                        "price" => $row_s['pro_price'] 
                    );
            }else{ 
                $message="This product id it's invalid!"; 
            } 
        }
    }
?> 
<html>
<head>
<title>EAGLECLOTHES Bootstarp responsive Website Template| Single-page :: w3layouts</title>
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
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
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
			<ul>
				<li><a href="checkout.php">Checkout</a></li>
				<li><i class="user"></i><a href="account.html">My Account</a></li>
				<li><i class="cart"></i><a href="cart.php">Cart (3)</a></li>
			</ul>
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
						<li><a href="index.php" data-hover="HOME">HOME</a></li>
						<li><a href="404.php" data-hover="NEWS">NEWS</a></li>
						<li><a class="active" href="products.php">PRODUCTS</a></li>
						<li><a href="404.php" data-hover="FEATURES">FEATURES</a></li>
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
	
	<div class="single">
			<!-- start span1_of_1 -->
			<?php
			$conn= mysql_connect("localhost","root","");
					mysql_select_db("helpingos");
				$query= "SELECT * FROM helpingos_product WHERE pro_id='".$_REQUEST['product_id']."'";
				$retval=mysql_query($query,$conn);
					while($product=mysql_fetch_assoc($retval)){
			echo "<div class='left_content'>";
			echo	"<div class='span_1_of_left'>";
			echo		"<div class='grid images_3_of_2'>";
			echo			"<ul id='etalage'>";
			echo				"<li>";
			echo					"<a href=''>";
			echo						"<img class='etalage_thumb_image' src='images/".$product['pro_image']."' class='img-responsive' />";
			echo						"<img class='etalage_source_image' src='images/".$product['pro_image']."' class='img-responsive' />";
			echo					"</a>";
			echo				"</li>";
			echo			"</ul>";
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
										<li>Quality:
											<select>
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
										</li>
									</ul>
									<div class="btn_form">
										<form id="cartform" name="cartform" method="post" action="">
											<a href="single.php?page=products&action=add&id=<?php echo $product['Pro_id'] ?>"><input type="submit" name="button" id="button" value="Add to Shopping Cart" /></a>
										</form>
									</div>
									<span class="span_right"><a href="#">login to save in wishlist </a></span>
									<?php 
										if(isset($message)){ 
											echo "<h2>$message</h2>"; 
										} 
									?> 
									<div class="clearfix"></div>
								</div>
								<div class="filter-by-color">
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
								</div>
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
							 <h1>Brands</h1>
					  		 <div class="field">
				                 <select class="select1">
				                   <option>Please Select</option>
										<option>Lorem ipsum dolor sit amet</option>
										<option>Lorem ipsum dolor sit amet</option>
										<option>Lorem ipsum dolor sit amet</option>
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