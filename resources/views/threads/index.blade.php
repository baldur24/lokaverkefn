@extends('layouts.app')

@section('content')
<!-- Main -->

	<div id="main">

		<!-- Post -->
			@foreach ($threads as $thread)
			<article class="post">
				<header>
					<div class="title">
						<h2><a href="/threads/{{ $thread->id }}">{{ $thread->title }}</a></h2>
													
					</div>
					<div class="meta">
						<time class="published" datetime="2015-11-01">{{ $thread->created_at }}</time>
						<a href="#" class="author"><span class="name"></span>{{ $thread->user->name }}<img src="images/avatar.jpg" alt="" /></a>
					</div>
				</header>
				<a href="#" class="image featured"></a>
				<p>{{ $thread->body }}</p>
				<footer>
					<ul class="stats">


						
							@foreach ($thread->likes as $user)
							<li><a href="#" class="icon fa-heart">{{ $user->name }} likes this !</a></li>
							@endforeach
							@if ($thread->isLiked)
						        <a href="{{ route('thread.like', $thread->id) }}" class="icon fa-heart"></a>
						    @else
						        <a href="{{ route('thread.like', $thread->id) }}" class="icon fa-heart"></a>
						    @endif
						




						<li><a href="/threads/{{ $thread->id }}" class="icon fa-comment">{{ $thread->commentcounts() }}</a></li>
					</ul>
				</footer>
			</article>
			@endforeach
@endsection