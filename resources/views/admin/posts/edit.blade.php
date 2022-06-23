@extends('layouts.admin')

@section('content')

<div class="container py-5">
  <h3>Stai modificando: {{$post->title}}</h3>
@include('partials.error')
<form action="{{route('admin.posts.update', $post->slug)}}" method="post">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="title" class="form-label">Titolo</label>
    <input type="title" class="form-control @error('title') is-invalid @enderror" name="title" id="title" aria-describedby="titlehelp" value="{{old('title')}}">
    <div id="titlehelp" class="form-text">Inserire il titolo del post</div>
  </div>
  <div class="mb-3">
    <label for="content" class="form-label">Contenuto</label>
    <textarea type="text" class="form-control" name="content" id="content" aria-describedby="contenthelp">
    {{old('content')}}
    </textarea>
    <div id="contenthelp" class="form-text">Inserire la descrizione del fumetto</div>
  </div>
  <div class="mb-3">
    <label for="img" class="form-label">Image</label>
    <input type="text" class="form-control" name="img" id="img" aria-describedby="imghelp" value="{{old('img')}}">
    <div id="imghelp" class="form-text">Inserire Immagine del post</div>
  </div>
  <button type="submit" class="btn btn-primary">Modifica</button>
</form>
</div>

@endsection