@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<a href="{{route('admin.categories.create')}}">Nuovo categoria</a>
			<a href="{{route('admin.posts.index')}}">Vedi i post</a>
		</div>
	</div>
	<div class="row justify-content-center">
		@foreach($categories as $category)

		<div class="col-md-3">
			<div class="card">
				<div class="card-header">{{$category->name}}</div>

				<div class="card-body">
					<h1>{{$category->name}}</h1>
					<div>
						<a href="{{route('admin.categories.edit', ['category' => $category->id])}}">Edit</a>
					</div>
					<div>
						<a href="{{route('admin.categories.show', ['category' => $category->id])}}">Info</a>
					</div>
						<form action="{{route('admin.categories.destroy', compact('category'))}}" method="post">
							@csrf
							@method('DELETE')
							<input type="submit" value="Deleate">
						</form>

				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection