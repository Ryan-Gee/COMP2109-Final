<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
		<link rel="stylesheet" href="./wp-content/themes/Subsurface/style.css" />
	</head>
	<body <?php body_class(); ?>>
	<!-- Grab the main menu -->
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'menu' ) );?>
		<div id="page">
            <header>
                <div class="header-bg"></div>
                <h1>It happens here.</h1>
				<h3>All the hottest music you've never heard of.</h3>
				<!-- Button links to the shop page -->
				<button><a href="/shop/">Shop Now</a></button>
				<!-- Link to the unreleased albums page -->
				<a href="/album" class="title-link">I want to see what's next</a>
			</header>
			<!-- Featured products section with a link to the rest of the items -->
			<div id="body">
				<a href="./shop/"><h3 class="featured-title">Featured Products</h3></a>
			<?php
			// Grab the woocommerce shortcode for featured products and display it
			echo do_shortcode("[featured_products]");
			?>
			</div>
			<footer>
				<?php wp_footer(); ?>
			</footer>
		</div><!-- #page -->
	</body>
</html>