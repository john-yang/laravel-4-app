<!-- Stored in app/views/layouts/master.blade.php -->

	<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reliam App</title>
	{{ HTML::style('css/styles.css') }}
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,700italic,800italic,700,300,800' rel='stylesheet' type='text/css'>

</head>
<nav>
	<ul>
		<li id="logo"><a href="http://homestead.app"><img src="logo.png"></a></li>
		<ul>
		</li>
		
		<li><a href="/organizations">View All Organizations</a></li>
		<li><a href="/accounts">View All Accounts</a></li>		
		<li><a href="/instances">View All Instances</a></li>
		<li><a href="/login">Login</a></li>
		<li id="instances"><a href="http://homestead.app/admin/add-organization">Add Organization</a></li>
		<li><a href="/logout">Logout</a></li>
		<div class="clear"></div>
	</ul>
</nav>

    <body>

        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>


