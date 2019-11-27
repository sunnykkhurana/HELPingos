<?php include('header.php'); ?>
<?php
	if(!isset($_SESSION['admin'])){
		header('location: login.php');
			}
?>
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.php">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="tables.php">Tables</a>
				</li>
			</ul>
	<div class="row-fluid sortable">		
		<div class="box span12">
				<div class="box-header" data-original-title>
					<h2><i class="halflings-icon eye-open"></i><span class="break"></span>Admin</h2>
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
								<th>Reg ID</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Email</th>
								<th>Username</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php
							mysql_connect("localhost","root","");	
							mysql_select_db("helpingos");
							
							$sql= "SELECT * FROM helpingos_admin";
							$admin= mysql_query($sql);
								 while($adminh=mysql_fetch_assoc($admin)){
									echo "<tr>";
									echo "<td class='center'>".$adminh['regid']."</td>";
									echo "<td class='center'>".$adminh['firstname']."</td>";
									echo "<td class='center'>".$adminh['lastname']."</td>";
									echo "<td class='center'>".$adminh['email']."</td>";
									echo "<td class='center'>".$adminh['username']."</td>";
									echo "<td class='center'>";
									echo "<a class='btn btn-info' href='updateadmin.php?update=".$adminh['regid']."'>";
										echo "<i class='halflings-icon white edit'></i>";
									echo "</a>";
									echo "<a class='btn btn-danger' href='delete.php?del=".$adminh['regid']."'>";
									echo "<i class='halflings-icon white trash'></i>";
									echo "</a>";
								echo "</td>";
								 }
							?>
					  </tbody>
				</table>            
			</div>
		</div>
	</div>
	
	<div class="row-fluid sortable">		
		<div class="box span12">
				<div class="box-header" data-original-title>
					<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
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
								<th>User ID</th>
								<th>Full Name</th>
								<th>Email</th>
								<th>Gender</th>
								<th>Age Group</th>
								<th>Volunteer</th>
								<th>Donor</th>
								<th>Partner</th>
								<th>Contact No</th>
								<th>Actions</th>
							</tr>
						</thead>   
						<tbody>
						<?php
						
						$sql= "SELECT * FROM helpingos_member";
						$records= mysql_query($sql);
			
							
							while($joinus=mysql_fetch_assoc($records)){
								echo "<tr>";
								echo "<td class='center'>".$joinus['userid']."</td>";
								echo "<td class='center'>".$joinus['fname']."</td>";
								echo "<td class='center'>".$joinus['email']."</td>";
								echo "<td class='center'>".$joinus['gender']."</td>";
								echo "<td class='center'>".$joinus['agegroup']."</td>";
								echo "<td class='center'>".$joinus['volunteer']."</td>";
								echo "<td class='center'>".$joinus['donor']."</td>";
								echo "<td class='center'>".$joinus['partner']."</td>";
								echo "<td class='center'>".$joinus['contact_number']."</td>";
								echo "<td class='center'>";
									echo "<a class='btn btn-info' href='updateuser.php?update=".$joinus['userid']."'>";
									echo "<i class='halflings-icon white edit'></i>";
									echo "</a>";
									echo "<a class='btn btn-danger' href='delete.php?del=".$joinus['userid']."'>";
									echo "<i class='halflings-icon white trash'></i>";
									echo "</a>";
								echo "</td>";
								echo "</tr>";
								}	
						?>		
					  </tbody>
				</table>            
			</div>
		</div>
	</div>
	<div class="row-fluid sortable">		
		<div class="box span12">
				<div class="box-header" data-original-title>
					<h2><i class="halflings-icon shopping-cart"></i><span class="break"></span>Products</h2>
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
								<th>Product ID</th>
								<th>Product Category</th>
								<th>Product Name</th>
								<th>Product Code</th>
								<th>Product Gender</th>
								<th>Product Price</th>
								<th>Product Date</th>
								<th>Product Offer</th>
								<th>Product Image</th>
								<th>Actions</th>
							</tr>
						</thead>   
						<tbody>
							<?php
						
						$sql= "SELECT * FROM helpingos_product";
						$product= mysql_query($sql);
			
							
							while($producth=mysql_fetch_assoc($product)){
								echo "<tr>";
								echo "<td class='center'>".$producth['Pro_id']."</td>";
								echo "<td class='center'>".$producth['pro_category_id']."</td>";
								echo "<td class='center'>".$producth['pro_name']."</td>";
								echo "<td class='center'>".$producth['pro_code']."</td>";
								echo "<td class='center'>".$producth['pro_gender']."</td>";
								echo "<td class='center'>".$producth['pro_price']."</td>";
								echo "<td class='center'>".$producth['pro_date']."</td>";
								echo "<td class='center'>".$producth['pro_offer']."</td>";
								echo "<td class='center'>".$producth['pro_image']."</td>";
								echo "<td class='center'>";
									echo "<a class='btn btn-info' href='updateproduct.php?update=".$producth['Pro_id']."'>";
									echo "<i class='halflings-icon white edit'></i>";
									echo "</a>";
									echo "<a class='btn btn-danger' href='delete.php?del=".$producth['Pro_id']."'>";
									echo "<i class='halflings-icon white trash'></i>";
									echo "</a>";
								echo "</td>";
								echo "</tr>";
								}	
						?>		
					  </tbody>
				</table>            
			</div>
		</div>
	</div>
<?php include('footer.php'); ?>