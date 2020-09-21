@extends('layouts.app')

@section('content')
    <br>
    <h1>Posts</h1>
    <br>

    @if(count($posts) > 0)
        @foreach($posts as $post)
            <hr>
            <div class="container d-flex flex-column flex-md-row justify-content-between ">
               <div class="row">
                   <div class="col-md-4 col-sm-4">
                       <img style="width: 50%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
                   </div>
                   <div class="col-md-8 col-sm-8">
                       <h3 class="text-success"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                       <br><br><br>
                       <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                   </div>
               </div>
            </div>
        @endforeach
{{--    {{$posts->links()}}--}}
    @else
        <p>No posts found</p>
    @endif
    <hr>
@endsection
