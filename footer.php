<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TEMPLATENAME
 */
$logo = esc_attr( get_option( 'logo_url' ) );

?>

	</main>

	<footer class="mainFooter paddingSection">
		<div class="cntr">
			<a href="<?php bloginfo('home'); ?>" class="mainFooterLogo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-logo.png" alt="Fuji Games">
			</a>
			<div class="mainFooterNavWrap">
				<?php
					wp_nav_menu( array(
						'theme_location'    => 'primary',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => 'mainFooterNavbar',
						'menu_class'        => 'mainFooterNav mainFooterNavbarNav',
						'fallback_cb'       => 'WP_Custom_Navwalker::fallback',
						'walker'            => new WP_Custom_Navwalker(),
					) );
				?>
			</div>
			<div class="mainFooterPrivacy">
				<a href="#">PRIVACY STATEMENT</a>
			</div>
			<p class="mainFooterCopyright">© Fuji Games, Inc. All Rights Reserved</p>
		</div>
	</footer>

	<?php wp_footer(); ?>
	<?php 
		$custom_js = get_option( 'theme_js' );
		if(!empty($custom_js)) {
			?>
				<?php echo '<script>'. $custom_js. '</script> '; ?>
			<?php
		}
	?>
	</body>
</html>