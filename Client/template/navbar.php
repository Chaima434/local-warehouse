<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<?php
    function activePage($page)
    {
        $Home = "";
		$Profile = "";
        $About = "";
        $Services = "";
        $Contact = "";
        $Map = "";
		$Category= "";
		require_once('../app/action/Category/getAll.php');
		$Categories = '';
		foreach($listcat as $v)
		{
			$id = $v{'id'};
			$label = $v{'label'};
			$Categories = $Categories."<a class='dropdown-item' href='productByCategory.php?id=$id&category=$label' href='#'>$label</a>"; 
		}
        switch($page)
        {
            case 'Home' : $Home = 'active';
			break;
			case 'Profile' :$Profile = 'active';
				break;
			case 'About' : $About = 'active';
			break;
			case 'Services' : $Services = 'active';
			break;
			case 'Contact' : $Contact = 'active';
			break;
			case 'Category' : $Category = 'active';
			break;
			default : $Home = 'active';
			break;
        }
		echo
		"
			<nav class='navbar navbar-expand-md navbar-dark bg-dark'>
				<a class='navbar-brand' href='#'>E-Commerce</a>
				<button class='navbar-toggler' type='button'data-toggle='collapse' data-target='#navbarSupportedContent'>
					<span class='navbar-toggler-icon'></span>
				</button>
				<div class='collapse navbar-collapse' id='navbarSupportedContent'>
					<ul class='navbar-nav mx-auto'>
						<li class='nav-item $Home'>
							<a class='nav-link' href='index.php'>
								Home
							</a>
						</li>
						<li class='nav-item $About'>
							<a class='nav-link' href='about.php'>
								About
							</a>
						</li>
						<li class='nav-item dropdown $Category'>
							<a class='nav-link dropdown-toggle' href='http://example.com' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
								Categories
							</a>
							<div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
								$Categories
							</div>
						</li>
						<li class='nav-item $Profile'>
							<a class='nav-link' href='profile.php'>
								Profile
							</a>
						</li>
						<li class='nav-item $Services'>
							<a class='nav-link' href='services.php'>
								Services
							</a>
						</li>
						<li class='nav-item $Contact'>
							<a class='nav-link' href='contact.php'>
								Contact
							</a>
						</li>
						<li class='nav-item'>
							<a class='nav-link' href='logout.php'>
								Logout
							</a>
						</li>
					</ul>
					<form class='form-inline' method='POST' , action='searchProduct.php'>
						<input name='search' id='search' class='form-control mr-sm-2' type='search' placeholder='Search' class='btn btn-in-light my-sm-0' type='submit' />
						<button id='btSearch' class='btn btn-light my-sm-0'>Search</button>
					</form>
				</div>
			</nav>
		";
    }
?>
<script>
	$(document).ready
            (
                function()
                {
                    $("#btSearch").click
                    (
                        function(e)
                        {
							var search = $('#search').val();
							if(search === "")
							{
								$("#search").focus();
                                alertify.error('Search input is empty !');
                                e.preventDefault();
							}
						}
					);
				}
			);
</script>