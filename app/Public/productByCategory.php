<!doctype html>
<html>
	<?php
		require_once('template/head.php');
		require_once('../app/action/Product/findProductsByCategory.php');
	?>
	<body>
		<?php
			require_once('template/navbar.php');
			activePage("Category");
		?>
		<div class="container py-5">
			<!-- For Demo Purpose-->
			<header class="text-center mb-5">
				<h1 class="display-4 font-weight-bold">List product of <?php echo $cat; ?> </h1>
			</header> <!-- pagination justify-content-center -->
			<?php
				function line()
				{
					
				}
				$i = 0;
				$s = "";
				foreach($listProduct as $v)
				{
					$label = $v{'label'};
					$number = $v{'number'};
					$price = $v{'price'};
					$description = $v{'description'};
					$photo = $v{'photo'};
					$i++;
					if($i % 3 != 0)
					{
						$s = $s. "($i=$label) ";
					}
					else
					{
						if($i % 3 == 0)
						{
							$s = $s. "($i=$label) <br>";
						}
					}
				}
				echo $s;
					
			?>
			<?php
				//echo $s;
			?>
			
    </body>
</html>