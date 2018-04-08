@extends('layouts.app')

@section('title')

create Page

@endsection



@section('content')

<h1 align="center"><strong>Contact Us</strong></h1>

<center>
{!! Form::open(['action' => ['PostsController@update',$posts->id], 'method' =>'PUT' ]) !!}

<div class="form-group col-lg-4 ">
<!-- {{ Form::label('name', 'Name')}} -->
{{ Form::text('title', $posts->title,['class' => 'form-control', 'placeholder' => 'title' ])}}
</div>
<div class="form-group col-lg-4">
<!-- {{ Form::label('email', 'Email')}} -->
{{ Form::textarea('body', $posts->body,['class' => 'form-control', 'placeholder' => 'body'] )}}
</div>


<div class="form-group col-lg-4">

	{{Form::hidden('_method','PUT')}}

{{ Form::submit('submit',['class' => ' form-control btn btn-primary'])}}
</div>
{!! Form::close() !!}

</center>



@endsection