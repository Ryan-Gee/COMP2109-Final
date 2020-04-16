<?php /* Template Name: Product Listing */ ?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
		<link rel="stylesheet" href="/wp-content/themes/Subsurface/style.css" />
	</head>
	<body <?php body_class(); ?>>
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'menu' ) );?>
		<div id="page">
            <header>
                <div class="header-bg"></div>
				<h1><?php the_title(); ?></h1>
				<h3>Browse the hottest current releases.</h3>
			</header>
			<div id="body">
			<?php
				echo do_shortcode("[products]");
			?>
			</div>
			<footer>
				<?php wp_footer(); ?>
			</footer>
		</div><!-- #page -->
	</body>
</html>