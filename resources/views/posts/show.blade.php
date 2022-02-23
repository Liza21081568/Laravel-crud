@extends('layouts.app')

@section('content')<br>
<a href="/post" class="btn btn-outline-secondary">Go Back</a><br>
    <br><h3>{{$post->title}}<small style="float:right; font-size:55%;">written on {{$post->created_at}} by {{$post->user->name}}</small></h3>

    <hr>
   <div>
       {!!$post->body!!}
   </div>
  
  <br>
   
   @if(!Auth::guest())
   @if(Auth::user()->id == $post->user_id)
      <a href="/post/{{$post->id}}/edit" class="btn btn-outline-secondary">Edit</a>
      {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'DELETE', 'class' => 'float-xl-end'])!!}
      {{Form::hidden('_method', 'DELETE')}}
      {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
  {!!Form::close()!!}
 @endif
 @endif
  @endsection