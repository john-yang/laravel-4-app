@extends('layouts.master')

@section('sidebar')
    
@section('content')




	<div class="table">


 		<div class="row title">
  			<div class="id">Id</div>
  			<div class="name">Name</div>
  			<div class="kernel">Kernel</div>
  			<div class="instance_profile">Instance Profile</div>
  			<div class="root_device_type">Root Device Type</div>
  			<div class="private_dns_name">Private DNS Name</div>
  			<div class="_state">_State</div>
  			<div class="group_name">Group Name</div>
  			<div class="public_dns_name">Public DNS Name</div>
  			<div class="state_reason">State Reason</div>
		</div>

		<?php
			
	 	  	foreach($arr as $row) 
	 	  	{
	 	  		echo '<div class="row one">';
	  			echo '<div class="id">'.$row['id'].'</div>';
	  			echo '<div class="name">'.$row['name'].'</div>';
	  			echo '<div class="kernel">'.$row['kernel'].'</div>';
	  			echo '<div class="instance_profile">'.$row['instance_profile'].'</div>';
	  			echo '<div class="root_device_type">'.$row['root_device_type'].'</div>';
	  			echo '<div class="private_dns_name">'.$row['private_dns_name'].'</div>';
	  			echo '<div class="_state">'.$row['_state'].'</div>';
	  			echo '<div class="group_name">'.$row['group_name'].'</div>';
	  			echo '<div class="public_dns_name">'.$row['public_dns_name'].'</div>';
	  			echo '<div class="state_reason">'.$row['state_reason'].'</div>';
	  			//echo '<div class="monitored">'.$row['monitored'].'</div';
	  			//echo '<div class="item">'.$row['item'].'</div';
	  			//echo '<div class="subnet_id">'.$row['subnet_id'].'</div';
	  			//echo '<div class="block_device_mapping">'.$row['block_device_mapping'].'</div';
	  			//echo '<div class="platform">'.$row['platform'].'</div';
	  			//echo '<div class="events_set">'.$row['events_set'].'</div';
	  			//echo '<div class="ebs_optimized">'.$row['ebs_optimized'].'</div';
	  			//echo '<div class="">'.$row[''].'</div';
	  			echo '</div>';
	  		}

	  	?>

  	</div><!-- table -->
@stop
