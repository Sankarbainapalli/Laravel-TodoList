@extends('layouts.app')

@section('title')
DataList
@endsection

@section('content')


@if(count($messages)>0)


<h1>List Of Users</h1>
<table class="table">
	
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">Email</th>
      <th scope="col">Messsage</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($messages as $message)
    <tr>
      <th scope="row">{{$message->id}}</th>
      <td>{{$message->name}}</td>
      <td>{{$message->email}}</td>
      <td>{{$message->message}}</td>
       <td><button class="btn btn-info">Update</button> <a href="/delete"><button class="btn btn-info">Delete</button></a> </td>
    </tr>

    @endforeach
  </tbody>
</table>
@endif




@endsection