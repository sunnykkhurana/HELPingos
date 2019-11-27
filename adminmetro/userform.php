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
				<div class="control-group">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Insert New Member</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="user_insert.php">
							<fieldset>
								<div class="control-group">
									<label class="control-label" for="focusedInput">Full Name</label>
									<div class="controls">
									  <input class="input-xlarge focused" id="focusedInput" name="mem_name" type="text" placeholder="Enter Full Name…" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="focusedInput">Email ID</label>
									<div class="controls">
									  <input class="input-xlarge focused" id="focusedInput" name="mem_email" type="email" placeholder="Enter Email ID…" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="focusedInput">Password</label>
									<div class="controls">
									  <input class="input-xlarge focused" id="focusedInput" name="mem_password" type="password" placeholder="Enter password…" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Gender</label>
									<div class="controls">
									  <label class="radio">
										<input type="radio" id="optionsRadios1" name="mem_gender" value="Male" checked="">
										Male
									  </label>
									  <div style="clear:both"></div>
									  <label class="radio">
										<input type="radio" id="optionsRadios2" name="mem_gender" value="Female">
										Female
									  </label>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="selectError">Age Group</label>
									<div class="controls">
										<select id="selectError" name="mem_agegroup" data-rel="chosen">
											<option>Below 15</option>
											<option>15-30</option>
											<option>30-45</option>
											<option>45-60</option>
											<option>Above 60</option>
										</select>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Join As</label>
									<div class="controls">
									  <label class="checkbox">
										<input type="checkbox" id="optionsCheck1" name="v" value="Volunteer" checked="">
										Volunteer
									  </label>
									  <div style="clear:both"></div>
									  <label class="checkbox">
										<input type="checkbox" id="optionsCheck2" name="p" value="Partner">
										Partner
									  </label>
									  <label class="checkbox">
										<input type="checkbox" id="optionsCheck2" name="d" value="Donor">
										Donor
									  </label>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="prependedInput">Contact No.</label>
									<div class="controls">
										<div class="input-append">
											<span class="add-on">+91</span><input type="tel" pattern="[0-9]*" id="prependedInput" name="mem_phone" required/>
										</div>
										<span class="help-inline">Enter 10 digit mobile number..</span>
									</div>
								</div>
								<div class="control-group">
								  <label class="control-label" for="date01">Date Of Joining</label>
								  <div class="controls">
									<input type="text" class="input-xlarge datepicker" id="date01" name="mem_joindate" placeholder="mm/dd/yy" required/>
								  </div>
								</div>
								<div class="control-group hidden-phone">
									<label class="control-label" for="textarea2">Address</label>
									<div class="controls">
										<textarea class="cleditor" id="textarea2" name="mem_address" rows="3" required></textarea>
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
			</div>
		</div><!--/row-->

<?php include('footer.php'); ?>