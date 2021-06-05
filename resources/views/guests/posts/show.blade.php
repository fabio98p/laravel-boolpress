@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">

		<div class="col-md-3">
			<div class="card">
				<div class="card-header">{{$post->title}}</div>

				<div class="card-body">
					{{$post->content}}
					@if($post->category_id)
					<div>catetory: {{$post->category->name}}</div>
					@endif
					@foreach($post->tags as $tag)
					<a href="#">#{{$tag->name}}</a>
					@endforeach
					<div>
						<a href="{{route('posts.index')}}">RItorno hai post</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection