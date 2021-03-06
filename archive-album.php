<?php /* Template Name: Album Archive */ ?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
		<link rel="stylesheet" href="/wp-content/themes/Subsurface/style.css" />
	</head>
	<body <?php body_class(); ?>>
	<!-- Pull in the main menu -->
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'menu' ) );?>
		<div id="page">
            <header>
                <div class="header-bg"></div>
                <h1>Get ready for these.</h1>
                <h3>Find the next big artists before anyone else.</h3>
			</header>
			<div id="album-body">
				<?php
				// Grab all the albums using our custom album shortcode, albums are pulled automatically by this file's name
					while ( have_posts() ) :
						do_shortcode("[album_shortcode]");
					endwhile;
				?>
			</div>
			<footer>
				<!-- Use our custom footer -->
				<?php wp_footer(); ?>
			</footer>
		</div><!-- #page -->
	</body>
</html>