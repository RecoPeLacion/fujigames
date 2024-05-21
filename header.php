<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TEMPLATENAME
 */
	$fav = esc_attr( get_option( 'favicon_url' ) );
	$logo = esc_attr( get_option( 'logo_url' ) );
	$fb = esc_attr( get_option('fb_url') );
	$twit = esc_attr( get_option('twitter_url') );
	$insta = esc_attr( get_option('insta_url') );
	$addressUrl = nl2br(esc_attr( get_option( 'address_url' ) ));
	$phoneUrl = esc_attr( get_option( 'phone_url' ) );
	$copyright = esc_attr( get_option( 'copyright_url' ) );
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
		<?php
		bloginfo('name');
		echo ' | ';
        if (wp_title('', false)) {
			echo "";
        } else {
            echo bloginfo('description');
        } wp_title('');
		?>
	</title>
    <link rel="icon" href="<?php echo $logo; ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if( is_singular() && pings_open( get_queried_object() ) ): ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	
    <script src="<?php echo get_template_directory_uri()?>/assets/js/jquery.min.js"></script>
	<?php wp_head(); ?>
	<?php 
		$custom_css = get_option( 'theme_css' );
		if(!empty($custom_css)) {
			?>
				<?php echo '<style type="text/css">'. $custom_css. '</style> '; ?>
			<?php
		}
	?>
</head>
<body <?php body_class(); ?>>

<main>

<header class="mainHeader">
	<div class="cntrXl">
		<div class="mainHeaderLogo">
			<a href="<?php bloginfo('home'); ?>"><img src="<?php echo $logo; ?>" alt="Fujigames logo"></a>
			<div class="mainHeaderHamburger">
				<div class="mainHeaderHamburgerMenu">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
		<div class="mainHeaderNavWrap">
			<?php
				wp_nav_menu( array(
					'theme_location'    => 'primary',
					'depth'             => 2,
					'container'         => 'div',
					'container_class'   => 'mainHeaderNavbar',
					'menu_class'        => 'mainHeaderNav mainHeaderNavbarNav',
					'fallback_cb'       => 'WP_Custom_Navwalker::fallback',
					'walker'            => new WP_Custom_Navwalker(),
				) );
			?>
		</div>
	</div>
</header>