<!doctype html>
<html>
	<?php
		require_once('template/head.php');
	?>
	<body>
		<?php
			require_once('template/navbar.php');
			activePage("Home");
			require_once('../app/action/Product/getAll.php');
		?>
		<div class="container py-5">
			<!-- For Demo Purpose-->
			<header class="text-center mb-5">
				<h1 class="display-4 font-weight-bold">Welcome To Our Shop</h1>
				<p class="font-italic text-muted mb-0">In our shop we have products with extraordinary quality</p>
				    <u>Echry.com</u>
				</p>
			</header>
			<section class="pt-5 pb-5">
				<div class="container">
					<div class="row">
						<div class="col-6">
							<h3 class="mb-3">
								Our products
							</h3>
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
													<img class="img-fluid" alt="100%x280"  src="https://img.phonandroid.com/2020/10/iphone-12-4.jpg">
													<div class="card-body">
														<h4 class="card-title">
															Special title treatment
														</h4>
														<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
													</div>
												</div>
											</div>
											<div class="col-md-4 mb-3">
												<div class="card">
													<img class="img-fluid" alt="100%x280"  src="https://sgwmscdnimages.azureedge.net/136/10-31-2019/33daa88fc7a49b103.JPG" />
													<div class="card-body">
														<h4 class="card-title">Special title treatment</h4>
														<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
													</div>
												</div>
											</div>
											<div class="col-md-4 mb-3">
												<div class="card">
													<img class="img-fluid" alt="100%x280" src="https://www.it-tunisie.tn/wp-content/uploads/2019/07/Macbook-Air.jpg" />
													<div class="card-body">
														<h4 class="card-title">
															Special title treatment
														</h4>
														<p class="card-text">
															With supporting text below as a natural lead-in to additional content.
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="carousel-item">
										<div class="row">
											<div class="col-md-4 mb-3">
												<div class="card">
													<img class="img-fluid" alt="100%x280" src="https://www.technopro-online.com/9720-large_default/pc-portable-apple-macbook-pro-13-i5-bicoeur-4-go.jpg" />
													<div class="card-body">
														<h4 class="card-title">
															Special title treatment
														</h4>
														<p class="card-text">
															With supporting text below as a natural lead-in to additional content.
														</p>  
													</div>
												</div>
											</div>
											<div class="col-md-4 mb-3">
											<div class="card">
												<img class="img-fluid" alt="100%x280" src="https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/7b7d84ee-2812-4a2a-b786-adb3a7a3d44b/air-presto-id-shoe.png" />
												<div class="card-body">
													<h4 class="card-title">Special title treatment</h4>
													<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
												</div>
											</div>
										</div>
										<div class="col-md-4 mb-3">
											<div class="card">
												<img class="img-fluid" alt="100%x280" src="https://www.cdiscount.com/pdt2/5/9/4/1/700x700/mp13915594/rw/puma-tee-shirt-homme-essentials-puma-noir-s.jpg">
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
												<img class="img-fluid" alt="100%x280" src="https://fimgs.net/mdimg/perfume/375x500.17387.jpg" />
												<div class="card-body">
													<h4 class="card-title">Special title treatment</h4>
													<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
												</div>
											</div>
										</div>
										<div class="col-md-4 mb-3">
											<div class="card">
												<img class="img-fluid" alt="100%x280" src="https://fac.img.pmdstatic.net/fit/https.3A.2F.2Fi.2Epmdstatic.2Enet.2Ffac.2F2021.2F04.2F09.2F4f8b1be8-9975-40c5-8218-f1341496edca.2Ejpeg/850x478/quality/80/crop-from/center/focus-point/388%2C308/tendance-bandana-voici-les-pieces-mode-les-plus-canons-pour-adopter-cet-imprime-star.jpeg" />
												<div class="card-body">
													<h4 class="card-title">Special title treatment</h4>
													<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
												</div>
											</div>
										</div>
										<div class="col-md-4 mb-3">
											<div class="card">
												<img class="img-fluid" alt="100%x280" src="https://www.dhresource.com/0x0/f2/albu/g9/M00/00/DF/rBVaWFy0WRCAe5qEAAHzU6tyNmE104.jpg/fashion-baby-boy-clothes-set-2pcs-letter.jpg">
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
		</div>
	</body>
</html>