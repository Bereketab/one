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

	<!-- Document Title
	============================================= -->
	<title>One Water</title>

</head>
<div class="modal fade" id="contactFormModal1" tabindex="-1" role="dialog" aria-labelledby="contactFormModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="contactFormModalLabel">Send Us an Email</h4>
            </div>
            <div class="modal-body">
                <form class="nobottommargin" id="template-contactform2" name="template-contactform" action="" method="post">
                    <div class="form-process"></div>

                    <div class="col_half">
                        <label for="template-contactform-name">Name</label>
                        <input type="text" id="template-contactform-name" name="name" value="" class="sm-form-control required" />
                    </div>

                    <div class="col_half col_last">
                        <label for="template-contactform-email">Email</label>
                        <input type="email" id="template-contactform-email" name="email" value="" class="required email sm-form-control" />
                    </div>
                    <div class="clear"></div>
                    <div class="col_full">
                        <label for="template-contactform-message">Message </label>
                        <textarea class="required sm-form-control" id="template-contactform-message" name="message" rows="6" cols="30"></textarea>
                    </div>

                    <div class="col_full hidden">
                        <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                    </div>

                    <div class="col_one_fourth"style="float: right;">
                    					
							<button  class=" button2 btn-txt2 round2" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit"	>send</button> 
						
                    </div>

                </form>

                <script type="text/javascript">
                    $("#template-contactform").validate();
                </script>
      
            </div>
           
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<body class="stretched">
	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">
		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header full-header dark" data-sticky-class="not-dark">
			<div id="header-wrap">
				<div class="container clearfix" >
					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
					<nav id="primary-menu2" class="dark">
						<ul>
							<li><div>One Purified Water</div></li>	
						</ul>
					</nav>
					<!-- Logo
					============================================= -->
					<div id="logo" class="logo-style">
						<a href="#" style=" margin: 0 auto;float: right;"  class="standard-logo" data-dark-logo="images/one logo white.png"><img src="images/one logo white.png" alt="One-water Logo"></a>
						<a href="#" style="margin: 0 auto;float: right;" class="retina-logo" data-dark-logo="images/one logo white.png"><img src="images/one logo white.png" alt="One-water Logo"></a>
					</div><!-- #logo end -->
					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="dark">
						<ul>
							<li><a href="{{route ('about')}}"><div>About</div></a></li>	
							<li><a href="{{route ('product')}}"><div>Products</div></a></li>
							<li><a href="{{route ('news')}}"><div>News</div></a></li>									
						</ul>
					</nav><!-- #primary-menu end -->	
				</div>
			</div>
		</header><!-- #header end --> 
		<section id="slider" class="swiper_wrapper full-screen clearfix">
			<div class="swiper-container swiper-parent">
				<div class="swiper-wrapper">
					<div class="swiper-slide dark" style="background-image: url('images/landing.jpg');">
						<div class="container clearfix">
						<div  class="hs-wrapper">
							
								<div id="view3608" class="hs-wrapper-img">
									
								</div>							
							</div>
							
     <script type="text/javascript" src="js/tikslus360.js"></script>
		
		<script language="javascript">
		$(window).load(function(){
		$("#view3608").tikslus360({imageDir:'images/o/',imageCount:36,imageExt:'png',canvasID:'mycar',canvasWidth:468,canvasHeight:813,autoRotate:false});
		});
		</script>
							</div> 
							
						</div>
					</div>					
				</div>				
			</div>
			<script>
				jQuery(document).ready(function($){
					var swiperSlider = new Swiper('.swiper-parent',{
						paginationClickable: false,
						
						
				
						
					});
				});
			</script>
		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap"  style="padding: 0px 0;">

				<div class="container clearfix">

				<section  class="iconh-margin" >
				<div class="icons-holder ">
					<div class="about-icons">
						<figure class="swap-on-hover">
							<img  class="swap-on-hover__front-image" src="images/3.png"/>
							 <img class="swap-on-hover__back-image" src="images/3color.png"/>
							 <h1 class="h1">Natural</h1>	
						   </figure>
						  	
					</div>
					<div class="about-icons">
						<figure class="swap-on-hover">
							<img  class="swap-on-hover__front-image" src="images/1.png"/>
							 <img class="swap-on-hover__back-image" src="images/1color.png"/>
							 <h1 class="h1">Healthy</h1>		
											   </figure>
											  

					</div>
					<div class="about-icons">
					
						<figure class="swap-on-hover">
							<img  class="swap-on-hover__front-image" src="images/2.png"/>
							 <img class="swap-on-hover__back-image" src="images/2color.png"/>
							 <h1 class="h1">Refined</h1>	
						   </figure>
							

					</div>
					
					<div class="about-icons">
						
						<figure class="swap-on-hover">
							<img  class="swap-on-hover__front-image" src="images/4.png"/>
							 <img class="swap-on-hover__back-image" src="images/4color.png"/>
							 <h1 class="h1">Chosen</h1>	
						   </figure>
						 	

					</div>
				</div>
				</section>			
				</div>
				
				<section>
					<div class="all-bottle">
						<div class="onec-25">
							<div class="background-25">
								<h1 class="abt-bot">All in <br>One bottle</h1>
							</div>
						</div>
						<div class="onec-75">
							
							<h1 class="abt-txt">One Natural Purified Water is refined and filtered water. One water began production in 2015 with the aim of accomplishing the utmost quality level in the manufacturing of its products while also preserving the organic substances in its packaged spring water.</h1>

						</div>

					</div>

					<div style="z-index: 0; display: block; position: relative;">
						<div class="section parallax full-screen nomargin noborder" style="background-image: url(&quot;images/para home.jpg&quot;); height: 695px; background-position: 50% 176px;" data-stellar-background-ratio="0.4">
							<div class="container clearfix">
								<div class="center-div">
									<h1 class="para-text">The people, the passion & the process </h1>
								<a href="#"  class="btnx 	button btn-txt round "> learn more</a>
								</div>
							</div>
							<div class="video-overlay2" style="background-color: rgba(0,0,0,0.45);"></div>

                </div>
						<div class="kl-bottommask kl-bottommask--mask3">
							<img src="images/parlax_curve.svg" alt="">							
						</div>
					</div>
				</section>
				<section style="background-color: #79D7F6; display: block; padding-top: 180px;
				padding-bottom: 160px;">
					<div class="container clearfix">
						<div class="one-product">
						<div class="box">
							<!-- <h2 class="name">product name</h2>
							<a href="#" class="buy">buy now</a> -->
							<div class="circle"></div>
							<img src="images/onepro.png" class="product" alt="">
						</div> 
					</div>
					<div class="onec-25 icon-marginf">
						<div class="onew-desc">
							<h1>Litre <i style="opacity: 0;">________________</i> Litre<br>
								<span>0.4 - 20</span>
							</h1>
							<p>Derived from the original source of Mogle Mountain, One Natural Purified Water is produced at its 25,000 square meters of factory in Sebeta region and 400+ Employees, Ethiopia. </p><br>
							<a href="#" class="button3 btn-txt3 round3">see products</a>
						</div>		
					</div> 
					</div>
				</section>

				<section>
					<div class="container clearfix">
						<div class="onec-50">
							<div class="latestnews-holder">
								<h1 style="margin-top: 80%;" class="header-news">Latest News<br>
									& Events</h1>
									<a style="float: right;" href="#"class="button2 btn-txt2 round2">see more posts</a>
							</div>
						</div>
						<div class="onec-50">
						@foreach(App\Models\News_Event::latest()->limit(1)->get() as $item)
							<div id="posts" class="post-grid grid-2 clearfix">
								<div class="entry clearfix">
									<div class="entry-image br-radius">
										<img src="images/news1.jpg" />
									</div>
									<div class="entry-title" style="margin-top: 62%;">
										<h2><a href="{{route ('news_detail',[$item->id])}}">{{$item->title}} </a></h2>
									</div>
									<ul class="entry-meta clearfix">
										<li>{{$item->type}} -</li>
										<li>{{$item->created_at->format('d M  Y')}}</li>
									</ul>
									<div class="entry-content">
										<h1>
											{!!$item->description!!}
										</h1>
									</div>
								</div>


							</div>
							@endforeach


						</div>

					</div>
				</section>

			</div>
			<script type="text/javascript">
				VanillaTilt.init(document.querySelector(".box"), {
					max: 25,
					speed: 400
				});
			</script>
		</section><!-- #content end -->
		
		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark" style="margin-top: 0px!important;">
			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">
					<div class="center-div2">
						<div class="center-div" style="margin-bottom: 10%;">
							<div class="widget subscribe-widget clearfix">
								<h5>Be part of the <span style="color: #79D7F6;">One Community!</span> </h5>
								<div id="widget-subscribe-form-result" data-notify-type="success" data-notify-msg=""></div>
								<form id="widget-subscribe-form" action="" role="form" method="post" class="nobottommargin">
									@csrf
									<div class="input-group divcenter">
										<input type="email" id="email" name="email" class="form-control required email" placeholder="Enter your Email">
										<span class="input-group-btn">
											<a style="margin-top: -3%;" class="btn button3 btn-txt3 round3" id='link' type="submit">Subscribe</a>
										</span>
									</div>
								</form>
								<script type="text/javascript">
								$.ajaxSetup({
									headers: {
										'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
										}
										});
										$("#link").click(function(e) {
											
											var fd = new FormData();
                                              var _token = $("input[name='_token']").val();
                                              var email = $("#email").val();
											  $.ajax({
												  type:'POST',
                                                  url:'{{route ('post_subscriber')}}',
                                                  data:  {
                                                             _token:_token,
                                                             email: email,
															  },
                                                  success: function (data) {
													$("#email").val('')
													SEMICOLON.widget.notifications(jQuery('#widget-subscribe-form-result').attr('data-notify-msg',data));
                                                       },
                                                  error:function(data){
                                                      var errors = data.responseJSON;
                                                      console.log(data);
                                                  },
                                                      });
													  e.preventDefault();
                                                      });
													  

									
									// jQuery("#widget-subscribe-form").validate({
									// 	submitHandler: function(form) {
									// 		jQuery(form).find('.input-group-addon').find('.icon-email2').removeClass('icon-email2').addClass('icon-line-loader icon-spin');
									// 		jQuery(form).ajaxSubmit({
									// 			target: '#widget-subscribe-form-result',
									// 			success: function() {
									// 				jQuery(form).find('.input-group-addon').find('.icon-line-loader').removeClass('icon-line-loader icon-spin').addClass('icon-email2');
									// 				jQuery('#widget-subscribe-form').find('.form-control').val('');
									// 				jQuery('#widget-subscribe-form-result').attr('data-notify-msg', jQuery('#widget-subscribe-form-result').html()).html('');
									// 				SEMICOLON.widget.notifications(jQuery('#widget-subscribe-form-result'));
									// 			}
									// 		});
									// 	}
									// });
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
									<h1 class="footer-date"> <a href="#" data-toggle="modal" data-target="#contactFormModal1">Email (Sales) </a></h1> 
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