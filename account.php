<?php include('header.php');?>
	<div class="container">
		<div class="registration">
			<div class="registration_left">
				<h2>new user? <span> create An account </span></h2>
				<!-- [if IE] 
					< link rel='stylesheet' type='text/css' href='ie.css'/>  
				 [endif] -->  
				  
				<!-- [if lt IE 7]>  
					< link rel='stylesheet' type='text/css' href='ie6.css'/>  
				<! [endif] -->  
				<script>
					(function() {
				
					// Create input element for testing
					var inputs = document.createElement('input');
					
					// Create the supports object
					var supports = {};
					
					supports.autofocus   = 'autofocus' in inputs;
					supports.required    = 'required' in inputs;
					supports.placeholder = 'placeholder' in inputs;
				
					// Fallback for autofocus attribute
					if(!supports.autofocus) {
						
					}
					
					// Fallback for required attribute
					if(!supports.required) {
						
					}
				
					// Fallback for placeholder attribute
					if(!supports.placeholder) {
						
					}
					
					// Change text inside send button on submit
					var send = document.getElementById('register-submit');
					if(send) {
						send.onclick = function () {
							this.innerHTML = '...Sending';
						}
					}
				
				})();
				</script>
				<div class="registration_form">
				 <!-- Form -->
					<form id="registration_form" action="member_insert.php" method="post">
						<div>
							<label>
								<input placeholder="full name:" type="text" name="mem_name" required autofocus>
							</label>
						</div>
						<div>
							<label>
								<input placeholder="email address:" type="email" name="mem_email" required>
							</label>
						</div>
						<div class="sky-form">
							<label class="dropdownbox" for="selectError">Age Group</label>
							<div class="dropdown">
								<select id="selectError" name="mem_agegroup" data-rel="chosen">
									<option>Below 15</option>
									<option>15-30</option>
									<option>30-45</option>
									<option>45-60</option>
									<option>Above 60</option>
								</select>
							</div>
						</div>
						<div class="sky-form">
							<div class="sky_form1">
								<ul>
									<li><label class="radio left"><input type="radio" name="mem_gender" value="male" checked=""><i></i>Male</label></li>
									<li><label class="radio"><input type="radio" name="mem_gender" value="female"><i></i>Female</label></li>
									<div class="clearfix"></div>
								</ul>
							</div>
						</div>
						<div class="sky-form">
							<div class="sky_form1">
								<ul>
									<li><label class="checkbox left"><input type="checkbox" name="volunteer" value="volunteer"checked=""><i></i>Volunteer</label></li>
									<li><label class="checkbox"><input type="checkbox" name="partner" value="partner"><i></i>Partner</label></li>
									<li><label class="checkbox"><input type="checkbox" name="donor" value="donor" ><i></i>Donor</label></li>
									<div class="clearfix"></div>
								</ul>
							</div>
						</div>
						<div>
							<label>
								<input placeholder="Contact number" name="mem_phone" type="tel" pattern="[0-9]*" maxlength="10" required autofocus>
							</label>
						</div>
						<div>
							<label>
								<input placeholder="password" type="password" name="mem_password" required>
							</label>
						</div>						
						<div>
							<label>
								<input placeholder="retype password" type="password" name="mem_password1" required>
							</label>
						</div>
						
						<div>
							<input type="submit" value="create an account" id="register-submit">
						</div>
						<div class="sky-form">
							<label class="checkbox"><input type="checkbox" name="checkbox" required><i></i>I agree to Helpingos.org &nbsp;<a class="terms" href="#"> terms of service</a></label>
						</div>
					</form>
						<!-- /Form -->
				</div>
			</div>
			<div class="registration_left">
				<h2>Existing User</h2>
				<div class="registration_form">
				 <!-- Form -->
					<form id="registration_form" action="member_login_check.php" method="post">
						<div>
							<label>
								<input placeholder="email" type="email" name="email" required>
							</label>
						</div>
						<div>
							<label>
								<input placeholder="password" type="password" name="password" required>
							</label>
						</div>
						<?php
							if(isset($_REQUEST['errormessage'])){
								echo $_REQUEST['errormessage'];
							}
						?>
						<?php
							if(isset($_REQUEST['inform'])){
								echo $_REQUEST['inform'];
							}
						?>
						<div>
							<input type="submit" name="submit" value="sign in" id="register-submit">
						</div>
						<div class="forget">
							<a href="forgotpass.php">forgot your password</a>
						</div>
					</form>
				<!-- /Form -->
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<?php include('footer.php');?>