@if (count($errors) > 0)
	<div class="red">

			@foreach ($errors->all() as $error)
				<li> {{ $error }} </li>
			@endforeach
			<hr>

	</div>
@endif