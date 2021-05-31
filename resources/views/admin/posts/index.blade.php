@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<a href="{{route('admin.posts.create')}}">Nuovo post</a>
			<a href="{{route('admin.categories.index')}}">Vedi le categorie</a>
			<a href="{{route('admin.tags.index')}}">Vedi i tag</a>
		</div>
	</div>
	<div class="row justify-content-center">
		@foreach($posts as $post)

		<div class="col-md-3">
			<div class="card">
				<div class="card-header">{{$post->title}}</div>

				<div class="card-body">
					{{$post->content}}
					@if($post->category_id)
					<div>catetory: {{$post->category->name}}</div>
					@endif
					<div>
						<a href="{{route('admin.posts.edit', ['post' => $post->id])}}">Edit</a>
					</div>
					<div>
						<a href="{{route('admin.posts.show', ['post' => $post->id])}}">Info</a>
					</div>
					<form action="{{route('admin.posts.destroy', compact('post'))}}" method="post">
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