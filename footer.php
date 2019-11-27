
  </div>
   <!-- content-section-ends -->	
   <!-- contact-section-starts -->
	<div class="content-section">
		<div class="container">
			<div class="col-md-3 about-us">
				<h4>LITTLE ABOUT US</h4>
				<p><span>HELPingos</span> is an NGO formed in march,2015 by <span>three</span> college students.
				Recently also introduced unique <span>Store</span> where you can purchase products and contribute towards society.</p>
				<h4>FOLLOW US</h4>
				<div class="social-icons">
					<a href='https://www.facebook.com/'><i class="facebook"></i></a>
					<a href='https://twitter.com/?lang=en'><i class="twitter"></i></a>
					<a href='https://www.rss.com/'><i class="rss"></i></a>
					<a href='https://vimeo.com/'><i class="vimeo"></i></a>
					<a href='http://blog.dribbble.com/'><i class="dribble"></i></a>
					<a href='http://www.msn.com/en-in/'><i class="msn"></i></a>
				</div>
			</div>
			<div class="col-md-3 archives">
				<h4>RECENT ACTIVITIES</h4>
				<ul>
					<li><a href="news.php">March 2015</a></li>
					<li><a href="news.php">February 2015</a></li>
					<li><a href="news.php">January 2015</a></li>
					<li><a href="news.php">December 2014</a></li>
				</ul>
			</div>
			<div class="col-md-3 contact-us">
				<h4>CONTACT US</h4>
				<ul>
					<li><i class="message"></i></li>
					<li><a href="contact.php">info@HELPingos.com</a></li>
				</ul>
				<ul>
					<li><i class="land-phone"></i></li>
					<li>0261 777-888</li>
				</ul>
				<ul>
					<li><i class="smart-phone"></i></li>
					<li>+918866172274</li>
				</ul>
			</div>
			<div class="col-md-3 about-us">
				<h4>SIGN FOR UPDATES</h4>
				<input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required>
				<input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required>
				<input type="submit" value="subscribe">
			</div>	
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- contact-section-ends -->
	<!-- footer-section-starts -->
	<div class="footer">
		<div class="container">
			<div class="col-md-6 bottom-menu">
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="news.php">NEWS</a></li>
					<li><a href="products.php?cat_id=2">PRODUCTS</a></li>
					<li><a href="gallery.php">GALLERY</a></li>
					<li><a href="contact.php"> CONTACT</a></li>
				</ul>
			</div>
			<div class="col-md-6 copy-rights">
				<p>&copy; 2015 Template by <a href="http://helpingos.org" target="target_blank">HELPingos</a></p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- footer-section-ends -->
</body>
</html>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- JavaScript includes -->
		<script src="js/ipresenter.packed.js"></script>
		<script>
			$(document).ready(function(){
				$('#ipresenter').iPresenter({
					timerPadding: -1,
					controlNav: true,
					controlNavThumbs: true,
					controlNavNextPrev: false
				});
			});
		</script>
	    <script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
		<!--script-nav-->
		<script>
			$("span.menu").click(function(){
			$(".top-menu ul").slideToggle("slow" , function(){
				});
			});
		</script>
		<!--script-nav-->
		<script type="text/javascript">
		var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-32024393-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
		<script src="js/jquery.etalage.min.js"></script>
		<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 800,
					source_image_height: 1000,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});
			});
		</script>
		<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true,   // 100% fit in a container
					closed: 'accordion', // Start closed if in accordion view
					activate: function(event) { // Callback function if tab is switched
						var $tab = $(this);
						var $info = $('#tabInfo');
						var $name = $('span', $info);
						$name.text($tab.text());
						$info.show();
					}
				});

				$('#verticalTab').easyResponsiveTabs({
					type: 'vertical',
					width: 'auto',
					fit: true
				});
			});
		</script>