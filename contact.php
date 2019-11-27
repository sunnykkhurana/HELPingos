<?php include('header.php');?>
<div class="container">
	<div class="main">
		<div class="contact">				
			<div class="contact_info">
				<h2>Get in touch</h2>
					<div class="map">
						<iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.1811000476528!2d72.77861!3d21.145189999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be05274e362b3e3%3A0x672dfe4f512e4d87!2sSDJ+International+College!5e0!3m2!1sen!2sin!4v1430415105143"></iframe>
						<!--<iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.3661714989908!2d72.80872300000001!3d21.17760800000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e746083caa5%3A0xaae6fb4cb31ad325!2sEastern+Techno+Solution!5e0!3m2!1sen!2sin!4v1430203169786"></iframe>-->
						<br><small>
						<a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.1811000476528!2d72.77861!3d21.145189999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be05274e362b3e3%3A0x672dfe4f512e4d87!2sSDJ+International+College!5e0!3m2!1sen!2sin!4v1430415105143" style="color:#777777;text-align:left;font-size:13px;font-family: 'Source Sans Pro', sans-serif;">View Larger Map</a></small>
					</div>
			</div>
			<div class="contact-form">
				<div>
					<h2>Contact Us</h2>
						<?php
							if(isset($_REQUEST['message'])){
								echo $_REQUEST['message'];
							}
						?>
				</div>
				<form method="post" action="contact_insert.php">
					<div>
						<span><label>Name</label></span>
						<span><input name="userName" type="text" class="textbox" required></span>
					</div>
					<div>
						<span><label>E-mail</label></span>
						<span><input name="userEmail" type="text" class="textbox" required></span>
					</div>
					<div>
						<span><label>Mobile</label></span>
						<span><input name="userPhone" type="text" pattern="[0-9]*" class="textbox" maxlength="10" required></span>
					</div>
					<div>
						<span><label>Subject</label></span>
						<span><textarea name="userMsg" required> </textarea></span>
					</div>
					<div>
						<span><input type="submit" name="submit" class="" value="Submit us"></span>
					</div>
				</form>
			</div>
			<div class="clearfix"></div>		
		</div>
	</div>
</div>
<?php include('footer.php');?>