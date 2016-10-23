<?php
/*
Template Name: Home
*/
get_header(); ?>


	<?php /* Start loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>

<?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
		?> <style type="text/css">
			.background-wrapper {
				overflow: hidden;
				position: absolute;
				top: 0;
				left: 0;
				z-index: -1;
			}
			.background {
				z-index: -1;
				width: auto;
				max-width: 100%;
				top: 0;
				left: 0;
			}
			.page {
				z-index: 2;
			}
			.large-6 {
				background: rgba(255,255,255,0.6);
				height: 100%;
			}
		</style> <?php
} 
?>


		<div id="content" role="main">
			<div class="background-wrapper">
				<img class="background" src="<?php the_post_thumbnail_url(); ?>">
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
