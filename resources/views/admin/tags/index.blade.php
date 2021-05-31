@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<a href="{{route('admin.tags.create')}}">Nuovo tag</a>
			<a href="{{route('admin.posts.index')}}">Vedi i post</a>
		</div>
	</div>
	<div class="row justify-content-center">
		@foreach($tags as $tag)

		<div class="col-md-3">
			<div class="card">
				<div class="card-header">{{$tag->name}}</div>

				<div class="card-body">
					<h1>{{$tag->name}}</h1>
					<div>
						<a href="{{route('admin.tags.edit', ['tag' => $tag->id])}}">Edit</a>
					</div>
					<div>
						<a href="{{route('admin.tags.show', ['tag' => $tag->id])}}">Info</a>
					</div>
						<form action="{{route('admin.tags.destroy', compact('tag'))}}" method="post">
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