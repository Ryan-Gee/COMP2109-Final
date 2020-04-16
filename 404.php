<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
		<link rel="stylesheet" href="/wordpress/wp-content/themes/Subsurface/style.css" />
	</head>
	<body <?php body_class(); ?>>
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'menu-primary' ) );?>
		<div id="page">
            <header>
                <div class="header-bg-err"></div>
                <h1>404.</h1>
                <h3>That would be an error.</h3>
            </header>
			<footer>
			</footer>
		</div><!-- #page -->
		<?php wp_footer(); ?>
	</body>
</html>