<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
		<link rel="stylesheet" href="./wp-content/themes/Subsurface/style.css" />
	</head>
	<body <?php body_class(); ?>>
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'menu' ) );?>
		<div id="page">
            <header>
                <div class="header-bg"></div>
                <h1>It happens here.</h1>
                <h3>All the hottest music you've never heard of.</h3>
				<button><a href="/shop/">Shop Now</a></button>
				<a href="/album" class="title-link">I want to see what's next</a>
			</header>
			<div id="body">
				<a href="./shop/"><h3 class="featured-title">Featured Products</h3></a>
			<?php
			echo do_shortcode("[featured_products]");
			?>
			</div>
			<footer>
				<?php wp_footer(); ?>
			</footer>
		</div><!-- #page -->
	</body>
</html>