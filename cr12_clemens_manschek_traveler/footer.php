<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cr12_clemens_manschek_traveler
 */

?>
		</div> <!-- row -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer text-center bg-dark text-success">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'cr12_clemens_manschek_traveler' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'cr12_clemens_manschek_traveler' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'cr12_clemens_manschek_traveler' ), 'cr12_clemens_manschek_traveler', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>
			


</body>
</html>
