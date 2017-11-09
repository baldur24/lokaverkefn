@extends('layouts.app')

@section('content')
<!-- Main -->

	<div id="main">

		<!-- Post -->

			<article class="post">
				<header>
					<div class="title">
						<h2><a href="/threads/{{ $thread->id }}">{{ $thread->title }}</a></h2>								
					</div>
					<div class="meta">
						<time class="published" >{{ $thread->created_at }}</time>
						<a href="#" class="author"><span class="name"></span>{{ $thread->user->name }}<img src="/images/avatar.jpg" alt="" /></a>
					</div>
				</header>
				<p>{{ $thread->body }}</p>
				<footer>
					<ul class="stats">
							<li><a href="{{ route('thread.like', $thread->id) }}" class="icon fa-heart">{{ $thread->likecounts() }}</a></li>
							
							@if ($thread->isLiked)
						        <a href="{{ route('thread.like', $thread->id) }}" class=""></a>
						    @else
						        <a href="{{ route('thread.like', $thread->id) }}" class=""></a>
						    @endif
						<li><a href="#" class="icon fa-comment">{{ $thread->commentcounts() }}</a></li>
					</ul>
				</footer>
			</article>

			<section>
			    @include('common.errors')
			    <h3>Comment</h3>
			    <form method="POST" action="/threads/{{ $thread->id }}/comment">
			        {{ csrf_field() }}
			        <div class="row uniform">
			            <div class="12u$">
			                <textarea name="body"  placeholder="Write a comment." rows="6"></textarea>
			            </div>
			            <div class="12u$">
			                <ul class="actions">
			                    <li><input type="submit" value="Post Comment" /></li>
			                </ul>
			            </div>
			        </div>
			    </form>
			</section>
			<h3>Comments</h3>
			@foreach ($thread->comments as $comment)
			<article class="mini-post">
				<header>
						<div class="title">
							
							<h4>{{ $comment->body }}</h4>
											
						</div>
						<div class="meta">
							<time class="published" >{{ $comment->created_at }}</time>
							<div class="author"><span class="name"></span>{{ $comment->user->name }}<img src="/images/avatar.jpg" alt="" /></div>
						</div>
				</header>
			</article>
			@endforeach
@endsection