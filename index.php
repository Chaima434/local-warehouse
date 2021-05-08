<?php
	session_start();
	if (isset($_SESSION['login']))
	{
		header ('location: Admin/index.php');
	}
	else
	{
		if (isset($_SESSION['loginClient']))
		{
			header ('location: Client/index.php');
		}
	}
	
?>
<!doctype html>
<html>
	<head>
		<title>E-Commerce</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

		<style>
			body
			{
				min-height: 100vh;
				background: #fafafa;
			}
			
			.social-link
			{
				width: 30px;
				height: 30px;
				border: 1px solid #ddd;
				display: flex;
				align-items: center;
				justify-content: center;
				color: #666;
				border-radius: 50%;
				transition: all 0.3s;
				font-size: 0.9rem;
			}
			
			.social-link:hover, .social-link:focus
			{
				background: #ddd;
				text-decoration: none;
				color: #555;
			}
			
			.progress
			{
				height: 10px;
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
			<a class="navbar-brand" href="#">E-Commerce</a>
			<button class="navbar-toggler" type="button"data-toggle="collapse" data-target="#navbarSupportedContent">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">
							Home
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							About
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							Services
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							Contact
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Admin/">
							Admin area
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Client/">
							Client area
						</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link" href="map.php">
						  Map
						</a>
					</li>
				</ul>
				<form class="form-inline">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" class="btn btn-in-light my-sm-0" type="submit" />
					<button class="btn btn-light my-sm-0">Search</button>
				</form>
			</div>
		</nav>
		<div class="container py-5">
			<!-- For Demo Purpose-->
			<header class="text-center mb-5">
				<h1 class="display-4 font-weight-bold">Welcome To Our Shop</h1>
				<p class="font-italic text-muted mb-0">In our shop we have products with extraordinary quality</p>
				<p class="font-italic text-muted">Snippet By <a href="https://bootstrapious.com" class="text-muted">
				    <u>Bootstrapious</u></a>
				</p>
			</header>
			<!-- added by Habib -->
				 <section class="pt-5 pb-5">
			<div class="container">
			  <div class="row">
				  <div class="col-6">
					  <h3 class="mb-3">Carousel cards title </h3>
				  </div>
				  <div class="col-6 text-right">
					  <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
						  <i class="fa fa-arrow-left"></i>
					  </a>
					  <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
						  <i class="fa fa-arrow-right"></i>
					  </a>
				  </div>
				  <div class="col-12">
					  <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
						  <div class="carousel-inner">
							  <div class="carousel-item active">
								  <div class="row">
									  <div class="col-md-4 mb-3">
										  <div class="card">
											  <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
											  <div class="card-body">
												  <h4 class="card-title">Special title treatment</h4>
												  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
											  </div>
										  </div>
									  </div>
									  <div class="col-md-4 mb-3">
										  <div class="card">
											  <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
											  <div class="card-body">
												  <h4 class="card-title">Special title treatment</h4>
												  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
											  </div>
										  </div>
									  </div>
									  <div class="col-md-4 mb-3">
										  <div class="card">
											  <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
											  <div class="card-body">
												  <h4 class="card-title">Special title treatment</h4>
												  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
											  </div>
										  </div>
									  </div>
								  </div>
							  </div>
							  <div class="carousel-item">
								  <div class="row">
									  <div class="col-md-4 mb-3">
										  <div class="card">
											  <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
											  <div class="card-body">
												  <h4 class="card-title">Special title treatment</h4>
												  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		  
											  </div>
		  
										  </div>
									  </div>
									  <div class="col-md-4 mb-3">
										  <div class="card">
											  <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532715088550-62f09305f765?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ebadb044b374504ef8e81bdec4d0e840">
											  <div class="card-body">
												  <h4 class="card-title">Special title treatment</h4>
												  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		  
											  </div>
										  </div>
									  </div>
									  <div class="col-md-4 mb-3">
										  <div class="card">
											  <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=0754ab085804ae8a3b562548e6b4aa2e">
											  <div class="card-body">
												  <h4 class="card-title">Special title treatment</h4>
												  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
											  </div>
										  </div>
									  </div>
								  </div>
							  </div>
							  <div class="carousel-item">
								  <div class="row">
									  <div class="col-md-4 mb-3">
										  <div class="card">
											  <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ee8417f0ea2a50d53a12665820b54e23">
											  <div class="card-body">
												  <h4 class="card-title">Special title treatment</h4>
												  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		  
											  </div>
		  
										  </div>
									  </div>
									  <div class="col-md-4 mb-3">
										  <div class="card">
											  <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532777946373-b6783242f211?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=8ac55cf3a68785643998730839663129">
											  <div class="card-body">
												  <h4 class="card-title">Special title treatment</h4>
												  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		  
											  </div>
										  </div>
									  </div>
									  <div class="col-md-4 mb-3">
										  <div class="card">
											  <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532763303805-529d595877c5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=5ee4fd5d19b40f93eadb21871757eda6">
											  <div class="card-body">
												  <h4 class="card-title">Special title treatment</h4>
												  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
											  </div>
										  </div>
									  </div>
								  </div>
							  </div>
						  </div>
						</div>
					</div>
				</div>
			</div>
		  </section>
			<!-- -->
			<div class="card-group pagination justify-content-center">
				<div class="card">
					<img src="https://res.cloudinary.com/mhmd/image/upload/v1556485076/shoes-1_gthops.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					</div>
				</div>
				<div class="card">
				  <img src="https://res.cloudinary.com/mhmd/image/upload/v1556485076/shoes-1_gthops.jpg" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				  </div>
				</div>
				<div class="card">
				  <img src="https://res.cloudinary.com/mhmd/image/upload/v1556485076/shoes-1_gthops.jpg" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				  </div>
				</div>
			  </div>
						  <div class="card-group">
				<div class="card">
				  <img src="https://res.cloudinary.com/mhmd/image/upload/v1556485076/shoes-1_gthops.jpg" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				  </div>
				</div>
				<div class="card">
				  <img src="https://res.cloudinary.com/mhmd/image/upload/v1556485076/shoes-1_gthops.jpg" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				  </div>
				</div>
				<div class="card">
				  <img src="https://res.cloudinary.com/mhmd/image/upload/v1556485076/shoes-1_gthops.jpg" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				  </div>
				</div>
			  </div>
						  <div class="card-group">
				<div class="card">
				  <img src="https://res.cloudinary.com/mhmd/image/upload/v1556485076/shoes-1_gthops.jpg" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				  </div>
				</div>
				<div class="card">
				  <img src="https://res.cloudinary.com/mhmd/image/upload/v1556485076/shoes-1_gthops.jpg" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				  </div>
				</div>
				<div class="card">
				  <img src="https://res.cloudinary.com/mhmd/image/upload/v1556485076/shoes-1_gthops.jpg" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				  </div>
				</div>
			  </div>
		</div>
	</body>
</html>