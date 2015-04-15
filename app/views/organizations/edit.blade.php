

@extends('layouts.master')

@section('sidebar')
    
@section('content')
	<div class="table">

<div id="edit-organization" class="form">

{{ Form::model($organization, ['method' => 'PATCH', 'route' => ['organizations.update', $organization->id]])	 }}

<div>
{{ Form::label('id', 'ID:') }}
{{ Form::text('id') }}
</div>

<div>
{{ Form::label('name','Name:') }}
{{ Form::text('name') }}
</div>

<div>
{{ Form::submit('Update Order') }}
</div>

{{ Form::close() }}

</div><!-- form -->
  	</div><!-- table -->

@stop
