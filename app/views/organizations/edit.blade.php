

@extends('layouts.master')

@section('sidebar')
    
@section('content')

<div id="edit-organization" class="form" style="width:400px;margin:100px auto;border:1px dashed #aaa;padding:10px;">

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
{{ Form::submit('Update Organization') }}
</div>

{{ Form::close() }}

</div><!-- form -->

@stop
