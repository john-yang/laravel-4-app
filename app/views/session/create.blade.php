@extends('layouts.master')

@section('content')

	<div class="form-container" style="width:500px;margin:100px auto;border:1px dashed #aaa;padding:10px;">

<div id="login" class="form">
{{ Form::open(['route' => 'session.store']) }}

<h2>Please Login</h2>
<div>
{{ Form::label('username', 'Username:') }}
{{ Form::text('username') }}
</div>

<div>
{{ Form::label('password','Password:') }}
{{ Form::password('password') }}
</div>


<div>
{{ Form::submit('Sign In') }}
</div>

{{ Form::close() }}


</div><!-- form -->

  	</div><!-- table -->

@stop