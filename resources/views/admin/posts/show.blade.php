@extends('layouts.admin')

@section('content')

<div class="p-5 bg-light">
    <div class="container">
        <div class="img_container d-flex align-items-center">
            <img src="{{$post->img}}" alt="">
            <h1 class="display-3">{{$post->title}}</h1>
        </div>
        <div class="metadata py-3">
            Categoria: {{$post->category ? $post->category->name : 'Nessuna'}}
        </div>
        <p class="lead py-4">{{$post->content}}</p>
        <hr class="my-2">
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">{{$post->slug}}</a>
        </p>
    </div>
</div>

@endsection