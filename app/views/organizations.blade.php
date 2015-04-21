


@extends('layouts.master')

@section('sidebar')
    
@section('content')

	<div class="table">

 		<div class="row title">
  			<div class="id">Id</div>
  			<div class="name">Name</div>
  			<div class="view-accounts">View Accounts</div>
  			<div class="view-instances">View Instances</div>
 			<div class="edit">Update</div>
		</div>

		<?php

	 	  	foreach($organizations as $org) 
	 	  	{
	 	  		echo '<div class="row one">';
	  			echo '<div class="id">'.$org['id'].'</div>';
	  			echo '<div class="name">'.$org['name'].'</div>';
	  			echo '<div class="view-accounts"><a href="organizations/accounts/'.$org['id'].'">View Accounts</a></div>';
	  			echo '<div class="view-instances"><a href="organizations/instances/'.$org['id'].'">View Instances</a></div>';
	  			echo '<div class="edit"><a href="organizations/'.$org['id'].'/edit">UPDATE</a></div>';
	  			echo '</div>';
	  		}
	  	?>

  	</div><!-- table -->


@stop

