<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
	<title>About us</title>
</head>

<body class="stretched">
	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header full-header dark" data-sticky-class="not-dark">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
					<nav id="primary-menu2" class="dark">

						<ul>
							<li><div>One Purified Water</div></li>	
													
						</ul>

					</nav>
					
					<!-- Logo
					============================================= -->
					<div id="logo" style="margin: 0 auto; width: 20.5%;">
						<a href="{{route ('index')}}" style=" margin: 0 auto;float: right;"  class="standard-logo" data-dark-logo="images/one logo white.png"><img src="images/one logo white.png" alt="One-water Logo"></a>
						<a href="{{route ('index')}}" style="margin: 0 auto;float: right;" class="retina-logo" data-dark-logo="images/one logo white.png"><img src="images/one logo white.png" alt="One-water Logo"></a>
					</div><!-- #logo end -->
					<nav id="primary-menu"  class="dark">
						<ul>	
							<li class="current"><a href="{{route ('about')}}"><div>About</div></a></li>	
							<li><a href="{{route ('product')}}"><div>Products</div></a></li>
							<li ><a href="{{route ('news')}}"><div>News</div></a></li>									
						</ul>
					</nav><!-- #primary-menu end -->
				</div>
			</div>
		</header><!-- #header end --> 
		<section id="slider" class="swiper_wrapper3 full-screen clearfix" style="height:450px;">
			<div class="swiper-container swiper-parent">
				<div class="swiper-wrapper">
					<div class="swiper-slide dark" style="background-image: url('images/about land.jpg');">
						
					</div>
					
				</div>
				<div class="video-overlay" style="background-color: rgba(0,0,0,0.30);"></div>

			</div>
			<div class="kl-bottommask kl-bottommask--maskabt" style="background-size: 1349px 174px; height: 174px;">
				<img src="images/Path 62.svg	" alt="">
				

			</div>

			<script>
				jQuery(document).ready(function($){
					var swiperSlider = new Swiper('.swiper-parent',{
						paginationClickable: false,
						slidesPerView: 1,
						grabCursor: true,
						loop: true,
				
						onSlideChangeStart: function(swiper){
							$('[data-caption-animate]').each(function(){
								var $toAnimateElement = $(this);
								var elementAnimation = $toAnimateElement.attr('data-caption-animate');
								$toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
							});
							SEMICOLON.slider.swiperSliderMenu();
						},
						onSlideChangeEnd: function(swiper){
							$('#slider').find('.swiper-slide').each(function(){
								if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }
								if($(this).find('.yt-bg-player').length > 0) { $(this).find('.yt-bg-player').pauseYTP(); }
							});
							$('#slider').find('.sw iper-slide:not(".swiper-slide-active")').each(function(){
								if($(this).find('video').length > 0) {
									if($(this).find('video').get(0).currentTime != 0 ) $(this).find('video').get(0).currentTime = 0;
								}
								if($(this).find('.yt-bg-player').length > 0) {
									$(this).find('.yt-bg-player').getPlayer().seekTo( $(this).find('.yt-bg-player').attr('data-start') );
								}
							});
							if( $('#slider').find('.swiper-slide.swiper-slide-active').find('video').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('video').get(0).play(); }
							if( $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').playYTP(); }

							$('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function(){
								var $toAnimateElement = $(this);
								var toAnimateDelay = $(this).attr('data-caption-delay');
								var toAnimateDelayTime = 0;
								if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 300; } else { toAnimateDelayTime = 300; }
								if( !$toAnimateElement.hasClass('animated') ) {
									$toAnimateElement.addClass('not-animated');
									var elementAnimation = $toAnimateElement.attr('data-caption-animate');
									setTimeout(function() {
										$toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
									}, toAnimateDelayTime);
								}
							});
						}
					});

				
				});
			</script>
		</section>
		<section id="content">
			<div class="content-wrap"  style="padding: 0px 0;">
				<section style=" display: block; padding-top: 100px;
				padding-bottom: 250px;">
					<div class="container clearfix">
						<div class="onec-25" style="margin-left:5%;">
							<div class="one-product2">
								<div class="box">
									 <h2 class="desc">Our<br>story</h2>
									<div class="circle2"></div>
									<img src="images/onepro.png" class="product2" alt="">
								</div> 
							</div>
						</div>
					<div class="onec-50" style="margin-left:5%;">
						<h1 class="abouttxt">
							Mogle Bottled water manufacturing is one of the major business units of Abbahawa Trading PLC. In efforts of diversifying its businesses, Abbahawa Trading PLC has broadened its scope from the import and export business, and set its sights on the manufacturing sector, engaging in purified and bottled water manufacturing under the name “Mogle Bottled Water Manufacturing” with a product brand name One Water. <br><br>
							One Water is currently among the well-recognized brands in the market, offering the various sizes of its premium water for about 6 years.
						</h1>
						</div>		
					</div>
				</section>
				<section style=" display: block; padding-top: 122px;    z-index: 0;
				display: block;
				position: relative;
						padding-bottom: 100px; background: #efefef;">
						<div class="kl-bottommask kl-bottommask--mask2">
							<img src="images/Path 21.svg" alt="">							
						</div>
							<div class="container clearfix">
								
								
								<div class="onec-25" style="margin-right: 5%;margin-left: 5%;">
									<h1 class="abouttxt">
										The water bottling plant was established with the initial investment cost which was upwards of 2.3 Billion Birr.  This initial capital went towards the construction of the bottling factory, modern manufacturing of preform, cap and poly sheet factory, acquisition of machinery and delivery trucks, as well as working capital. This created jobs for more than 1000 individuals. 

					</h1>
									</div>
								<div class="onec-25" style="margin-left:10%;">
									<div class="one-product3">
										<div class="box">
											 <h2 class="desc">Our<br>culture</h2>
											<div class="circle3"></div>
											<!-- <img src="images/product-4.png" class="product2" alt=""> -->
										</div> 
									</div>
								</div>
									
							</div> 			
				</section>
				<section >
					<!-- style="height: 495px !important;" -->
						<div class="section parallax full-screen nomargin noborder para-height para-style" data-stellar-background-ratio="0.4">
							<div class="container clearfix">
								<div class="onec-25" style="margin-left: 2%;margin-top: 8%;">
									<div class="one-product4">
										<div class="box">
											 <h2 class="desc" style="width: 100%">Our<br>factory</h2>
											<div class="circle4"></div>
											<!-- <img src="images/product-4.png" class="product2" alt=""> -->
										</div> 
									</div>
								</div>
								<div class="onec-50 wabt">
									<h1 class="abouttxt" style="color: white;">
										The factory is located in the heart of Sebeta, South west of Addis Ababa. It rests on a vast 75,000 m2 plot of land with built up area of 35,000 m2 (which has 6 production lines), having the capacity to manufacture 120,000 Bottles Per Hour (BPH). In addition, there is the 5-gallon Jar production machine, a uniquely modern fully automatic non-returnable one-way production line with the capacity of 1,100 jar per hour.<br><br>
The distribution of products is supported by the more than 100 delivery SINO, ISUZU FSR, ISUZU NPR (Van) and 30 Manitou (France) Electrical forklifts, a fleet dedicated to dispatch at all corners of the nation.<br><br>
There are 5 lines of Preform Manufacturing Machineries with 312 Cavities; and 3 lines of Cap (Closure) manufacturing machineries with 96 cavities, resting on 30,000 m2 plot of land with built up area 17,000 m2. In addition, the Jar preforms are manufactured with the 2 lines at a capacity of 48 cavity along with the jar cap production machine at a capacity of 24 cavity.<br><br>
The distribution of products is supported by the more than 100 delivery SINO, ISUZU FSR, ISUZU NPR (Van) and 30 Manitou (France) Electrical forklifts, a fleet dedicated to dispatch at all corners of the nation.<br><br>

							</div>
								
							</div>
							<div class="video-overlay" style="background-color: rgba(0,0,0,0.40);"></div>
                </div>
						<!-- <div class="kl-bottommask kl-bottommask--mask4">
							<img src="images/Path 25.svg" alt="">							
						</div> -->
					
				</section>
				<section style="background: #84def7;     z-index: 0;
				display: block;
				position: relative;">
						<div class="container clearfix" style="z-index: 2;">
							<div class="onec-25" style="margin-left:10%;">
								<h1 class="teams-deasc" > <strong>Mission</strong><br>
									We are devoted to Surpassing our Customers’ expectations in every aspect by providing products and services of the highest standard.<br><br>
									<strong>Vision</strong><br>
									We aim to become the Leading Bottled Water manufacturer in Ethiopia and one of the recognized brands in the world.
								</h1>
										
				
							</div>
							<div class="onec-50" style="margin-left:0%;">
								<h1 class="teams-name">Our <br>aspiration</h1>
								<div class="teams-image">
									<img src="images/our aspiration.jpg" alt="">

								</div>
											
						</div>
					</div>
					<div class="kl-bottommask kl-bottommask--mask5">
						<img src="images/Path 63.png" alt="">							
					</div>
				
			</section>
			<section style=" z-index: 0; margin-bottom: 14%;
				display: block;
				position: relative;">
						<div class="container clearfix">
							<div class="onec-50" style="margin-left:0%;">
								<div class="one-product4">
									<div class="box">
										 <h2 class="desc" style="color: black; left: 75%; font-size: 54px;"> Chosen internationally</h2>										
									</div> 
								</div>
							</div>
							<div class="onec-50">
								<div class="inter-certi">
									<img  src="images/IQNet-1@2x.png" alt="">
									<h1><span style="color: #EFBE1B;">IQNet</span> <br>
										Management
										Certified</h1>
								</div>
								<div class="inter-certi">
									<img  src="images/ISO-1@2x.png" alt="">
									<h1><span style="color: #EFBE1B;">ISO 9001 Quality</span> <br>
										Management
										Certified</h1>
									
					</div>
								<div class="inter-certi">
									<img  src="images/saftey-1@2x.png" alt="">
									<h1><span style="color: #EFBE1B;">ISO 22000 Quality</span> <br>
										Management
										Certified</h1>
								</div>
							</div>
						
					<div class="kl-bottommask kl-bottommask--mask6">
						<img src="images/Path 242.svg" alt="">							
					</div>
				
			</section>
			
				
				
					</div>
				</section>
				
						<!-- #content end -->

			<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">
					<div class="center-div2">
						<div class="center-div" style="margin-bottom: 10%;">
							<div class="widget subscribe-widget clearfix">
								<h5>Be part of the <span style="color: #79D7F6;">One Community!</span> </h5>
								<div id="widget-subscribe-form-result" data-notify-type="success" data-notify-msg=""></div>
								<form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
									<div class="input-group divcenter">
										<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
										<span class="input-group-btn">
											<a style="margin-top: -3%;" class="btn button3 btn-txt3 round3" type="submit">Subscribe</a>
										</span>
									</div>
								</form>
								<script type="text/javascript">
									jQuery("#widget-subscribe-form").validate({
										submitHandler: function(form) {
											jQuery(form).find('.input-group-addon').find('.icon-email2').removeClass('icon-email2').addClass('icon-line-loader icon-spin');
											jQuery(form).ajaxSubmit({
												target: '#widget-subscribe-form-result',
												success: function() {
													jQuery(form).find('.input-group-addon').find('.icon-line-loader').removeClass('icon-line-loader icon-spin').addClass('icon-email2');
													jQuery('#widget-subscribe-form').find('.form-control').val('');
													jQuery('#widget-subscribe-form-result').attr('data-notify-msg', jQuery('#widget-subscribe-form-result').html()).html('');
													SEMICOLON.widget.notifications(jQuery('#widget-subscribe-form-result'));
												}
											});
										}
									});
								</script>
							</div>
						</div>
						<div class="col_full">
							<div class="col_one_third">
								<div class="widget clearfix">
									<h1 class="footer-txt">
										Your feedback is important to us and we take delight in responding to your questions. One the right  you can find our contact information or get through our social media links below.

									</h1>
									<div class="fright clearfix">
										<a href="#" class="social-icon si-small si-borderless si-facebook">
											<i class="icon-facebook"></i>
										</a>
										<a href="#" class="social-icon si-small si-borderless si-twitter">
											<i class="icon-twitter"></i>
										</a>
										<a href="#" class="social-icon si-small si-borderless si-linkedin">
											<i class="icon-linkedin"></i>
										</a><br><br><br>
			
										
										
										
									</div>
								</div>
	
							</div>
	
							<div class="col_one_third">
	
								<div class="widget widget_links clearfix center-div">
	
									<h4>Office hours</h4>
									<h1 class="footer-date">Monday to Friday</h1> 
									<span class="footer-time">8:30am - 5:30pm</span>
									<h1 class="footer-date">	Saturday </h1> 
									<span class="footer-time">	8:30am - 12:30am</span>
	
								
								
								</div>
	
							</div>
	
							<div class="col_one_third col_last">
								<div class="widget clearfix">
									<h4>Contact info.</h4>
									<h1 class="footer-date">Address</h1> 
									<span class="footer-time">	Sebeta- Hawas kebele 07 <br>Oromia Region	</span>									
									<h1 class="footer-date">Phone number</h1> 
									<span class="footer-time">+251 91 234 9808 <br>+251 91 147 6240	</span>
									<h1 class="footer-date">Email (General info.)</h1> 
									<span class="footer-time">info@onewateret.com</span>
									<h1 class="footer-date"> <a href="#" data-toggle="modal" data-target="#contactFormModal1">Email (Sales)</a></h1> 
									<span class="footer-time">sales@onwateret.com</span>
										
								</div>
							</div>
						</div>
					</div>
				</div><!-- .footer-widgets-wrap end -->
			</div>
			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_full" style="margin-bottom: 0px;">
				
					<h1 class="copyright-txt">©2021 One Purified water, Ethiopia. All Rights Reserved.</h1>
					</div>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="{{asset('js/functions.js')}}"></script>

</body>
</html>