{{-- @inject('metrics', 'App\Services\MetricsService') --}}
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
	<link href="/css/style.css" rel="stylesheet" type="text/css" />
	<link href="/css/font-awesome/font-awesome.min.css" rel="stylesheet" />
	<!--[if IE 7]>
		<link href="/css/font-awesome/font-awesome-ie7.min.css" rel="stylesheet" />
	<![endif]-->
	@yield('styles')
	<style>
		/*.autocomplete-suggestions {background: #FFF; overflow: auto; }*/
		/*.autocomplete-suggestion { border: 1px solid #ccc; padding: 2px 5px; white-space: nowrap; overflow: hidden; }*/
		/*.autocomplete-selected { background: #F0F0F0; }*/
		/*.autocomplete-suggestions strong { font-weight: normal; color: #3399FF; }*/
		/*.autocomplete-group { padding: 2px 5px; }*/
		/*.autocomplete-group strong { display: block; border-bottom: 1px solid #000; }*/
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
		<p>Полезные заметки собраны в одном месте</p>
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
			@inject('sidebar', 'App\Services\SidebarDataService')
			<!-- search plugin -->
			<div class="widget">
				<form class="form-search">
					<div class="input-append">
						<input id="main_search" type="search" name="query" class="span2 search-query animated">
						<button type="submit" class="btn">Search</button>
                        {{--<div class="autocomplete-suggestions"></div>--}}
					</div>
				</form>
 				{{--<form>--}}
					{{--<input id="main_search" type="search" class="animated" placeholder="Search" />--}}
					{{--<button type="submit">s</button>--}}
				{{--</form>--}}
			</div>


            <!-- Categories -->
            <div class="widget">
                <h4>Categories</h4>
                <ul class="icons-ul list-style">
                    @forelse($sidebar->categories() as $category)
                        <li><a href="{!! route('categories.show', ['id' => $category->id]) !!}"><i class="icon-li icon-chevron-right"></i>{!! $category->name !!}</a></li>
                    @empty
                        <li>Категорий пока нет</li>
                    @endforelse
                </ul>
            </div>

			<!-- Tags -->
			<div class="widget">
				<h4>Tags</h4>
				<ul class="tags">
                    @forelse($sidebar->tags() as $tag)
                        <li><a href="{!! route('tags.show', ['id' => $tag->id]) !!}">{!! $tag->name !!}</a></li>
                    @empty
                        <li>Тегов пока нет</li>
                    @endforelse
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
					<a class="brand" href="https://molchan.me" target="_blank">
						Molchan.Me
					</a>
					<p>
						Информацию обо мне<br />
						и примеры некоторых моих работ<br />
						Вы найдете в моем портфолио.
						
					</p>
				</div>
				<div class="span4 social-networks">
					<h3>Мои контакты</h3>
					<p>
						<a class="social-network twitter" target="_blank" href="https://twitter.com/MolchanYaroslav"></a>
						<a class="social-network facebook" target="_blank" href="https://www.facebook.com/yaroslav.molchan"></a>
						<a class="social-network linkedin" target="_blank" href="https://www.linkedin.com/in/yaroslav-molchan"></a>
						<a class="social-network gplus2" target="_blank" href="https://plus.google.com/113165765144788622367"></a>
						<a class="social-network skype" target="_blank" href="skype:yarik_jadson?call"></a>
					</p>
				</div>
				<div class="span4 newsletter">
					<h3>Подписка</h3>
					<p>Подпишитесь на рассылку чтобы первым узнать о новых записях в блоге!</p>
					<img class="ajax-loader" src="img/ajax-loader.gif" alt="" />
					<form method="post" id="newsletter-form">
						<input type="text" placeholder="Введите E-mail" name="email" />
						<input type="hidden" name="bot" /><!-- SPAM protection -->
						<button type="submit" class="icon-ok" id="newsletter-subscribe" ></button>
					</form>
				</div> 
			</div> <!-- end .row -->		
		</div> <!-- end .container -->
	</footer><!-- end #footer -->

	<!-- Javascript - Placed at the end of the document so the pages load faster 
	================================================== -->
	<script type="text/javascript" src="/js/app.js"></script>
	{{--<script type="text/javascript" src="/js/jquery.autocomplete.js"></script>--}}
	<script type="text/javascript" src="/js/typeahead.bundle.js"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="/js/jquery.touchSwipe.min.js"></script>
	<script type="text/javascript" src="/js/jquery.hotkeys.min.js" charset='utf-8'></script>
	<script type="text/javascript" src="/js/functions.js"></script>
	{{-- <script type="text/javascript" src="js/functions.min.js"></script> --}}
	<script>
//		$(function(){
//			console.log('ready');
//			$('#main_search').autocomplete({
//				serviceUrl: '/api/search-articles',
//				type: 'POST',
//				dataType: 'json',
//				deferRequestBy: 100,
//				transformResult: function(response) {
//					return {
//						suggestions: $.map(response.data.data, function(item) {
//							return { value: item.title, data: item.id };
//						})
//					};
//				},
//				onSelect: function (suggestion) {
//					alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
//				}
//			});
//		});
	</script>
	@yield('scripts')
</body>
</html>		