@extends('layouts.master')

@section('content')

<div id="add-organization" class="form" style="width:400px;margin:100px auto;border:1px dashed #aaa;padding:10px;">
<h2>Add New Organization</h2>
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
{{ Form::submit('Add New Organization') }}
</div>

{{ Form::close() }}


</div><!-- form -->

@stop