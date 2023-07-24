@extends('layouts.app')
@section('content')

    <div class="container">
        <h1 class="text-center">All Posts</h1>   
        @if (Auth::check()) 
            <div>
                <a href="/blog/create"  class="btn btn-success mx-4">Add new Post</a>
            </div>
            @if(session()->has('message'))
            <div class="alert alert-success my-3" role="alert">
                {{session()->get('message')}}
              </div>
              @endif
        @endif 
        @foreach ($posts as $post)
         <div class="card" style="margin: 8px">
             <div class="d-flex">
                <img src="{{$post-> image_path}}" alt="card" class="card-img crdimg">
                <div class="col-sm-8">
                <h4>{{$post-> title}}</h4>
                <span>Post by : {{$post->user->name}} , Created at : {{ date('d-m-Y' , strtotime($post->created_at)); }}</span>
                <p>
                    {{$post-> description}}
                </p>
                <a href="blog/{{$post-> slug}}"  class="btn btn-primary">read more</a>
            </div>
        </div>
    </div>
    @endforeach
        
    </div>
@endsection