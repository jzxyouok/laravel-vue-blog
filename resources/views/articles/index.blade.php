@extends('layouts.app')

@section('content')
	<div v-bind:articles="{{ $articles }}">
		<div v-if="!articles.length">asd</div>
		<div v-if="articles.length > 0">
			<article-item :articles="articles"></article-item>
		</div>
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
	</div>

	<template id="article-item">
	    <div>
	        <article class="post" v-for="aricle in articles">
{{-- 	            <a href="article.link" class="entry-media" v-if="article.image">
	                <img src="http://farm8.staticflickr.com/7192/6902225428_aab1cb4ac6_c.jpg" alt="" />
	            </a>
	            <div class="entry-body">
	                <a href="article.link">
	                    <h2 class="entry-title">@{{ article.title }}</h2>
	                </a>
	                <p>@{{ article.short_description }}</p>
	            </div>
	            <div class="entry-meta">
	                <span class="entry-type"></span>
	                <span class="entry-date">@{{ article.date }}</span>
	                <span class="entry-comments"> @{{ article.comments }} комментариев</span>
	            </div> --}}
	            <div class="clr"></div>
	        </article>
	    </div>
	</template>
@endsection

@section('scripts')
	<script>
		Vue.component('article-item', {
			template: "#article-item",

			props: ['articles']
		});

		const app = new Vue({
		    el: 'section#content',

		    data: {
		    	'articles': []
		    }
		    // props: ['articles'],
		});
	</script>
@endsection