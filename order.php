<?php include('header.php');?>

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
							<i class="halflings-icon eye-open"></i><span class="break"></span><h2><?php echo "Thank You for Shopping with Helpingos"; ?></h2>
							<div class="box-icon">
								<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
								<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
								<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
							</div>
						</div>
						
						<!--<div class="box-content">
							<table class="table table-striped table-bordered bootstrap-datatable datatable">
								<thead>
									<tr>
										<th>DAY OF ORDER</th>
										<th>USER NAME</th>
										<th>TOTAL PRICE</th>
										<th>ACTIONS</th>
									</tr>
								</thead>
								<tbody>
									<?php
									mysql_connect("localhost","root","");	
									mysql_select_db("helpingos");
									
									$sql= "SELECT * FROM helpingos_order";
									$cart= mysql_query($sql);
										
										while($cartdis=mysql_fetch_assoc($cart)){
											if($cartdis > 0){
											echo "<tr>";
												echo "<td class='center'>".$cartdis['date_of_order']."</td>";
												echo "<td class='center'>".$cartdis['user_id']."</td>";
												if(isset($_REQUEST['total_amount'])){
												echo "<td class='center'>".$_REQUEST['total_amount']."</td>";
												}
											echo "</tr>";
											}
										}		
									?>
								</tbody>
							</table>            
						</div>-->
					</div>
				</div>
			</div>
		</div>
		</section>
	</div>
		
<?php include('footer.php');?>