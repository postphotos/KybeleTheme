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
						</div>
					</div>
				</div>

	<?php endwhile; ?>
<?php get_footer();
