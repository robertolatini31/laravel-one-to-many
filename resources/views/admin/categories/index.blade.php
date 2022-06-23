@extends('layouts.admin')

@section('content')

<h1>Categories</h1>
@include('partials.session_message')
<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{route('admin.categories.store')}}" method="post" class="d-flex">
                @csrf
                <div class="mb-2 mr-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="nome categoria" aria-describedby="helperName">
                    <small id="helperName" class="text-muted">Aggiungi il nome della categoria</small>
                </div>
                <div class="align-self-center">
                    <button type="submit" class="btn btn-success">Aggiungi</button>
                </div>
                
            </form>
        </div>
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($categories as $category)
                        <tr>
                            <th scope="row">{{$category->id}}</th>
                            <td>{{$category->name}}</td>
                            <td>{{$category->slug}}</td>
                            <td>
                                <form action="{{route('admin.categories.destroy', $category->slug)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th scope="row">Nessuna categoria esistente</th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection