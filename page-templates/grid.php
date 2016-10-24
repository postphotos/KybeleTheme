<?php
/*
Template Name: Grid
*/
get_header(); ?>


	<?php /* Start loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>


	<div id="content" role="main">
				<div class="page row">
					<div class=".large-offset-1 large-6 end columns">
						<header>
							<h1 class="entry-title"><?php the_title(); ?></h1><hr>
						</header>
					
						<div class="entry-content">
							<h1><?php the_title(); ?></h1>
							<?php echo $content; ?>
						</div>

						<?php if( have_rows('grid_section') ): ?> 

									<p> celebrate</p>
							<?php endif; ?>
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
