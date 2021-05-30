@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Home Page</div>

                <div class="card-body">
                    <div>
                        <a href="{{route('posts.index')}}">Visita i post</a>
                    </div>
                    <div>
                        <a href="{{route('admin.posts.index')}}">Vedi i tuoi post</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
