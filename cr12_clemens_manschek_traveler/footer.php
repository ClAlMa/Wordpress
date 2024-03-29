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
			<a href="<?php echo esc_url( __( 'mailto:mansccle@gmx.at' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Clemens&Friends_2019', 'cr12_clemens_manschek_traveler' ), 'WordPress' );
				?>
			</a>


		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>
			


</body>
</html>
