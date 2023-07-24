@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center">Edit Post : <span class="text-info">{{$post->title}}</span></h1>
        <div class="container my-2" >
            <form class="form-control" 
            action="/blog/{{$post->slug}}"
            method="POST"
            enctype="multipart/form-data"
            >
            @csrf
            @method('PUT')
                <input type="text" class="form-control my-2" name="title" value="{{$post->title}}">
                <textarea name="description" class="form-control my-2" rows="15">{{$post->description}}</textarea>
                <input type="file" name="image" class="form-control my-2">
                <button type="submit" class=" btn btn-success btn-lg my-2">Save Changes</button>
        </form>
    </div>

    </div>
@endsection