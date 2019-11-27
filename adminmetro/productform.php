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
					<a href="forms.php">Forms</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Insert New Category</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="category_insert.php">
							<fieldset>
								<div class="control-group">
								<label class="control-label" for="appendedInputButton">Category Name</label>
									<div class="controls">
										<div class="input-append">
											<input id="appendedInputButton" size="16" name="cat_ins" type="text">
											<button class="btn" type="submit" name="submit">INSERT</button>
										</div>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div><!--/span-->
			</div><!--/row-->
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Insert New Product</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" enctype="multipart/form-data" action="product_insert.php">
							<fieldset>
								<div class="control-group">
									<label class="control-label" for="selectError">Product Category</label>
									<div class="controls">
										<select id="selectError" name="pro_category" data-rel="chosen">
										<?php
											mysql_connect("localhost","root","");	
											mysql_select_db("helpingos");
											$sql= "SELECT * FROM helpingos_product_category";
											$records= mysql_query($sql);
											while($category=mysql_fetch_assoc($records)){
											echo "<option value=".$category['category_id'].">".$category['category_name']."</option>";
											}
										?>
										</select>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="focusedInput">Product Name</label>
									<div class="controls">
									  <input class="input-xlarge focused" id="focusedInput" name="pro_name" type="text" placeholder="Enter Prouct Name…" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="prependedInput">Product Code</label>
									<div class="controls">
										<div class="input-append">
											<span class="add-on">#</span><input id="prependedInput" name="pro_code" size="16" type="text" required>
										</div>
										<span class="help-inline">Format: "help_product-category_product-name_number"</span>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Gender Specification</label>
									<div class="controls">
										<label class="radio">
											<input type="radio" id="optionsRadios1" name="pro_gen" value="Male" checked="">
											For Male
										</label>
										<div style="clear:both"></div>
										<label class="radio">
											<input type="radio" id="optionsRadios2" name="pro_gen" value="Female">
											For Female
										</label>
										<label class="radio">
											<input type="radio" id="optionsRadios3" name="pro_gen" value="Both">
											For Both
										</label>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="prependedInput">Product Price</label>
									<div class="controls">
										<div class="input-append">
											<span class="add-on">Rs.</span><input id="prependedInput" name="pro_price" size="16" type="tel" pattern="[0-9]*" required>
										</div>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="date01">Date of Product Introducing</label>
									<div class="controls">
										<input type="text" class="input-xlarge datepicker" id="date01" name="pro_joindate" value="mm/dd/yy">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="appendedInput">Offers Applicable</label>
									<div class="controls">
									<div class="input-append">
										<input id="appendedInput" size="16" name="pro_offer" type="text"><span class="add-on">%</span>
									</div>
									</div>
								</div>
								<div class="control-group hidden-phone">
									<label class="control-label" for="textarea2">Product Description</label>
									<div class="controls"> 
										<textarea class="cleditor" id="textarea2" name="pro_desc" rows="3"></textarea>
									</div>
								</div>  
								<div class="control-group">
									<label class="control-label">Product Images</label>
									<div class="controls">
										<input type="file" name="pro_image" id="pro_image"  required>
									</div>
								</div>
								<div class="form-actions">
									<button type="submit" name="submit" class="btn btn-primary">Save changes</button>
									<button class="btn">Cancel</button>
								</div>
							</fieldset>
						</form>
					</div>
				</div><!--/span-->
			</div><!--/row-->

<?php include('footer.php'); ?>