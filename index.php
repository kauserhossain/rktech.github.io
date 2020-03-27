<?php
	$url = 'http://localhost/blog/';
	include('admin/include/connect.php');
	$conn= connectDB();
	
	$skip = 0;
	$take = 2;
	$page = $_GET['page'];
	if($_GET['page']){
	  
	  $skip = ($page - 1)* $take;
	}
	

	
	$result = mysqli_query($conn, " SELECT * FROM post
	ORDER BY id DESC
	LIMIT $skip,$take" ) ;
?>


<!DOCTYPE HTML>
<html lang="en-US">
	<head>
	<!-- Tutorial By- ABDUL KADER- IT-BARI.com -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rk brothers | Rk-Brothers.com</title>
	
	<link rel="stylesheet" href="<?php echo $url;?>admin/assets/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo $url;?>admin/assets/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo $url;?>admin/assets/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo $url;?>admin/assets/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo $url;?>admin/assets/css/nivo-slider.css" type="text/css" media="screen" />		

	
	<link rel="stylesheet" href="<?php echo $url;?>admin/assets/css/style.css" />
	
	<link rel="stylesheet" href="<?php echo $url;?>admin/assets/css/responsive.css" />
	
	<!--
	<link rel="icon" href="img/favicon.png" type="image/png" />
	<link rel="shortcut icon" href="img/favicon.ico" />		
	-->
		
	</head>
	<body>
	<div class="main_wrap header_bg">
		<div class="wrap">
			<header>
				<div id="header">
					<h2>Home Page</h2>
					<p>Subtitle Goes Here</p>
				</div>
			</header>			
		</div>
	</div>	
	<div class="main_wrap nav_bg">
		<div class="wrap">
			<nav>
				<div id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="inside.html">Inside</a></li>
						<li><a href="#">Menu Item</a></li>
						<li><a href="#">Menu Item &raquo;</a>
							<ul>
								<li><a href="#">Dropdown Item</a></li>
								<li><a href="#">Dropdown Item</a></li>
								<li><a href="#">Dropdown Item  &raquo;</a>
									<ul>
										<li><a href="#">Sub Dropdown Item</a></li>
										<li><a href="#">Sub Dropdown Item</a></li>
										<li><a href="#">Sub Dropdown Item</a></li>
										<li><a href="#">Sub Dropdown Item</a></li>
										<li><a href="#">Sub Dropdown Item</a></li>
									</ul>							
								</li>
								<li><a href="#">Dropdown Item</a></li>
								<li><a href="#">Dropdown Item</a></li>
							</ul>
						</li>
						<li><a href="#">Menu Item</a></li>
						<li><a href="#">Menu Item</a></li>
					</ul>
				</div>
			</nav>			
		</div>
	</div>
	<div class="main_wrap slider_bg">
		<div class="wrap">
			<section>
				<div id="slider_wrapper">

					<div class="slider-wrapper theme-bar">
						<div id="slider" class="nivoSlider">
							<img src="admin/assets/img/toystory.jpg" />
							<img src="admin/assets/img/up.jpg" />
							<img src="admin/assets/img/walle.jpg" />
							<img src="admin/assets/img/nemo.jpg" />
						</div> 
					</div>
				</div>					
		</section>			
		</div>
	</div>
	
	<div class="main_wrap content_bg">
		<div class="wrap">
			<div id="content_wrapper">
				<div id="content">
					<?php while ($row = mysqli_fetch_array($result)) { ?>
						<article id="main_article_single">
							<h2><?php echo $row['title'] ?></h2>
							<div id="imgp_wrap">
								<img src="admin/<?php echo $row['image']; ?>" alt="" />
								<p><?php echo substr($row['description'],0,200); ?></p>
							</div>
						</article>					
					<?php } ?>
					<div class="pagination">
					  <a href="<?php echo $url; ?>index.php?page=<?php echo $page - 1 ;?>"class="d1">&laquo;Previous</a>
					  <a href="<?php echo $url; ?>index.php?page=<?php echo $page + 1 ;?>" class="dt">Next&raquo;</a>
					</div>
					
				</div>
				
				<div id="sidebar">
					<aside id="main_sidebar">
						<h2>Sidebar Heading:</h2>
						<ul>
							<li><a href="#">List Item</a></li>
							<li><a href="#">List Item</a></li>
							<li><a href="#">List Item</a></li>
							<li><a href="#">List Item</a></li>
							<li><a href="#">List Item</a></li>
						</ul>
					</aside>
					<aside id="main_sidebar">
						<h2>Sidebar Heading:</h2>
						<ul>
							<li><a href="#">List Item</a></li>
							<li><a href="#">List Item</a></li>
							<li><a href="#">List Item</a></li>
							<li><a href="#">List Item</a></li>
							<li><a href="#">List Item</a></li>
						</ul>
					</aside>
					<aside id="main_sidebar">
						<h2>Sidebar Heading:</h2>
						<ul>
							<li><a href="#">List Item</a></li>
							<li><a href="#">List Item</a></li>
							<li><a href="#">List Item</a></li>
							<li><a href="#">List Item</a></li>
							<li><a href="#">List Item</a></li>
						</ul>
					</aside>
					<aside id="main_sidebar">
						<h2>Sidebar Heading:</h2>
						<ul>
							<li><a href="#">List Item</a></li>
							<li><a href="#">List Item</a></li>
							<li><a href="#">List Item</a></li>
							<li><a href="#">List Item</a></li>
							<li><a href="#">List Item</a></li>
						</ul>
					</aside>
				</div>
			</div>	
		</div>
	</div>
	
	<div class="main_wrap footer_bg">
		<div class="wrap">
			<footer>
				<div id="footer">
					<p>&copy; All Right Reserved By- Rk brothers.com</p>
				</div>
			</footer>			
		</div>
	</div>		
    <script type="text/javascript" src="<?php echo $url;?>admin/assets/js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="<?php echo $url;?>admin/assets/js/jquery.nivo.slider.js"></script>
	
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>	
	
	</body>
</html>