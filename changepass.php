
<?php include('header.php');?>
	<div class="container">
		<div class="registration">
			<div class="registration_left">
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
					<form method="post" name="webform" enctype='multipart/form-data' id="form" class="formular" action="changepasscheck.php">
						<?php
							if(isset($_REQUEST['vividh'])) {
								$erroris= $_REQUEST['vividh'];
								echo "<h3><font color='black'>".$erroris."</font></h3>";
							}
						?>
						<br/><label>Old password:</label>
						<input type="password" name="cur_pwd" id="cur_pwd" required/><br/><br/>
						<label>New password:</label>
						<input type="password" name="password" id="password" required/><br/><br/>
						<label>Confirm password:</label>
						<input type="password" name="confirm_pwd" id="confirm_pwd" required/> <br/><br/>
						<p align="center">
						<input name="submit" class="submit" type="submit" value="Save Password" />
						</p>
					</form>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
<?php include('footer.php');?>