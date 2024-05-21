<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package TEMPLATE NAME
 * 
 */


/*
 * ----------------------------------------------------------------------------------------
 *  THEME SUPPORT
 * ----------------------------------------------------------------------------------------
 */
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'qoute', 'status', 'video', 'audio', 'chat' ) );


/*
 * ----------------------------------------------------------------------------------------
 *  REGISTER THE CUSTOM NAV MENU
 * ----------------------------------------------------------------------------------------
 */
function register_navwalker(){
	require_once get_template_directory() . '/walker/class-wp-custom-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );


//Numeric Pagination
function wp_pagination() {
    global $wp_query;
    $big = 12345678;
    $page_format = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'type'  => 'array',
        'prev_text' => __('<'),
        'next_text' => __('>'),
    ) );
    if( is_array($page_format) ) {
                $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
                echo '<div class="pagination"><ul>';
                foreach ( $page_format as $page ) {
                        echo "<li>$page</li>";
                }
                echo '</ul></div>';
    }
}

/*
 * ----------------------------------------------------------------------------------------
 *  ALLOW SVG
 * ----------------------------------------------------------------------------------------
 */
function allow_svg_upload( $mimes ) {
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'allow_svg_upload' );


/*
 * ----------------------------------------------------------------------------------------
 *  SEARCH QUERY
 * ----------------------------------------------------------------------------------------
 */
function custom_search_filter($query) {
    if ($query->is_search && !is_admin()) {
        $query->set('post_type', array('post', 'offices', 'resolutions', 'ordinances', 'coucilor', 'barangay'));
    }
    return $query;
}
add_filter('pre_get_posts', 'custom_search_filter');



/*
 * ----------------------------------------------------------------------------------------
 *  AJAX SEARCH QUERY
 * ----------------------------------------------------------------------------------------
 */
