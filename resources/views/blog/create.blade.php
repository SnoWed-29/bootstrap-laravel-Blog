@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center">Create a new Post</h1>
        <div class="container my-2" >
            <form class="form-control" 
            action="/blog"
            method="POST"
            enctype="multipart/form-data"
            >
            @csrf
                <input type="text" class="form-control my-2" name="title" placeholder="Title">
                <textarea name="description" class="form-control my-2" rows="15"placeholder="Content here"></textarea>
                <input type="file" name="image" class="form-control my-2">
                <button type="submit" class=" btn btn-success btn-lg my-2">Submit The Post</button>
        </form>
    </div>

    </div>
@endsection