<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gte IE 10)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" lang="en-US"><!--<![endif]-->
<head>
	<title>iPress - Responsive News/Blog/Magazine HTML5 Template</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- Seo Meta -->
  <meta name="description" content="iPress - Responsive News/Blog/Magazine HTML5 Template">
  <meta name="keywords" content="iPress, magazine, light, dark, themeforest, multi purpose, premium, unlimited, blog, news, AD, optimized">

	<!-- Styles -->
		<link rel="stylesheet" type="text/css" href="/themes/ipress/css/style.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="/themes/ipress/css/styles/icons.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="/themes/ipress/css/styles/animate.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="/themes/ipress/css/styles/responsive.css" media="screen" />
		<link href='/themes/ipress/css/styles/font/roboto-font.css' rel='stylesheet' type='text/css'>

	<!-- Favicon -->
		<link rel="shortcut icon" href="/themes/ipress/images/favicon.ico">
		<link rel="apple-touch-icon" href="/themes/ipress/images/apple-touch-icon.png">

	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EmulateIE8; IE=EDGE" />
		<script src="/themes/ipress/js/html5.js"></script>
	<![endif]-->
</head>
<body>
  {{ Str::words('Improving Search on the Envato Marketplaces: 2013 in Review', $limit = 5, $end = '...') }}
   @include('frontend.default.myComposer')
	<div id="layout" class="boxed">
		<header id="header">
			<div class="a_head">
				<div class="row clearfix">
					<div class="breaking_news lefter">
						<div class="freq_out">
							<div class="freq"><div class="inner_f"></div><div id="layerBall"></div></div>
						</div><!-- /freq -->
						<ul id="js-news" class="js-hidden">
							<li class="news-item"><a href="#">Improving Search on the Envato Marketplaces: 2013 in Review</a></li>
							<li class="news-item"><a href="#">4 Ways To Find Free and Unique Photos for Your Next Website Theme</a></li>
							<li class="news-item"><a href="#">Community Poll: Internet Speeds From Around the World in 2013</a></li>
							<li class="news-item"><a href="#">New Hub, Header & Collections: 10 Ways to Improve Your Marketplaces Productivity</a></li>
							<li class="news-item"><a href="#">Get a Free Year of Tuts+ Premium by Trying New Relic</a></li>
							<li class="news-item"><a href="#">Beyond Bland: 10+ Creative Packaging Designs That Will Leave You Inspired</a></li>
						</ul><!-- /js news -->
					</div><!-- /breaking news -->

					<div class="right_bar">
						<div class="lang">
							<a class="activated_lang" href="#"><img src="/themes/ipress/images/flag/us.png" alt="EN"></a>
							<div class="more_lang">
								<a href="#"><img src="/themes/ipress/images/flag/gr.png" alt=""></a>
								<a href="#"><img src="/themes/ipress/images/flag/fr.png" alt=""></a>
							</div><!-- /more lang -->
						</div><!-- /lang -->

						<div class="social social_head">
							<a href="#" class="bottomtip" title="Twitter"><i class="fa-twitter"></i></a>
							<a href="#" class="bottomtip" title="Facebook"><i class="fa-facebook"></i></a>
							<a href="#" class="bottomtip" title="Google Plus"><i class="fa-google-plus"></i></a>
							<a href="#" class="bottomtip" title="Linkedin"><i class="fa-linkedin"></i></a>
							<a href="#" class="bottomtip" title="Github"><i class="fa-github"></i></a>
							<a href="#" class="bottomtip" title="instagram"><i class="fa-instagram"></i></a>
							<a href="#" class="bottomtip" title="Dribbble"><i class="fa-dribbble"></i></a>
						</div><!-- /social -->

						<span id="date_time"></span><!-- /date -->
					</div><!-- /right bar -->
				</div><!-- /row -->
			</div><!-- /a head -->

			<div class="b_head">
				<div class="row clearfix">
					<div class="logo">
						<a href="index.html" title="iPress - Responsive News/Blog/Magazine HTML5"><img src="/themes/ipress/images/logo.png" alt="iPress - Responsive News/Blog/Magazine HTML5"></a>
					</div><!-- /logo -->

                    @include('frontend.advertise.topAdvertise')

				</div><!-- /row -->
			</div><!-- /b head -->

			<div class="row clearfix">
				<div class="sticky_true">
					<div class="c_head clearfix">
						<nav>
							<ul class="sf-menu">
								<li class="current colordefault home_class"><a href="{{ route('homepage') }}"><i class="icon-home"></i></a>
									<ul>
										<li><a href="index_right_sidebars.html">Rigth Sidebars</a></li>
										<li><a href="index_left_sidebars.html">Left Sidebars</a></li>
									</ul>
								</li>
								<li class="color1"><a href="#"><i class="fa-reorder"></i></a>
									<ul>
										<li><a href="shortcodes.html"><i class="icon-gear"></i>Shortcodes</a></li>
										<li><a href="rtl.html"><i class="icon-user"></i>RTL Version</a></li>
										<li><a href="single_post.html"><i class="icon-camera"></i>Single post</a></li>
										<li><a href="category.html"><i class="icon-music"></i>Category page</a></li>
										<li><a href="404.html"><i class="icon-media-play"></i>Error 404</a></li>
										<li><a href="#"><i class="icon-map"></i>3rd Menu</a>
											<ul>
												<li><a href="#">Example 1</a></li>
												<li><a href="#">Example 2</a>
													<ul>
														<li><a href="#">Example 1</a></li>
														<li><a href="#">Example 2</a></li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="color2"><a href="category.html">Travel</a></li>
								<li class="color3"><a href="category.html">People</a></li>
								<li class="color4"><a href="category.html">Sports</a></li>
								<li class="color5"><a href="category.html">Music</a></li>
								<li class="color6"><a href="category.html">TV</a></li>
								<li class="color7"><a href="category.html">Entertainment</a></li>
								<li class="color8"><a href="{{ route('contact') }}">Contact</a></li>
							</ul><!-- /menu -->
						</nav><!-- /nav -->
	
						<div class="right_icons">
							<a class="random_post bottomtip" href="#" title="Random Post"><i class="icon-media-shuffle"></i></a><!-- /random post -->
	
							<div class="search">
								<div class="search_icon"><i class="fa-search"></i></div>
								<div class="s_form">
									<form action="http://theme20.com/demo/ipress/search_result.html" id="search" method="get">
										<input id="inputhead" name="search" type="text" onfocus="if (this.value=='Start Searching...') this.value = '';" onblur="if (this.value=='') this.value = 'Start Searching...';" value="Start Searching..." placeholder="Start Searching ...">
										<button type="submit"><i class="fa-search"></i></button>
									</form><!-- /form -->
								</div><!-- /s form -->
							</div><!-- /search -->
						</div><!-- /right icons -->
					</div><!-- /c head -->
				</div><!-- /sticky -->
			</div><!-- /row -->
		</header><!-- /header -->
    @yield('main_menu')
    @yield('main_content')
    @include('frontend.default.footer')

	</div><!-- /layout -->

	<!-- Scripts -->
  <script src="/themes/ipress/js/jquery.min.js"></script>
  <script src="/themes/ipress/js/ipress.js"></script>
  <script src="/themes/ipress/js/owl.carousel.min.js"></script>
  <script src="/themes/ipress/js/jquery.ticker.js"></script>
  <script src="/themes/ipress/js/custom.js"></script>
  
		<![CDATA[
			function date_time(id){
				date = new Date;
				year = date.getFullYear();
				month = date.getMonth();
				months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'Jully', 'August', 'September', 'October', 'November', 'December');
				d = date.getDate();
				day = date.getDay();
				days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
				h = date.getHours();
				if(h<10){
					h = "0"+h;}
					m = date.getMinutes();
					if(m<10){
						m = "0"+m;
					}
					s = date.getSeconds();
					if(s<10){
						s = "0"+s;
					}
				// result = ''+days[day]+' '+months[month]+' '+d+' '+year+' '+h+':'+m+':'+s;
				result = ''+days[day]+' '+d+' '+months[month]+' '+year;
				document.getElementById(id).innerHTML = result;
				setTimeout('date_time("'+id+'");','1000');
				return true;
			}
			window.onload = date_time('date_time');
		 ]]> 
		</script>
</body>
</html>