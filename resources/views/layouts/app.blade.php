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
	@yield('meta')
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Styles -->
	<link href="css/style.min.css" rel="stylesheet" type="text/css" />
	<link href="css/font-awesome/font-awesome.min.css" rel="stylesheet" />
	<!--[if IE 7]>
		<link href="css/font-awesome/font-awesome-ie7.min.css" rel="stylesheet" />
	<![endif]-->
	@yield('styles')
	<style>
		.autocomplete-suggestions {background: #FFF; overflow: auto; }
		.autocomplete-suggestion { border: 1px solid #999; padding: 2px 5px; white-space: nowrap; overflow: hidden; }
		.autocomplete-selected { background: #F0F0F0; }
		.autocomplete-suggestions strong { font-weight: normal; color: #3399FF; }
		.autocomplete-group { padding: 2px 5px; }
		.autocomplete-group strong { display: block; border-bottom: 1px solid #000; }
	</style>
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

		@yield('content')
			
		</div><!-- end .span8 -->

		<!-- Sidebar with widgets
		================================================== -->
		<div class="sidebar span4">

			<!-- search plugin -->
			<div class="widget">
				<input id="main_search" type="search" class="animated" placeholder="Search" />
				<div class="autocomplete-suggestions"></div>
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

	</section>

	<!-- Footer
	================================================== -->

	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="span4">
					<a class="brand" href="/">
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
					<h3>Подписка</h3>
					<p>Подпишитесь на рассылку чтобы первым узнать о новых записях в блоге!</p>
					<img class="ajax-loader" src="img/ajax-loader.gif" alt="" />
					<form method="post" id="newsletter-form">
						<input type="text" placeholder="Введите E-mail" name="subscribe" />
						<input type="hidden" name="bot" /><!-- SPAM protection -->
						<button type="submit" class="icon-ok" id="newsletter-subscribe" ></button>
					</form>
				</div> 
			</div> <!-- end .row -->		
		</div> <!-- end .container -->
	</footer><!-- end #footer -->

	<!-- Javascript - Placed at the end of the document so the pages load faster 
	================================================== -->
	<script type="text/javascript" src="js/app.js"></script>
	<script type="text/javascript" src="js/jquery.autocomplete.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
	<script type="text/javascript" src="js/jquery.hotkeys.min.js" charset='utf-8'></script>
	<script type="text/javascript" src="js/functions.js"></script>
	{{-- <script type="text/javascript" src="js/functions.min.js"></script> --}}
	<script>
		$(function(){
			console.log('ready');
			$('#main_search').autocomplete({
				serviceUrl: '/api/search-articles',
				type: 'POST',
				dataType: 'json',
				minChars: 2,
				showNoSuggestionNotice: true,
				deferRequestBy: 100,
				transformResult: function(response) {
					return {
						suggestions: $.map(response.data.data, function(dataItem) {
							return { value: dataItem.title, data: dataItem.id };
						})
					};
				},
				onSelect: function (suggestion) {
					alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
				}
			});
		});
	</script>
	@yield('scripts')
</body>
</html>		