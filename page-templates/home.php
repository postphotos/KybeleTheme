<?php
/*
Template Name: Home
*/
get_header( 'home' ); ?>


	<?php /* Start loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>


		<div id="content" role="main">
			<div class="background-wrapper">
				<img class="background" src="<?php the_post_thumbnail_url(); ?>">
			</div>
			<div class="home-lower-content small-12 columns">
				<?php the_content(); ?>
			</div>			
		</div>
						
	
	<?php endwhile; ?>

<?php get_footer();
