<?php include('header.php'); ?>
<?php
$name='';
$quant='';
$total='';
$price='';
?>
		<ul class="breadcrumb">
			<li>
				<i class="icon-home"></i>
				<a href="index.php">Home page</a>
				<i class="icon-angle-right"></i> 
			</li>
			<li>
				<i class="icon-home"></i>
				<a href="products.php">Products</a>
			</li>
			<li>
				<i class="icon-edit"></i>
				<a href="single.php">Single Product</a>
			</li>
		</ul>
		<div class="My-wish-section">
			<section id="wish">
				<div class="my-wish-content">
					<div class="pag-nav">
						<div class="row-fluid sortable">		
							<div class="box span12">
								<div class="box-header" data-original-title>
									<h2><i class="halflings-icon eye-open"></i><span class="break"></span>Check Out</h2>
									<div class="box-icon">
										<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
										<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
										<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
									</div>
								</div>
								<div class="box-content">
									<table class="table table-striped table-bordered bootstrap-datatable datatable">
										<thead>
											<tr>
												<th>Product Name</th>
												<th>Quantity</th>
												<th>Price Per Unit</th>
												<th>Total Price</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody>
											<?php
											mysql_connect("localhost","root","");	
											mysql_select_db("helpingos");
											
											$sql= "SELECT * FROM helpingos_cart";
											$cart= mysql_query($sql);

												while($cartdis=mysql_fetch_assoc($cart)){
													if($cartdis > 0){
													echo "<tr>";
														echo "<td class='center'>".$cartdis['cart_pro_name']."</td>";
														echo "<td class='center'>".$cartdis['cart_pro_quantity']."</td>";
														echo "<td class='center'>".$cartdis['cart_pro_price']."</td>";
														echo "<td class='center'>".$cartdis['cart_pro_total']."</td>";
														$name= $cartdis['cart_pro_name'];
														$quant= $cartdis['cart_pro_quantity'];
														$total= $cartdis['cart_pro_total'];
														$price= $cartdis['cart_pro_price'];
														echo "<td class='center'>";
														echo "<a class='btn btn-success' href='#'>";
															echo "<i class='halflings-icon white zoom-in'></i>"; 
														echo "</a>";
														echo "<a class='btn btn-info' href='#'>";
															echo "<i class='halflings-icon white edit'></i>";
														echo "</a>";
														echo "<a class='btn btn-danger' href='delete.php?del=".$cartdis['cart_id']."'>";
															echo "<i class='halflings-icon white trash'></i>";
														echo "</a>";
														echo "</td>";
													echo "</tr>";
													}
													else{
													echo "<div class='coats sing-c'>";
													echo 	"<h3 class='c-head'>Your Basket(0)</h3>";
													echo	"<p>You can find many interactive and good products from our website HELPingos</p>";
													echo	"<p>So Just visit & checkout our products<a href='products.php'>here</a> And Shop</p>";
													echo "</div>";
													
													}
												}
											?>
										</tbody>
									</table>            
								</div>
							</div>
						</div>
					</div>
					<div align="center">
						<?php
							
							if(isset($_REQUEST['errormessage'])){
								echo $_REQUEST['errormessage'];
								echo "<a href='account.php'><h4>Login here<h4></a>";
							}
						?>
					</div>
					<form action='order_manage.php' method='post'>
						<div align="center" class="contact-form">
							<span>
								<script async="async" src="https://www.paypalobjects.com/js/external/paypal-button.min.js?merchant=k991377@gmail.com" 
									data-button="buynow" 
									data-name= <?php echo $name; ?>
									data-quantity= <?php echo $quant; ?>
									data-amount= <?php echo $price; ?>
									data-currency="USD" 
									data-shipping="0.1" 
									data-tax="0.1"
									data-callback="http://localhost/HELPingos/order.php?total_amount=<?php echo $total; ?>" 
									data-return="http://localhost/HELPingos/order.php?total_amount=<?php echo $total; ?>"
									data-env="sandbox">
								</script>
							</span>
						</div>
					</form>
				</div>
			</section>
		</div>
			
<?php include('footer.php');?>