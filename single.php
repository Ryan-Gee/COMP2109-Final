<?php /* Template Name: Page Default */ ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
		<link rel="stylesheet" href="/wp-content/themes/Subsurface/style.css" />
	</head>
	<body <?php body_class(); ?>>
	<!-- Grab the main menu -->
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'menu' ) );?>
		<div id="page">
            <header class="">
				<?php the_post(); ?>
				<div class="header-bg"></div>
				<div class="thumbnail-header"><?php the_post_thumbnail(); ?></div>
				<div class="gradient-black"></div>
				<!-- Pull in the post title from wordpress -->
                <h1><?php the_title(); ?></h1>
			</header>
			<div class="body-content">
				<!-- Display the post body content -->
				<?php the_content(); ?>
			</div>
			<footer>
				<!-- Pull in the footer -->
				<?php wp_footer(); ?>
			</footer>
		</div><!-- #page -->
	</body>
</html>