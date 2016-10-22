<?php
/*
Template Name: Kitchen Sink
*/
get_header(); ?>


	<?php /* Start loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>

<?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
		?> <style type="text/css">
			#content {
				background-image: <?php the_post_thumbnail_url(); ?>;
			}
		</style> <?php
} 
?>


		<div id="content" role="main" style="background: url('the_post_thumbnail_url( $size );';">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1><hr>
			</header>

			<!-- Main wrapper for the components in the kitchen-sink -->

				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

					<!-- Abide -->
								</div><!-- Close kitchen-sink-page-wrapper -->

		<div class="entry-content">
			
		</div>

	<?php endwhile; ?>
<?php get_footer();
