<?php
/*
Template Name: Slider Page
*/
get_header(); ?>


	<?php /* Start loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<div id="content" role="main">
				<div class="bkg-image" style="background-image: url('<?php the_post_thumbnail_url(); ?>');" alt="Image" />
					<br />
				</div>
				<div class="page row">
					
						<div class="entry-content">
							<?php the_content(); ?>
							<?php if( have_rows('slide_main') ): ?>

									<P> celebrate!</P>
							<?php endif; ?>
						</div>
					</div>
				</div>

	<?php endwhile; ?>
<?php get_footer();
