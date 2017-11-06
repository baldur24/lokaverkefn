@extends('layouts.app')

@section('content')
<div id="main">
<section>
    @include('common.errors')
    <h3>Contact Us</h3>
    <form method="POST" action="/contact">
        {{ csrf_field() }}
        <div class="row uniform">
            <div class="12u$">
                <textarea name="body"  placeholder="Your Concern." rows="6">{{Request::old('body') }}</textarea>
            </div>
            <div class="12u$">
                <ul class="actions">
                    <li><input type="submit" value="Send" /></li>
                </ul>
            </div>
        </div>
    </form>
</section>
@endsection


