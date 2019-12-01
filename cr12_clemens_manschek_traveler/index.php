<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cr12_clemens_manschek_traveler
 */

get_header();
?>

	<div id="primary" class="content-area col-md-8 row my-2">

		<main id="main" class="site-main row d-flex justify-content-around">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
?>
<div class="col-12 col-lg-6 col-xl-4 my-1 py-1">
	<div class="card h-100 border-1">
		<div class="embed-responsive embed-responsive-4by3">
			<img src='<?php echo the_post_thumbnail_url(); ?>' alt="" class="img-fluid embed-responsive-item card-img-top">
		</div>
		<div class="card-body">
			<a href="<?php the_permalink(); ?>">
<h1><?php the_title(); ?></h1>
</a>
			 <p><?php the_content(); ?>
						 </p>
		</div>
		<div class="card-footer d-flex align-items-center justify-content-end">
			<p>
				<?php echo get_the_date(); ?> by <a href="author/<?php the_author_link(); ?>"> <?php the_author(); ?> </a>
			</p>
			
		</div>
	</div>
	
</div>
<?php
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				// get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
<div class="col-md-4 my-2">

<?php
get_sidebar();
?>
</div>
<?php
get_footer();
