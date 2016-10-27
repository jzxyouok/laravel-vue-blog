@extends('layouts.app')

@section('content')
<!-- Example of image blog item
================================================== -->
{{-- <article class="post single-post text-post"> --}}
<article class="post single-post text-post">

	<!-- entry media -->
	<a href="blog-single.html" class="entry-media">
		<img src="http://farm8.staticflickr.com/7111/7048321321_9943607a32_c.jpg" alt="" />
	</a>

	<!-- entry meta -->
	<div class="entry-meta">
		<span class="entry-type"></span>
		<span class="entry-date">{!! $article->created_at->diffForHumans() !!}</span>
	</div>

	<!-- entry body -->
	<div class="entry-body">
		<h2 class="entry-title">
			{!! $article->title !!}
		</h2>
	</div>

	<div class="entry-content">
		{!! $article->description !!}
		<p><a href="#" title=""><i>Author</i></a></p>
	</div>

	<!-- clearfix -->
	<div class="clr"></div>

	<!-- Comments
	================================================== -->
	<section id="comments">
		
		<h4>Comments <span>(4)</span></h4>

		<ol class="commentlist">

			<!-- Comment -->
			<li>
				
				<!-- Single comment -->
				<div class="comment">
					<div class="avatar"><img src="http://www.gravatar.com/avatar/?d=mm&amp;s=50" alt="" /></div>
					<div class="comment-meta">
						<strong>John Doe</strong> 
						<span class="date">5 February 2012</span> / 
						<span class="reply"><a href="#">Reply</a></span>
					</div>
					<div class="comment-body">
						Maecenas dignissim euismod nunc, in commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus. Mauris a felis arcu, vitae sollicitudin mauris. Aliquam quis tellus vel massa mattis ornare et eu felis. 
					</div>
				</div>

				<!-- Replies -->
{{-- 				<ol class="comment-replies">
					<li>
						<div class="comment">
							<div class="avatar"><img src="http://www.gravatar.com/avatar/?d=mm&amp;s=50" alt="" /></div>
							<div class="comment-meta">
								<strong>John Doe</strong> 
								<span class="date">5 February 2012</span> / 
								<span class="reply"><a href="#">Reply</a></span>
							</div>
							<div class="comment-body">
								Maecenas dignissim euismod nunc, in commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus. Mauris a felis arcu, vitae sollicitudin mauris. Aliquam quis tellus vel massa mattis ornare et eu felis. 
							</div>
						</div>
					</li>
				</ol> --}}

			</li>
			<!-- end Comment -->
			
			<li>
				<div class="comment">
					<div class="avatar"><img src="http://www.gravatar.com/avatar/?d=mm&amp;s=50" alt="" /></div>
					<div class="comment-meta">
						<strong>John Doe</strong> 
						<span class="date">5 February 2012</span> / 
						<span class="reply"><a href="#">Reply</a></span>
					</div>
					<div class="comment-body">
						Maecenas dignissim euismod nunc, in commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus. Mauris a felis arcu, vitae sollicitudin mauris. Aliquam quis tellus vel massa mattis ornare et eu felis. 
					</div>
				</div>
			</li>
			<li>
				<div class="comment">
					<div class="avatar"><img src="http://www.gravatar.com/avatar/?d=mm&amp;s=50" alt="" /></div>
					<div class="comment-meta">
						<strong>John Doe</strong> 
						<span class="date">5 February 2012</span> / 
						<span class="reply"><a href="#">Reply</a></span>
					</div>
					<div class="comment-body">
						Maecenas dignissim euismod nunc, in commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus. Mauris a felis arcu, vitae sollicitudin mauris. Aliquam quis tellus vel massa mattis ornare et eu felis. 
					</div>
				</div>
			</li>
		</ol><!-- end .commentlist -->

		<h4>Leave a comment</h4>

		<br />

		<!-- Comment form
		================================================== -->
		<form action="" class="row">
			<div class="span3">
				<label>Name</label>
				<input type="text" name placeholder="Your name" />
			</div>
			<div class="span3">
				<label>E-mail</label>
				<input type="email" name placeholder="@" />
			</div>
			<div class="span8">
				<label>Your comment</label>
				<textarea name rows="6" placeholder="Your comment"></textarea>
				<p>
					<button type="submit" class="button yellow"><i class="icon-ok"></i> Post your comment</button>
				</p>
			</div>
		</form>

	</section>

</article><!-- end item -->
@endsection