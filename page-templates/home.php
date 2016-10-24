<?php
/*
Template Name: Home
*/
get_header( 'home' ); ?>


	<?php /* Start loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<div id="content" role="main">
			<video id="backvid" autoplay="" loop="">
			  <source src="<?php echo get_field('video_url'); ?>" type="video/mp4">
			 Your browser does not support the video tag.
			</video>
			<div class="background-wrapper">
				<img class="background" src="<?php the_post_thumbnail_url(); ?>">
			</div>
			<div class="home-lower-content small-12 columns">
				<?php the_content(); ?>
			</div>			
		</div>
						
	
	<?php endwhile; ?>

<?php get_footer();
