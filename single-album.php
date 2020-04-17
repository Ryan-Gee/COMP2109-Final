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
            <header class="album-single-display">
				<!-- Display the poast content -->
				<?php the_post(); ?>
				<div class="header-bg"></div>
				<!-- Grab the post thumbnail to use as a large background image -->
				<div class="thumbnail-header"><?php the_post_thumbnail(); ?></div>
				<div class="gradient-black"></div>
				<!-- Insert the title and content from the post itself -->
                <h1><?php the_title(); ?></h1>
				<h3><?php the_content(); ?></h3>
				<!-- Display the taxonomy lists for categories and tags -->
				<p class="taxonomy t-first">
					<?php echo get_the_term_list( $post->ID, 'category', 'Category: ', ', ', '' ); ?>
				</p>
				<p class="taxonomy">
					<?php echo get_the_term_list( $post->ID, 'post_tag', 'Tags: ', ', ', '' ); ?>
				</p>
			</header>
			<footer>
				<?php wp_footer(); ?>
			</footer>
		</div><!-- #page -->
	</body>
</html>