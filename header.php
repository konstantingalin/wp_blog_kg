<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" href="#" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
	<?php wp_head(); ?>
</head>
<body>
	<div class="wrapper wrapper-index">
			<header class="section _header" id="_header">
				<div class="section__content">
					<nav class='header_navigation'>
						<div class="header_navigation__item">
							<?php
								wp_nav_menu(
									array(
										'theme_location'  => 'top',
										'container'       => null,
										'menu_class'      => 'header_navigation_menu',
									)
								);
							?>
						</div>
						<div class="header_navigation__item">
							<input autocomplete="off" type="search" name="search" id="search" placeholder='Поиск по блогу'>
						</div>
					</nav>
				</div>
			</header>
	</div>