@extends('layouts.app')

@section('content')
<div id="main">
<section>
    @include('common.errors')
    <h3>Create Post</h3>
    <form method="POST" action="/threads">
        {{ csrf_field() }}
        <div class="row uniform">
            <div class="12u$">
                <input type="text" name="title" value="{{ old('title') }}" placeholder="Title" />
            </div>
            <div class="12u$">
                <textarea name="body"  placeholder="Body" rows="6">{{Request::old('body') }}</textarea>
            </div>
            <div class="12u$">
                <ul class="actions">
                    <li><input type="submit" value="Post" /></li>
                </ul>
            </div>
        </div>
    </form>
</section>
@endsection


