<?php /* Template Name: Account */ ?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
		<link rel="stylesheet" href="/wp-content/themes/Subsurface/style.css" />
	</head>
	<body <?php body_class(); ?>>
	<!-- Pull in our custom main menu -->
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'menu' ) );?>
		<div id="page">
            <header>
				<div class="header-bg"></div>
				<!-- Use the pages title -->
                <h1><?php the_title(); ?></h1>
			</header>
			<div id="body" class="woo-account">
			<?php
			// Use the woocommerce shortcode to display all the account options and settings
				echo do_shortcode("[woocommerce_my_account]");
			?>
			</div>
			<footer>
				<!-- Grab our super cool footer -->
				<?php wp_footer(); ?>
			</footer>
		</div><!-- #page -->
	</body>
</html>