<?php
  require_once('../app/session/sessionClient.php');
  $s = new SessionClient();
  $s->afterConnection();
?>
<!DOCTYPE html>
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
          <li class="nav-item ">
						<a class="nav-link" href="#">
						Profile
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
          <li class="nav-item ">
						<a class="nav-link" href="logout.php">
						  Logout
						</a>
					</li>
          
				</ul>
				<form class="form-inline">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" class="btn btn-in-light my-sm-0" type="submit" />
					<button class="btn btn-light my-sm-0">Search</button>
				</form>
			</div>
		</nav>
    
  </body>
</html>