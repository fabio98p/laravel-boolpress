@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<a href="{{route('admin.tags.create')}}">Nuovo tag</a>
		</div>
	</div>
	<div class="row justify-content-center">

		<div class="col-md-3">
			<div class="card">
				<div class="card-header">{{$tag->name}}</div>

				<div class="card-body">
					<h1>{{$tag->name}}</h1>
					<div>
						<a href="{{route('admin.tags.edit', ['tag' => $tag->id])}}">Edit</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection