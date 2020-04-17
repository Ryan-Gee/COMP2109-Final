<?php /* Template Name: Checkout */ ?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
		<link rel="stylesheet" href="/wp-content/themes/Subsurface/style.css" />
	</head>
	<body <?php body_class(); ?>>
	<!-- Grab the primary main menu -->
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'menu' ) );?>
		<div id="page">
            <header>
				<div class="header-bg"></div>
				<!-- Display page title from page information -->
                <h1><?php the_title(); ?></h1>
			</header>
			<div id="body">
			<?php
			// Pull the checkout content from the woocommerce shortcode
				echo do_shortcode("[woocommerce_checkout]");
			?>
			</div>
			<footer>
				<!-- Add custom footer -->
				<?php wp_footer(); ?>
			</footer>
		</div><!-- #page -->
	</body>
</html>