
<!DOCTYPE html>
<html>
<head>
	<title>HELPingos</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<!-- Custom Theme files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/component.css" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--webfont-->
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,300,700' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css' />
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
</head>
<body>	
		<div class="header">
			<div class="header-top">
				<div class="container">
					<div class="logo">
						<a href="index.php"><img src="images/logo1.png" alt="" /></a>
					</div>
					<div class="top-menu">
						<span class="menu"> </span>
						<ul class="cl-effect-15">
							<li><a class="active" href="index.php" data-hover="HOME">HOME</a></li>
							<li><a href="news.php" data-hover="NEWS">NEWS</a></li>
							<li><a href="products.php?cat_id=2">PRODUCTS</a></li>
							<li><a href="gallery.php" data-hover="GALLERY">GALLERY</a></li>
							<li><a href="contact.php" data-hover="CONTACT">CONTACT</a></li>
						</ul>
					</div>
					<!--script-nav-->
					<script>
					$("span.menu").click(function(){
					$(".top-menu ul").slideToggle("slow" , function(){
					});
					});
					</script>
					<!--script-nav-->
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
<!-- header-section-ends -->
<!-- content-section-starts -->
	<div class="container" align='center'>
		<script type="text/javascript" src="js/jssor.js"></script>
		<script type="text/javascript" src="js/jssor.slider.js"></script>
		<script>

			jQuery(document).ready(function ($) {

				var nestedSliders = [];

				$.each(["sliderh1_container", "sliderh2_container", "sliderh3_container"], function (index, containerId) {
					var nestedSliderOptions = {
						$PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1
						$SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
						$MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
						//$SlideWidth: 200,                                   //[Optional] Width of every slide in pixels, default value is width of 'slides' container
						//$SlideHeight: 150,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
						$SlideSpacing: 3, 					                //[Optional] Space between each slide in pixels, default value is 0
						$DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
						$ParkingPosition: 0,                              //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
						$UISearchMode: 0,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).

						$BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
							$Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
							$ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
							$AutoCenter: 0,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
							$Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
							$Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
							$SpacingX: 10,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
							$SpacingY: 0,                                   //[Optional] Vertical space between each item in pixel, default value is 0
							$Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
						}
					};

					nestedSliders.push(new $JssorSlider$(containerId, nestedSliderOptions));
				});

				var options = {
					$AutoPlay: false,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
					$AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
					$AutoPlayInterval: 2000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
					$PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

					$ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
					$SlideDuration: 300,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
					$MinDragOffsetToSlide: 80,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
					//$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
					//$SlideHeight: 150,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
					$SlideSpacing: 3, 					                //[Optional] Space between each slide in pixels, default value is 0
					$DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
					$ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
					$UISearchMode: 0,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
					$PlayOrientation: 2,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
					$DragOrientation: 0,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0),
					
					$ThumbnailNavigatorOptions: {
						$Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
						$ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

						$ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
						$AutoCenter: 3,                                 //[Optional] Auto center thumbnail items in the thumbnail navigator container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 3
						$Lanes: 1,                                      //[Optional] Specify lanes to arrange thumbnails, default value is 1
						$SpacingX: 0,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
						$SpacingY: 0,                                   //[Optional] Vertical space between each thumbnail in pixel, default value is 0
						$DisplayPieces: 3,                              //[Optional] Number of pieces to display, default value is 1
						$ParkingPosition: 0,                          //[Optional] The offset position to park thumbnail
						$Orientation: 1,                                //[Optional] Orientation to arrange thumbnails, 1 horizental, 2 vertical, default value is 1
						$DisableDrag: false                            //[Optional] Disable drag or not, default value is false
					}
				};

				var jssor_slider1 = new $JssorSlider$("slider1_container", options);

				function OnMainSliderPark(currentIndex, fromIndex) {
					$.each(nestedSliders, function (index, nestedSlider) {
						nestedSlider.$Pause();
					});

					setTimeout(function () {
						nestedSliders[currentIndex].$Play();
					}, 2000);
				}

				jssor_slider1.$On($JssorSlider$.$EVT_PARK, OnMainSliderPark);
				OnMainSliderPark(0, 0);

				//responsive code begin
				//you can remove responsive code if you don't want the slider scales while window resizes
				function ScaleSlider() {
					var bodyWidth = document.body.clientWidth;
					if (bodyWidth)
						jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 600));
					else
						window.setTimeout(ScaleSlider, 30);
				}
				ScaleSlider();

				$(window).bind("load", ScaleSlider);
				$(window).bind("resize", ScaleSlider);
				$(window).bind("orientationchange", ScaleSlider);
				//responsive code end
			});
		</script>
		<!-- sliderh style begin -->
		<style>
			/* jssor slider bullet navigator skin 03 css */
			/*
			.jssorb03 div           (normal)
			.jssorb03 div:hover     (normal mouseover)
			.jssorb03 .av           (active)
			.jssorb03 .av:hover     (active mouseover)
			.jssorb03 .dn           (mousedown)
			*/
			.jssorb03 div, .jssorb03 div:hover, .jssorb03 .av
			{
				background: url(../img/b03.png) no-repeat;
				overflow:hidden;
				cursor: pointer;
			}
			.jssorb03 div { background-position: -5px -4px; }
			.jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
			.jssorb03 .av { background-position: -65px -4px; }
			.jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }
		</style>
		<!-- sliderh style end -->
		<!-- Jssor Slider Begin -->
		<!-- You can move inline styles to css file or css block. -->
		<div id="slider1_container" style="position: relative; top: 5px; left: 0px; width: 600px; height: 400px; overflow: hidden; ">

			<!-- Loading Screen -->
			<div u="loading" style="position: absolute; top: 0px; left: 0px;">
				<div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
					background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
				</div>
				<div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
					top: 0px; left: 0px;width: 100%;height:100%;">
				</div>
			</div>

			<!-- Slides Container -->
			<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;
				overflow: hidden;">
				<div>
					<div id="sliderh1_container" class="sliderh1" style="position: relative; top: 0px; left: 0px; width: 600px;
						height: 300px;">

						<!-- Slides Container -->
						<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;
							overflow: hidden;">
							<div><img u="image" src="images/poorchild1.jpg" /></div>
							<div><img u="image" src="images/poorchild2.jpg" /></div>
							<div><img u="image" src="images/poorchild3.jpg" /></div>
							<div><img u="image" src="images/poorchild4.jpg" /></div>
							<div><img u="image" src="images/poorchild5.jpg" /></div>
							<div><img u="image" src="images/poorchild6.jpg" /></div>
							<div><img u="image" src="images/poorchild7.jpg" /></div>
						</div>
						<!-- Bullet Navigator Skin Begin -->
						<!-- bullet navigator container -->
						<div u="navigator" class="jssorb03" style="position: absolute; bottom: 10px; right: 10px;">
							<!-- bullet navigator item prototype -->
							<div u="prototype" style="position: absolute; width: 21px; height: 21px; text-align:center; line-height:21px; color:white; font-size:12px;"><div u="numbertemplate"></div></div>
						</div>
						<!-- Bullet Navigator Skin End -->
					</div>
					<div u="thumb">
						<img src="images/poorchild1.jpg" />
						<div class="title_back"></div>
						<div class="title">
							Poor Children
						</div>
					</div>
				</div>
				<div>
					<div id="sliderh2_container" class="sliderh2" style="position: relative; top: 0px; left: 0px; width: 600px;
						height: 300px;">

						<!-- Slides Container -->
						<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;
							overflow: hidden;">
							<div><img u="image" src="images/old1.jpg" /></div>
							<div><img u="image" src="images/old2.jpg" /></div>
							<div><img u="image" src="images/old3.jpg" /></div>
							<div><img u="image" src="images/old4.jpg" /></div>
							<div><img u="image" src="images/old5.jpg" /></div>
							<div><img u="image" src="images/old6.jpg" /></div>
							<div><img u="image" src="images/old7.jpg" /></div>
							<div><img u="image" src="images/old8.jpg" /></div>
						</div>
						<!-- Bullet Navigator Skin Begin -->
						<!-- bullet navigator container -->
						<div u="navigator" class="jssorb03" style="position: absolute; bottom: 10px; right: 10px;">
							<!-- bullet navigator item prototype -->
							<div u="prototype" style="position: absolute; width: 21px; height: 21px; text-align:center; line-height:21px; color:white; font-size:12px;"><div u="numbertemplate"></div></div>
						</div>
						<!-- Bullet Navigator Skin End -->
					</div>
					<div u="thumb">
						<img src="images/old1.jpg" />
						<div class="title_back"></div>
						<div class="title">
							Old People
						</div>
					</div>
				</div>
				<div>
					<div id="sliderh3_container" class="sliderh3" style="position: relative; top: 0px; left: 0px; width: 600px;
						height: 300px;">

						<!-- Slides Container -->
						<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;
							overflow: hidden;">
							<div><img u="image" src="images/needy1.jpg" /></div>
							<div><img u="image" src="images/needy2.jpg" /></div>
							<div><img u="image" src="images/needy3.jpg" /></div>
							<div><img u="image" src="images/needy4.jpg" /></div>
							<div><img u="image" src="images/needy5.png" /></div>
							<div><img u="image" src="images/needy6.jpg" /></div>
							<div><img u="image" src="images/needy7.jpg" /></div>
							<div><img u="image" src="images/needy8.jpg" /></div>
							<div><img u="image" src="images/needy3.jpg" /></div>
						</div>
						<!-- Bullet Navigator Skin Begin -->
						<!-- bullet navigator container -->
						<div u="navigator" class="jssorb03" style="position: absolute; bottom: 10px; right: 10px;">
							<!-- bullet navigator item prototype -->
							<div u="prototype" style="position: absolute; width: 21px; height: 21px; text-align:center; line-height:21px; color:white; font-size:12px;"><div u="numbertemplate"></div></div>
						</div>
						<!-- Bullet Navigator Skin End -->
					</div>
					<div u="thumb">
						<img src="images/needy1.jpg" />
						<div class="title_back"></div>
						<div class="title">
							Needy People
						</div>
					</div>
				</div>
			</div>
			<!-- ThumbnailNavigator Skin Begin -->
			<div u="thumbnavigator" class="jssort12" style="cursor: default; position: absolute; width: 600px; height: 100px; left:0px; bottom: 0px;">

				<!-- Thumbnail Item Skin Begin -->
				<style>
					/* jssor slider thumbnail Navigator Skin 12 css */
					/*
					.jssort12 .p            (normal)
					.jssort12 .p:hover      (normal mouseover)
					.jssort12 .pav          (active)
					.jssort12 .pav:hover    (active mouseover)
					.jssort12 .pdn          (mousedown)
					*/
					.jssort12 .p img {
						FILTER: alpha(opacity=55);
						opacity: .55;
						transition: opacity .6s;
						-moz-transition: opacity .6s;
						-webkit-transition: opacity .6s;
						-o-transition: opacity .6s;
					}

					.jssort12 .pav img, .jssort12 .pav:hover img, .jssort12 .p:hover img {
						FILTER: alpha(opacity=100);
						opacity: 1;
						transition: none;
						-moz-transition: none;
						-webkit-transition: none;
						-o-transition: none;
					}

					.jssort12 .pav:hover img, .jssort12 .p:hover img {
						FILTER: alpha(opacity=70);
						opacity: .7;
					}

					.jssort12 .title, .jssort12 .title_back {
						position: absolute;
						top: 70px;
						left: 0px;
						width: 200px;
						height: 30px;
						line-height: 30px;
						text-align: center;
						color: #000;
						font-size: 20px;
					}

					.jssort12 .title_back {
						background-color: #fff;
						filter: alpha(opacity=50);
						opacity: .5;
					}

					.jssort12 .pav:hover .title_back, .jssort12 .p:hover .title_back {
						filter: alpha(opacity=40);
						opacity: .4;
					}

					.jssort12 .pav .title_back {
						background-color: #000;
						filter: alpha(opacity=50);
						opacity: .5;
					}

					.jssort12 .pav .title {
						color: #fff;
					}
				</style>
				<div u="slides" style="cursor: move;">
					<div u="prototype" class=p style="POSITION: absolute; WIDTH: 200px; HEIGHT: 100px; TOP: 0; LEFT: 0;">
						<div u="thumbnailtemplate" style="WIDTH: 200px; HEIGHT: 100px; border: none; position: absolute; TOP: 10; LEFT: 0; "></div>
					</div>
				</div>
				<!-- Thumbnail Item Skin End -->
			</div>
			<!-- ThumbnailNavigator Skin End -->

			<a style="display: none" href="http://www.jssor.com">jQuery Slider</a>
		</div>
			<div class="clearfix"></div>
	</div>
<?php include('footer.php');?>