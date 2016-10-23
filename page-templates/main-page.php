<?php
/*
Template Name: Main
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
				width: 100%; 
			}
			.background {
				z-index: -1;
				height: 100%;
				width: 100%;
				top: 0;
				clip: auto;
				left: 0;
				object-fit: cover;
			}
			.page {
				z-index: 2;
			}
			.large-6 {
				background: rgba(255,255,255,0.6);
				height: 100%;
			}

			.bkg-image {
				background-size:cover;
				height: 999px;
				width: 100%;
				position: absolute;
				top: 0;
				left: 0;
				z-index: -1;
			}
	</style> <?php
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
