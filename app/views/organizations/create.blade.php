@extends('layouts.master')

@section('content')

	<div class="table">

<div id="add-organization" class="form">
{{ Form::open(['route' => 'organizations.store']) }}

<div>
{{ Form::label('id', 'ID:') }}
{{ Form::text('id') }}
</div>

<div>
{{ Form::label('name','Name:') }}
{{ Form::text('name') }}
</div>

<div>
{{ Form::label('description','Description:') }}
{{ Form::text('description') }}
</div>

<div>
{{ Form::submit('Update Order') }}
</div>

{{ Form::close() }}


</div><!-- form -->

  	</div><!-- table -->

@stop