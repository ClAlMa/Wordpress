<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cr12_clemens_manschek_traveler
 */

get_header();
?>

<div class="w-100 d-flex justify-content-between row">
	

	<div id="primary" class="content-area col-md-7">
		<main id="main" class="site-main">
		<?php
		while ( have_posts() ) :
			the_post();
?>
		<div class="card-body">
			<a href="<?php the_permalink(); ?>">
<h1><?php the_title(); ?></h1>
</a>
			 <p><?php the_content(); ?>
						 </p>

<div class="w-100 my-2 py-1">
	<div class="card h-100 border-0">
		<div class="embed-responsive embed-responsive-4by3">
			<img src='<?php echo the_post_thumbnail_url(); ?>' alt="" class="img-fluid embed-responsive-item card-img-top">
		</div>
<!-- 		<div class="card-body">
			<a href="<?php the_permalink(); ?>">
<h1><?php the_title(); ?></h1>
</a>
			 <p><?php the_content(); ?>
						 </p> -->
		</div>
		<div class="card-footer d-flex align-items-center justify-content-end">
			<p>
				<?php echo get_the_date(); ?> by <a href="author/<?php the_author_link(); ?>"> <?php the_author(); ?> </a>
			</p>
			
		</div>
	</div>
	
</div>
<?php

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
<div class="col-md-4 my-2">
<?php
get_sidebar();
?>
</div>
</div>
<?php
get_footer();