@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<a href="{{route('admin.posts.create')}}">Nuovo post</a>
		</div>
	</div>
	<div class="row justify-content-center">

		<div class="col-md-3">
			<div class="card">
				<div class="card-header">{{$post->title}}</div>

				<div class="card-body">
					{{$post->content}}
					<div>catetory: {{$category}}
					</div>
					<div>
						<a href="{{route('admin.posts.edit', ['post' => $post->id])}}">Edit</a>


					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection