@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div><br>

                <div class="card-body">
                  <a href="/post/create" class="btn btn-primary">Create Post</a><br><br>
                  <h3> Your Blog Posts </h3>
                  <br>
                 @if(count($posts) > 0)
                    <table class="table table-striped">
                        <tr>    
                         <th>Title</th>
                         <th></th>
                         <th></th>
                          </tr>
                          @foreach($posts as $post)
                          <tr>    
                             <th>{{$post->title}}</th>
                             <th> <a href="/post/{{$post->id}}/edit" class="btn btn-primary"> Edit </a> </th>
                             <th></th>
                            
                              <th>{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'DELETE', 'class' => 'float-xl-end'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                               {!!Form::close()!!}</th>  </tr>
                          @endforeach
                          @else
                              <h3> You have no  posts.</h3>
                          @endif
                          
                        </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
