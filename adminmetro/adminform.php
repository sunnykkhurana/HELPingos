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
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Insert New Admin</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="admin_insert.php">
							<fieldset>
							<div class="control-group">
								<label class="control-label" for="focusedInput">First Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" name="fname" type="text" placeholder="Enter First Name…"  required>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="focusedInput">Last Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" name="lname" type="text" placeholder="Enter Last Name…"  required>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="focusedInput">Email ID</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" name="email" type="email" placeholder="Enter Email ID…"  required>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="prependedInput">User Name</label>
								<div class="controls">
								  <div class="input-prepend">
									<span class="add-on">@</span></span><input id="prependedInput" name="aname" size="16" type="text"  required>
								  </div>
								  <p class="help-block">This will be your display name..</p>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="prependedInput">Password</label>
								<div class="controls">
								  <div class="input-prepend">
									<span class="add-on">*</span></span><input id="prependedInput" name="apass" size="16" type="password"  required>
								  </div>
								  <p class="help-block">Please use alphanumeric values..</p>
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