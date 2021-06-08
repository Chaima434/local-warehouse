<?php
  require_once('../app/session/sessionClient.php');
  $s = new SessionClient();
  $s->afterConnection();
?>
<!doctype html>
<html>
	<?php
		require_once('template/head.php');
		require_once('../app/action/Product/findProductById.php');
	?>
    <style>
        .card
        {
            margin-left: 18%;      
            margin-right: 18%;
            margin-top: 5%; 
            width: auto;
        }
    </style>
	<body>
        <?php
			require_once('template/navbar.php');
			activePage("Category");
		?>
        <div class="card">
            <center>
                <img src="<?php echo $product->getPhoto(); ?>"
                        class="card-img-top" style="width:25%; height: 25%;" alt="..."
                />
            </center>
            <div class="card-body">
                <h5 class="card-title">
                    Label : <?php echo $product->getLabel(); ?>
                </h5>
                <p class="card-text">
                    <strong>Price : </strong>
                    <?php echo $product->getPrice(); ?> DT
                </p>
                <p class="card-text">
                    <strong>Number : </strong>
                    <?php echo $product->getNumber(); ?> elements
                </p>
                <p class="card-text">
                    <strong>Description : </strong>
                    <?php echo $product->getDescription(); ?>
                </p>
                <!--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>-->
            </div>
        </div>
    </body>
</html>