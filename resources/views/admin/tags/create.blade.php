@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>nuovo tag</h3>
		</div>
	</div>
	@if ($errors->any())
	<div class="row">
		<div class="col-md-12">
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
	@endif
	<div class="row justify-content-center">
		<div class="col-md-8">
			<form action="{{route('admin.tags.store')}}" method="post">
				@csrf
				@method('POST')

				<div class="form-group">
					<label for="name">Nome tags</label>
					<input class="form-control" id='name' type="text" name='name' value='{{old("name")}}'>
				</div>

				<button class="btn btn-primary" type="submit">Salva</button>
			</form>
		</div>
	</div>
</div>
@endsection