<?php
  require_once('../app/session/sessionClient.php');
  $s = new SessionClient();
  $s->afterConnection();
?>
<!doctype html>
<html>
	<?php
		require_once('template/headPrincipal.php');
	?>
	<body>
		<?php
			require_once('template/navbar.php');
			activePage("About");
		?>
        <div class="container py-5">
			<!-- For Demo Purpose-->
			<header class="text-center mb-5">
				<img src="../Public/image/image.webp" />
			</header>
        </div>
		
	</body>
</html>