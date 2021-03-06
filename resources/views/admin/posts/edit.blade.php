@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-uppercase mb-5">Edit post </h1>
    <form action="{{route('posts.update', $post->id)}}" method="post" >
        @csrf
        @method("PUT")

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{$post->title}}"> 
            @error('title')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" cols="30" rows="10" placeholder="inserisci il contenuto" >{{$post->content}}</textarea>
           
            @error('content')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="published">Publish</label>
           <input type="checkbox" id="published" name="published">
           
            @error('content')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

       <button class="btn btn-success" type="submit" >Add to Database</button>

    </form>
</div>
@endsection