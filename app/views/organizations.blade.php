


@extends('layouts.master')

@section('sidebar')
    
@section('content')

	<div class="table">

 		<div class="row title">
 			<div class="edit">Update</div>
  			<div class="id">Id</div>
  			<div class="name">Name</div>
		</div>

		<?php

	 	  	foreach($organizations as $org) 
	 	  	{
	 	  		echo '<div class="row one">';
	 	  		echo '<div class="edit"><a href="organizations/'.$org['id'].'/edit">UPDATE</a></div>';
	  			echo '<div class="id">'.$org['id'].'</div>';
	  			echo '<div class="name">'.$org['name'].'</div>';
	  			echo '</div>';
	  		}
	  	?>

  	</div><!-- table -->


@stop

