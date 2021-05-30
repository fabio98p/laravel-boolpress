@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
		<div class="col-md-12">
			<a href="{{route('admin.posts.index')}}">Modifica i tuoi post</a>
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
                        <a href="{{route('posts.show', ['post' => $post->slug])}}">Info</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

