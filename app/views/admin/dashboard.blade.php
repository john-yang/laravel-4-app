@extends('layouts.master')

@section('content')

	<?php echo 'Welcome,'.Auth::user()->username; ?>
@stop