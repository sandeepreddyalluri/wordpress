<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Aplite
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="footer-overlay"></div>
	<?php 
		global $accesspresslite_options;
		$accesspresslite_settings = get_option( 'accesspresslite_options', $accesspresslite_options );

		if ( is_active_sidebar( 'footer-1' ) ||  is_active_sidebar( 'footer-2' )  || is_active_sidebar( 'footer-3' )  || is_active_sidebar( 'footer-4' ) ) : ?>
		<div id="top-footer">
		<div class="ak-container">
			<div class="footer1 footer">
				<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
					<?php dynamic_sidebar( 'footer-1' ); ?>
				<?php endif; ?>	
			</div>

			<div class="footer2 footer">
				<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
					<?php dynamic_sidebar( 'footer-2' ); ?>
				<?php endif; ?>	
			</div>

			<div class="clearfix hide"></div>

			<div class="footer3 footer">
				<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
					<?php dynamic_sidebar( 'footer-3' ); ?>
				<?php endif; ?>	
			</div>

			<div class="footer4 footer">
				<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
					<?php dynamic_sidebar( 'footer-4' ); ?>
				<?php endif; ?>	
			</div>
		</div>
		</div>
	<?php endif; ?>

		
		<div id="bottom-footer">
		<div class="ak-container">
			<h1 class="site-info">
				<?php esc_html_e('WordPress Theme:', 'aplite'); ?> 
				<a href="<?php echo esc_url( 'https://accesspressthemes.com/' );?>" title="AccessPress Themes" target="_blank">Aplite</a>
			</h1><!-- .site-info -->

			<div class="copyright">
				<?php esc_html_e('Copyright','aplite'); ?> &copy; <?php echo esc_html(date( 'Y' )); ?> 
				<a href="<?php echo esc_url( home_url() ); ?>">
				<?php 
					if( !empty( $accesspresslite_settings['footer_copyright'] ) ){
						echo wp_kses_post($accesspresslite_settings['footer_copyright']); 
					}else{
						echo esc_html(bloginfo( 'name' ));
					} 
				?>
				</a>
			</div>
		</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>