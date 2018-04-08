<!-- @extends('layouts.app')

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
     
      <td>{{$post->title}}</td>
      <td>{{$post->body}}</td>
      
       </tr>

    @endforeach
  </tbody>
</table>
@endif




@endsection -->