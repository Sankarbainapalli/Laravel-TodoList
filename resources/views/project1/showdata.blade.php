@extends('layouts.app')

@section('title')
DataList
@endsection

@section('content')


@if(count($posts)> 0)


<h1>List Of Users</h1>
<table class="table">
  
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">title</th>
      <th scope="col">body</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->title}}</td>
      <td>{{$post->body}}</td>
      
    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">edit</a></td>
    </tr>
    
{!! Form::open(['action' => ['PostsController@destroy',$post->id] , 'method' =>'POST', 'class' => 'pull-left' ]) !!}

{{Form::hidden('_method','DELETE')}}


{{ Form::submit('delete',['class' => 'form-control btn btn-primary'])}}

{!! Form::close() !!}





 @endforeach

  </tbody>
</table>
@endif




@endsection