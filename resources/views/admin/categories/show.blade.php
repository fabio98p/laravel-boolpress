@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<a href="{{route('admin.categories.create')}}">Nuovo category</a>
		</div>
	</div>
	<div class="row justify-content-center">

		<div class="col-md-3">
			<div class="card">
				<div class="card-header">{{$category->name}}</div>

				<div class="card-body">
					<h1>{{$category->name}}</h1>
					<div>
						<a href="{{route('admin.categories.edit', ['category' => $category->id])}}">Edit</a>


					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection