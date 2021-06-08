<?php
  require_once('../app/session/sessionClient.php');
  $s = new SessionClient();
  $s->afterConnection();
?>
<!DOCTYPE html>
<html>
  <?php
    require_once('template/headPrincipal.php');
    require_once('../app/action/Product/getAll.php');
  ?>
  <body>
    <?php
      require_once('template/navbar.php');
      activePage("");
    ?>
    		<div class="container py-5">
			<!-- For Demo Purpose-->
			<header class="text-center mb-5">
				<h1 class="display-4 font-weight-bold">Welcome To Our Shop</h1>
				<p class="font-italic text-muted mb-0">In our shop we have products with extraordinary quality</p>
				    <u>Echry.com</u></a>
				</p>
			</header>
			<!-- added by Habib -->
				 <section class="pt-5 pb-5">
			<div class="container">
			  <div class="row">
				  <div class="col-6">
					  <h3 class="mb-3">Our products</h3>
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
											  <img class="img-fluid" alt="100%x280"  src="image/7.jpg">
											  <div class="card-body">
												  <h4 class="card-title">Special title treatment</h4>
												  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
											  </div>
										  </div>
									  </div>
									  <div class="col-md-4 mb-3">
										  <div class="card">
											  <img class="img-fluid" alt="100%x280"  src="image/8.jpeg">
											  <div class="card-body">
												  <h4 class="card-title">Special title treatment</h4>
												  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
											  </div>
										  </div>
									  </div>
									  <div class="col-md-4 mb-3">
										  <div class="card">
											  <img class="img-fluid" alt="100%x280" src="image/9.jpg">
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
											  <img class="img-fluid" alt="100%x280" src="image/4.jpg">
											  <div class="card-body">
												  <h4 class="card-title">Special title treatment</h4>
												  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		  
											  </div>
		  
										  </div>
									  </div>
									  <div class="col-md-4 mb-3">
										  <div class="card">
											  <img class="img-fluid" alt="100%x280" src="image/5.jpeg">
											  <div class="card-body">
												  <h4 class="card-title">Special title treatment</h4>
												  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		  
											  </div>
										  </div>
									  </div>
									  <div class="col-md-4 mb-3">
										  <div class="card">
											  <img class="img-fluid" alt="100%x280" src="image/6.jpg">
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
											  <img class="img-fluid" alt="100%x280" src="image/1.jpg">
											  <div class="card-body">
												  <h4 class="card-title">Special title treatment</h4>
												  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		  
											  </div>
		  
										  </div>
									  </div>
									  <div class="col-md-4 mb-3">
										  <div class="card">
											  <img class="img-fluid" alt="100%x280" src="image/2.jpeg">
											  <div class="card-body">
												  <h4 class="card-title">Special title treatment</h4>
												  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		  
											  </div>
										  </div>
									  </div>
									  <div class="col-md-4 mb-3">
										  <div class="card">
											  <img class="img-fluid" alt="100%x280" src="image/3.jpg">
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
			<?php
				$s="";
				foreach($product->getAll() as $v)
				{
					$id = $v{'id'};
					$label = $v{'label'};
					$number = $v{'number'};
					$price = $v{'price'};
					$description = $v{'description'};
					$photo = $v{'photo'};
					$s = $s.
							"<div class='column card'>
								<img src='$photo' class='card-img-top' style='height:150px; width:150px;'  alt='...' />
								
								<div class='card-body'>
									<h5 class='card-title'> Product name : $label</h5>
									<p class='card-text'><strong>Price : </strong>$price</p>
									<p class='card-text'><strong>number : </strong>$number</p>
									<p class='card-text'>
										<a href='detailProduct.php?id=$id'>
											View more
										</a>
									</p>
								</div>
							</div>";
				}
			?>
			<?php
				echo $s;
			?>
  </body>
</html>