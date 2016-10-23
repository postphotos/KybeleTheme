<?php
/*
Template Name: Grid
*/
get_header(); ?>


	<?php /* Start loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>


	<div id="content" role="main">
			<div class="background-wrapper">
				<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				?><img class="background" src="<?php the_post_thumbnail_url(); ?>"><?php } ?>
			</div>
				<div class="page row">
					<div class=".large-offset-1 large-6 end columns">
						<header>
							<h1 class="entry-title"><?php the_title(); ?></h1><hr>
						</header>
					
						<div class="entry-content">
							<h1><?php the_title(); ?></h1>
							<?php echo $content; ?>
						</div>
					</div>
				</div>


		<?php if( have_rows('slider_headline') ): ?>

			<ul class="slides">

				<?php while( have_rows('grid_section') ): the_row(); 

					// vars
					$slider_headline = get_sub_field('slider_headline');
					$slider_image = get_sub_field('slider_image');
					$slider_content = get_sub_field('slider_content');
					?>

					<li class="slide">

						<?php if( $grid_header ): ?>
							<h1><?php echo $grid_header; ?></h1>
						<?php endif; ?>

					</li>

				<?php endwhile; ?>

			</ul>

		<?php endif; ?>

	<?php endwhile; ?>



<?php get_footer();
