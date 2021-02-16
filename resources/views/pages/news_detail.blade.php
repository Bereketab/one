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
	<script type="text/javascript" src="{{asset('js/vanilla-tilt.min.js')}}"></script>
	<title>News</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header full-header" data-sticky-class="not-dark">

		

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
							<li><a href="{{route ('about')}}"><div>About</div></a></li>	
							<li ><a href="{{route ('product')}}"><div>Products</div></a></li>
							<li class="current"><a href="{{route ('news')}}"><div>News</div></a></li>									
						</ul>
					</nav><!-- #primary-menu end -->
				</div>
			
		</header><!-- #header end --> 
		<section id="slider" class="swiper_wrapper2 full-screen clearfix" style="position:absolute; z-index:9;">
			<div class="swiper-container swiper-parent">
				<div class="swiper-wrapper">
					<div class="swiper-slide dark" style="background-image: url('images/news1.jpg');">
						<div class="container clearfix">
						</div> 
					</div>
					
				</div>
				
			</div>
			<div class="kl-bottommask kl-bottommask--mask3" style="background-size: 1349px 174px; bottom: 13px; height: 174px;">
				<img src="images/Path 18.svg" alt="">
				

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
							$('#slider').find('.swiper-slide:not(".swiper-slide-active")').each(function(){
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

		<!-- Content
		============================================= -->
		<section id="content" style="z-index: 10;">
			<div class="content-wrap">
				<section style="margin-top: 15%;">
					<div class="container clearfix">
						<div class="col_full">	
							@foreach(App\Models\News_Event::latest()->limit(1)->get() as $item)		
								<div class="news-holderd br-radius2">
									<div class="entry clearfix" style="padding:80px;">
										<div class="entry-title" >
											<h3><a href="{{route ('news_detail',[$item->id])}}">{{$item->title}} </a></h3>
										</div>
										<ul class="entry-meta clearfix">
											<li style="color: white;">{{$item->type}} -</li>
											<li style="color: white;">{{$item->created_at->format('d M  Y')}}</li>
										</ul>
										<div class="entry-content">
											<h1>	{!!$item->description!!}</h1>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						
					
					</div>
				</section>
				<!-- <section>
					<div class="events-news">
						<div class="container clearfix">
							<ul id="portfolio-filter" class="clearfix">

									<a href="#"class="button btn-txt round">News</a>
									
									<a href="#"class="button btn-txt round">Events</a>
							</ul>

						</div>
					</div>
				</section> -->
				<section style="margin-top: 15%;">
					
					<div class="container clearfix">
						<h1 class="para-text" style="color: black; text-align: right;     margin-right: 2%; margin-top: 0%;">related news</h1>
						<div id="posts" class="post-grid grid-3 clearfix">
							@foreach(App\Models\News_Event::latest()->limit(1)->get() as $item)
							<div class="entry clearfix">
								<div class="entry-image br-radius3">
									@if($item->image)
									<img class="image_fade" src="{{asset('image/news/' . $item->image) }}" alt="Standard Post with Image">
									@endif

								</div>
								<div class="entry-title">
									<h2><a href="{{route ('news_detail',[$item->id])}}">{{$item->title}} </a></h2>
								</div>
							</div>
							@endforeach
							
						</div>
						

					</div>
				</section>					
			
			
		</section><!-- #content end -->

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