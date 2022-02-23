@extends('layouts.app')

@section('content')
    <h3> Posts</h3>
    @if(count($posts) > 0 )
 @foreach($posts as $post)
<div class="well">
<ul class="list-group">
   <li class="list-group-item">
    <h3><a href="{{route('post.show', $post->id)}}">{{$post->title}}</a> </h3></li>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small><BR><BR>
    <ul>
</div>

        @endforeach
        {{$posts->links()}}
    @else
        <p>No Posts found!!
        </p>

    @endif
@endsection