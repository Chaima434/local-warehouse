<?php
	session_start();
	if (isset($_SESSION['login']))
	{
		header ('location: ../Admin/index.php');
	}
	else
	{
		if (isset($_SESSION['loginClient']))
		{
			header ('location: ../Client/index.php');
		}
	}
?>

<?php
	require_once('../app/connection/Connection.php');
	require_once('../app/model/Category.php');
	require_once('../app/model/Product.php');
	require_once('../app/model/Provider.php');
?>
<head>
	<title>E-Commerce</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
	<link rel="stylesheet" href="template/css/style.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
