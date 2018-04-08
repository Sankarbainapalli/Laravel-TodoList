@extends('layouts.app')

@section('title')

ContactPage

@endsection



@section('content')

<h1 align="center"><strong>Contact Us</strong></h1>

<center>
{!! Form::open(['url' => 'contact/submit']) !!}

<div class="form-group col-lg-4 ">
<!-- {{ Form::label('name', 'Name')}} -->
{{ Form::text('name', '',['class' => 'form-control', 'placeholder' => 'Enter name' ])}}
</div>
<div class="form-group col-lg-4">
<!-- {{ Form::label('email', 'Email')}} -->
{{ Form::text('email', '',['class' => 'form-control', 'placeholder' => 'Enter email'] )}}
</div>

<div class="form-group col-lg-4">
<!-- {{ Form::label('message', 'message')}} -->
{{ Form::textarea('message', '',['class' => 'form-control', 'placeholder' => 'Enter message' ])}}
</div>
<div class="form-group col-lg-4">

{{ Form::submit('submit',['class' => ' form-control btn btn-primary'])}}
</div>
{!! Form::close() !!}

</center>



@endsection