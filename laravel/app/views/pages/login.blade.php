@extends('layouts.default')
@section('content')
{{ Form::open(array('url'=>'users/create', 'class'=>'form-signup')) }}

<ul>
	@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
</ul>

{{ Form::text('username', null, array('class'=>'input-block-level', 'placeholder'=>'UserName')) }}
{{ Form::password('password', null, array('class'=>'input-block-level', 'placeholder'=>'Password')) }}

{{ Form::submit('Submit', null, array('class'=>'btn bnt-large btn-primary btn-block')) }}

{{ Form::close() }}

<div class="container">
	@if(Session::has('message'))
		<p class=alert>{{ Session::get('message') }}</p>
	@endif	
	{{ content }}
</div>

@endsection
