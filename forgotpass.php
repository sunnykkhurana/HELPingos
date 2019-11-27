<?php include('header.php');?>
<div class="container">
	<div class="main">
		<div class="contact">				
			<div class="contact-form">
				<div>
					<h2>Contact Us</h2>
						<?php
							if(isset($_REQUEST['message'])){
								echo $_REQUEST['message'];
							}
						?>
				</div>
				<form method="post" action="sendmail.php">
					<div>
						<span><label>E-mail</label></span>
						<span><input name="email" type="text" class="textbox" required></span>
					</div>
					<div>
						<span><input type="submit" name="submit" class="" value="Get Password"></span>
					</div>
				</form>
			</div>
			<div class="clearfix"></div>		
		</div>
	</div>
</div>
<?php include('footer.php');?>