<?php /* Template Name: Cart */ ?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
		<link rel="stylesheet" href="/wp-content/themes/Subsurface/style.css" />
	</head>
	<body <?php body_class(); ?>>
	<!-- Use our awesome custom main menu -->
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'menu' ) );?>
		<div id="page">
            <header>
				<div class="header-bg"></div>
				<!-- Grab the title from the wordpress post -->
                <h1><?php the_title(); ?></h1>
			</header>
			<div id="body">
			<?php
			// Use the woocommerce shortcode to dsiplay the cart
				echo do_shortcode("[woocommerce_cart]");
			?>
			</div>
			<footer>
				<!-- Pull in the custom footer -->
				<?php wp_footer(); ?>
			</footer>
		</div><!-- #page -->
	</body>
</html>