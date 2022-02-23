@extends('layouts.app')

@section('content')
    <h3>Edit Posts</h3>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'PUT']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}} <br>
        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
<br>
    <div class="form-body">
        {{Form::label('body', 'body')}} <br>
        {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'body'])}}
    </div><br>
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection