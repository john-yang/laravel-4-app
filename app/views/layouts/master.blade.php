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
		<li id="organizations"><a href="http://homestead.app/organizations">All Organizations</a></li>
		<li id="instances"><a href="http://homestead.app/organizations/create">Add Organization</a></li>
		<li id="accounts"><a href="http://homestead.app/instances">All Instances</a></li>
		<li id="documentation"><a href="#">Documentation</a></li>
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


