


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

	 	  	foreach($accounts as $acct) 
	 	  	{
	 	  		echo '<div class="row one">';
	 	  		echo '<div class="edit"><a href="organizations/'.$acct['id'].'/edit">UPDATE</a></div>';
	  			echo '<div class="id">'.$acct['id'].'</div>';
	  			echo '<div class="name">'.$acct['name'].'</div>';
	  			echo '</div>';
	  		}
	  	?>

  	</div><!-- table -->


@stop

