<?php
	$url = 'http://localhost/blog/admin/';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    <!-- Bootstrap CSS -->
	<link rel="stylesheet"  type ="text/css"href="<?php echo $url;?>../admin/assets/css/bootstrap.css" />
	<link rel="stylesheet"  type ="text/css" href="<?php echo $url;?>../admin/assets/css/stylee.css" />
    <title>Hello, world!</title>
  </head>
  <body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
		  <a class="navbar-brand" href="#">ARTOFCSE</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">Catagory</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">Post</a>
			  </li>
			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  Dropdown
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				  <a class="dropdown-item" href="#">Action</a>
				  <a class="dropdown-item" href="#">Another action</a>
				  <div class="dropdown-divider"></div>
				  <a class="dropdown-item" href="#">Something else here</a>
				</div>
			  </li>
			</ul>
		  </div>
		  </div>
		</nav>
		
		
		<div class="main_content">
			<div class="container">
				<div class="row clearfix">
					<div class="col-md-3">
						<li class="list-group-item active">Left menu</a></li>
						<li class="list-group-item">
							<a href="<?php echo $url;?>categories/catindex.php">Categories</a>
						</li>
						<li class="list-group-item">
							<a href="<?php echo $url;?>post/postindex.php">post</a>
						</li>
						<li class="list-group-item">
							<a href="#">Update Password</a>
						</li>
						<li class="list-group-item">
							<a href="#">Profile Photo</a>
						</li>
					</div>
					<div class="col-md-9">
					
		