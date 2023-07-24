@extends('layouts.app')
@section('content')
    <div class="container d-flex justify-content-center flex-column">
        <div class="row">
            <h1 class="text-center">{{$post->title}}</h1>
            @if(session()->has('message'))
            <div class="alert alert-success" role="alert">
                {{session()->get('message')}}
              </div>
              @endif
        <div class="d-flex justify-content-center">
            <span class="text-center">Post by : {{$post->user->name}} <br> Created at : {{ date('d-m-Y' , strtotime($post->created_at)); }}</span>
        </div>
        <div class="d-flex justify-content-center flex-column">
                    <img src="{{$post-> image_path}}" alt="card" class="crdimg2 border my-3">
                    <p style="border-bottom: 2px solid grey;padding-bottom:5px">
                        <b>
                            {{$post->description}}
                        </b>
                    </p>
                    @if (Auth::user() && Auth::user()->id == $post->user_id)                
                        <a href="{{$post->slug}}/edit" class=" btn btn-info my-1">Edit Post</a>
                        <form method="POST" action="{{$post->slug}}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-lg btn-danger my-1">Delete Post</button>
                        </form>
                    @endif
        </div>        
        </div>
    </div>
@endsection