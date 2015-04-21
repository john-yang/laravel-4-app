


@extends('layouts.master')

@section('sidebar')
    
@section('content')

	<div class="table">

 		<div class="row title">
 			
  			<div class="id">Id</div>
  			<div class="name">Name</div>
  			<div class="organization_id">Organization ID</div>
		</div>

		<?php

	 	  	foreach($accounts as $acct) 
	 	  	{
	 	  		echo '<div class="row one">';
	  			echo '<div class="id">'.$acct['id'].'</div>';
	  			echo '<div class="name">'.$acct['name'].'</div>';
	  			echo '<div class="organization_id">'.$acct['organization_id'].'</div>';
	  			echo '</div>';
	  		}
	  	?>

  	</div><!-- table -->

@stop

