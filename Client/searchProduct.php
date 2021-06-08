<!doctype html>
<html>
	<?php
		require_once('template/headPrincipal.php');
	?>
	<body>
		<?php
			require_once('template/navbar.php');
			activePage("Home");
			require_once('../app/action/Product/searchProductByAlphabet.php');
		?>
		<div class="container py-5">
			<!-- For Demo Purpose-->
			<header class="text-center mb-5">
				<h1 class="display-4 font-weight-bold">Searching a Product</h1>
				    <u>Echry.com</u></a>
				</p>
			</header>
			<section class="pt-5 pb-5">
			<!-- -->
			<?php
				$s="";
				foreach($T as $v)
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