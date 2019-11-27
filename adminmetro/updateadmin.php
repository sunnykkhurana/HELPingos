<?php include('header.php'); ?>

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
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Update Admin</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="update.php">
							<fieldset>
							<?php
								if(isset($_REQUEST['update'])){
								
								$regid= $_REQUEST['update'];
								
								mysql_connect("localhost","root","");
										mysql_select_db("helpingos");
										
								$query="SELECT * FROM helpingos_admin where regid=".$regid;
								$retval=mysql_query($query);
								echo $retval;
								while($fetch=mysql_fetch_assoc($retval)){
							?>
							<input type='hidden' name='regid' value="<?php echo $fetch['regid']; ?>" />
							<div class="control-group">
								<label class="control-label" for="focusedInput">First Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" name="fname" type="text" value="<?php echo $fetch['firstname']; ?>" required>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="focusedInput">Last Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" name="lname" type="text" value="<?php echo $fetch['lastname']; ?>" required>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="focusedInput">Email ID</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" name="email" type="email" value="<?php echo $fetch['email']; ?>" required>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="prependedInput">User Name</label>
								<div class="controls">
								  <div class="input-prepend">
									<span class="add-on">@</span></span><input id="prependedInput" name="aname" size="16" value="<?php echo $fetch['username']; ?>" type="text" required>
								  </div>
								  <p class="help-block">This will be your display name..</p>
								</div>
							</div>
							<div class="form-actions">
								<button type="submit" name="update1" class="btn btn-primary">Update & Save changes</button>
								<button class="btn">Cancel</button>
							</div>
							</fieldset>
						</form>
						<?php
								}
							}
						?>
					</div>
				</div><!--/span-->
			</div><!--/row-->

<?php include('footer.php'); ?>