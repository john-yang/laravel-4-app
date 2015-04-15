	<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Instance Search</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,700italic,800italic,700,300,800' rel='stylesheet' type='text/css'>

</head>

<body>

	<div class="table" style="margin-top:100px;">


 		<div class="row one">
  			<div class="name title"><span>Email</span></div>
			<div class="region title"><span>Password</span></div>		
			<div class="users title"><span>User Type</span></div>
		</div><!-- row -->

		<?php
			
	 	  	foreach($arr as $row) 
	 	  	{
	 	  		echo '<div class="row">';
	  			echo '<div class="name">'.$row['email'].'</div>';
	  			echo '<div class="region">'.$row['password'].'</div>';
	  			echo '<div class="users">'.$row['user_type'].'</div>';
	  			echo '</div>';
	  		}

	  	?>
  	

 

  	</div><!-- table -->

</body>
</html>
