<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="not-ie" lang="en"> <!--<![endif]-->
<head>

	<!-- Basic meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">

	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Styles -->
	<link href="css/style.min.css" rel="stylesheet" type="text/css" />
	<link href="css/font-awesome/font-awesome.min.css" rel="stylesheet" />
	<!--[if IE 7]>
		<link href="css/font-awesome/font-awesome-ie7.min.css" rel="stylesheet" />
	<![endif]-->
	
	<!-- Web Fonts  -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css' />

	<!-- Javascript -->
<!-- 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script> -->
	<title>{{ config('app.name', 'Блог PHP-разработчика') }}</title>
	<!-- Internet Explorer condition - HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

	<!-- Header
	================================================== -->
	<header id="header">

		<!-- Navigation
		================================================== -->
		<nav class="navbar">
			<div class="navbar-inner">
				<div class="container">
					<!-- Logo -->
					<a class="brand" href="/">
						{{ config('app.name', 'Блог PHP-разработчика') }}
					</a>
					<ul class="nav">
						<li><a href="index.html">Главная</a></li>
						<li><a href="work.html">Категории</a></li>
						<li><a href="plans.html">Теги</a></li>
						<li><a href="contact.html">Обратная связь</a></li>
					</ul>
				</div><!-- end .container -->
			</div><!-- end .navbar-inner -->
		</nav>

	</header>

	<!-- Content
	================================================== -->
	<section id="content" class="container">

	<div class="hero-unit">
		<p>Точнее сказать не блог, а просто простолезные заметки</p>
	</div>

	<hr />

	<!-- #blog -->
	<div class="row" id="blog">

		<!-- posts -->
		<div class="span8"> 

			<!-- Example of image blog item
			================================================== -->
			<article class="post image-post">

				<!-- entry media -->
				<a href="blog-single.html" class="entry-media">
					<img src="http://farm8.staticflickr.com/7111/7048321321_9943607a32_c.jpg" alt="" />
				</a>

				<!-- entry body -->
				<div class="entry-body">
					<a href="blog-single.html">
						<h2 class="entry-title">
							Back to nature
						</h2>
					</a>
					<p>Cupcake ipsum dolor sit amet wafer gummi bears pudding applicake. Jujubes brownie powder. Sweet roll powder gingerbread gummies. Cupcake ice cream sweet roll pie lollipop. </p>
				</div>

				<!-- entry meta -->
				<div class="entry-meta">
					<span class="entry-type"></span>
					<span class="entry-date">Jun 13, 2012</span>
					<span class="entry-comments"> 12 comments</span>
				</div>

				<!-- clearfix -->
				<div class="clr"></div>

			</article><!-- end item -->

			<!-- Example of video blog item
			================================================== -->
			<article class="post video-post">

				<a href="blog-single.html" class="entry-media">
					<iframe src="http://player.vimeo.com/video/20800127?portrait=0&amp;title=0&amp;byline=0&amp;autoplay=0" width="600" height="340" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				</a>
				<div class="entry-body">
					<a href="blog-single.html">
						<h2 class="entry-title">Deer</h2>
					</a>
					<p>Cupcake ipsum dolor sit amet wafer gummi bears pudding applicake. Jujubes brownie powder. Sweet roll powder gingerbread gummies. Cupcake ice cream sweet roll pie lollipop. </p>
				</div>
				<div class="entry-meta">
					<span class="entry-type"></span>
					<span class="entry-date">Jun 13, 2012</span>
					<span class="entry-comments"> 12 comments</span>
				</div>
				<div class="clr"></div>

			</article><!-- end item -->

			<!-- Default blog item
			================================================== -->
			<article class="post">

				<a href="blog-single.html" class="entry-media">
					<img src="http://farm8.staticflickr.com/7192/6902225428_aab1cb4ac6_c.jpg" alt="" />
				</a>
				<div class="entry-body">
					<a href="blog-single.html">
						<h2 class="entry-title">Example blog post</h2>
					</a>
					<p>Cupcake ipsum dolor sit amet wafer gummi bears pudding applicake. Jujubes brownie powder. Sweet roll powder gingerbread gummies. Cupcake ice cream sweet roll pie lollipop. </p>
				</div>
				<div class="entry-meta">
					<span class="entry-type"></span>
					<span class="entry-date">Jun 13, 2012</span>
					<span class="entry-comments"> 12 comments</span>
				</div>
				<div class="clr"></div>

			</article><!-- end item -->

			<!-- Example of carousel blog item
			================================================== -->
			<article class="post image-post">

				<div id="carousel" class="carousel slide" rel="carousel">
					<!-- Carousel items -->
					<div class="carousel-inner">
						<div class="item active">
							<img src="http://farm7.staticflickr.com/6121/6017098595_a24475c086_b.jpg" alt="" />
						</div>
						<div class="item">
							<img src="http://farm7.staticflickr.com/6134/6017106909_dfae075629_b.jpg" alt="" />
						</div>
					</div>
					<!-- Carousel navigation -->
					<a class="carousel-control left" href="#carousel" data-slide="prev"></a>
					<a class="carousel-control right" href="#carousel" data-slide="next"></a>
				</div>

				<div class="entry-body">
					<a href="blog-single.html">
						<h2 class="entry-title">
							Example blog post
						</h2>
					</a>
					<p>Cupcake ipsum dolor sit amet wafer gummi bears pudding applicake. Jujubes brownie powder. Sweet roll powder gingerbread gummies. Cupcake ice cream sweet roll pie lollipop. </p>				
				</div>
				<div class="entry-meta">
					<span class="entry-type"></span>
					<span class="entry-date">Jun 13, 2012</span>
					<span class="entry-comments"> 12 comments</span>
				</div>
				<div class="clr"></div>

			</article><!-- end item -->
			
			<hr />

			<!-- Pagination
			================================================== -->
			<div class="pagination">
				<ul>
					<li><a href="#">&larr; Prev</a></li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">Next &rarr;</a></li>
				</ul>
			</div>
			
		</div><!-- end .span8 -->

		<!-- Sidebar with widgets
		================================================== -->
		<div class="sidebar span4">

			<!-- search plugin -->
			<div class="widget">
				<input type="search" class="animated" placeholder="Search" />
			</div>

			<!-- Tags / categories -->
			<div class="widget">
				<h4>Categories</h4>
				<ul class="tags">
					<li><a href="#">design</a></li>
					<li><a href="#">user interface</a></li>
					<li><a href="#">typography</a></li>
					<li><a href="#">apps</a></li>
					<li><a href="#">mac os/x</a></li>
				</ul>
			</div>

			<!-- List widget with custom list icons -->
			<div class="widget">
				<h4>List widget</h4>
				<ul class="icons-ul list-style">
					<li><i class="icon-li icon-chevron-right"></i>design</li>
					<li><i class="icon-li icon-chevron-right"></i>user interface</li>
					<li><i class="icon-li icon-chevron-right"></i>typography</li>
					<li><i class="icon-li icon-chevron-right"></i>apps</li>
					<li><i class="icon-li icon-chevron-right"></i>mac os/x</li>
				</ul>
			</div>

			<!-- Example of tabs widget -->
			<div class="widget stacked">
				<h4>Tabs</h4>
				<ul class="nav nav-tabs">
					<li class="active"><a href="#home" data-toggle="tab">Home</a></li>
					<li class=""><a href="#profile" data-toggle="tab">Profile</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade active in" id="home">
						<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.</p>
					</div>
					<div class="tab-pane fade" id="profile">
						<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.</p>
					</div>
				</div>   
			</div>

			<!-- Flickr widget (notice included js/jflickrfeed.min.js file at the bottom) -->
			<div class="widget">
				<h4>Flickr widget</h4>
				<div class="flickr-feed" data-flickr-id="52617155@N08" data-flickr-tags="workspaces,design,2010,chicago">
				</div>
			</div>

			<!-- Simple text widget -->
			<div class="widget">
				<h4>Text widget</h4>
				<p>Cupcake ipsum dolor sit amet wafer gummi bears pudding applicake. Jujubes brownie powder. Sweet roll powder gingerbread gummies. </p>
			</div>

		</div><!-- end sidebar -->

	</div><!-- end #blog -->

	<script type="text/javascript" src="js/jflickrfeed.min.js"></script>
	</section>

	<!-- Footer
	================================================== -->

	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="span4">
					<a class="brand" href="index.html">
						Plain
					</a>
					<p>
						Creative agency working <br />with web and interactive media. <br />
						Lorem ipsum dolor sit amet.
						
					</p>
				</div>
				<div class="span4 social-networks">
					<h3>Find us elsewhere</h3>
					<p>
						<a class="social-network twitter"></a>
						<a class="social-network facebook"></a>
						<a class="social-network linkedin"></a>
						<a class="social-network dribbble"></a>
						<a class="social-network pinterest"></a>
					</p>
				</div>
				<div class="span4 newsletter">
					<h3>Newsletter</h3>
					<p>Subscribe to our monthly newsletter and be the first to know about our news and special deals!</p>
					<img class="ajax-loader" src="img/ajax-loader.gif" alt="" />
					<form method="post" id="newsletter-form">
						<input type="text" placeholder="Enter your E-mail" name="subscribe" />
						<input type="hidden" name="bot" /><!-- SPAM protection -->
						<button type="submit" class="icon-ok" id="newsletter-subscribe" ></button>
					</form>
				</div> 
			</div> <!-- end .row -->		
		</div> <!-- end .container -->
	</footer><!-- end #footer -->

	<footer id="copyright">
		<div class="container">
			<div class="row">
				<div class="span4">
					&copy; 2010—2012 by <a>Plain</a>
				</div>
				<div class="span4">
					<a href="#" title="Send us email"><span class="__cf_email__" data-cfemail="d0b8b5bcbcbf90a0bcb1b9befeb3bfbd">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a>, 
					+123 320 000 123 456
				</div>
				<div class="span4">
					<a href="http://themeforest.net/item/plain/2616790?ref=virae" rel="external" title="">PLAIN</a> BY <a title="Michal Šimonfy" rel="external" href="http://virae.org">VIRAE</a>
					 &nbsp;|&nbsp; <a title="Buy this template on themeforrest.net" href="http://themeforest.net/item/plain/2616790?ref=virae" rel="external" class="label label-inverse">BUY THIS TEMPLATE</a>
				</div>
			</div> <!-- end .row -->		
		</div> <!-- end .container -->
	</footer><!-- end #footer-extra -->

	<!-- Javascript - Placed at the end of the document so the pages load faster 
	================================================== -->

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
	<script type="text/javascript" src="js/jquery.hotkeys.min.js" charset='utf-8'></script>
	<script type="text/javascript" src="js/functions.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</body>
</html>		