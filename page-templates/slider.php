<?php
/*
Template Name: Slider
*/
get_header(); ?>


	<?php /* Start loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>

<?php
} 
?>
		<div id="content" role="main">
				<div class="bkg-image" style="background-image: url('<?php the_post_thumbnail_url(); ?>');" alt="Image" />
					<br />
				</div>
				<div class="page row">
					<div class=".large-offset-1 large-6 end columns">
						<header>
							<h1 class="entry-title"><?php the_title(); ?></h1><hr>
						</header>
					
						<div class="entry-content">
							<?php the_content(); ?>
							<?php if( have_rows('slider_headline') ): ?>

										<ul class="slides">

											<?php while( have_rows('slide_main') ): the_row(); 

												// vars
												$slider_headline = get_sub_field('slider_headline');
												$slider_image = get_sub_field('slider_image');
												$slider_content = get_sub_field('slider_content');
												?>

												<li class="slide">

													<?php if( $grid_header ): ?>
													<div class="row slider">
														<div class="large-12 columns">
															<?php if(get_field('field_name')) { ?><p class="slider-image"><img src="<?php echo $slider_image; ?>"></p><php } ?>
															<h3 class="slider-headline"><?php echo $slider_headline; ?></h3>
															<p class="slider-content"><?php echo $slider_content; ?></p>
														</div>
													</div>
													<?php endif; ?>

												</li>

											<?php endwhile; ?>

										</ul>
							<?php endif; ?>
						</div>
					</div>
				</div>

	<?php endwhile; ?>
<?php get_footer();
