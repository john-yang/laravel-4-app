@extends('layouts.master')

@section('content')

	<div class="table">

<div id="add-organization" class="form">
{{ Form::open(['route' => 'organizations.store']) }}

<div>
{{ Form::label('username', 'Username:') }}
{{ Form::text('username') }}
</div>

<div>
{{ Form::label('password','Password:') }}
{{ Form::text('password') }}
</div>



<div>
{{ Form::submit('Sign In') }}
</div>

{{ Form::close() }}


</div><!-- form -->

  	</div><!-- table -->
  	@stop