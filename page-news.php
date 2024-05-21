<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TEMPLATENAME
 */

get_header();
?>

<!-- breadcrumbs -->
<section class="themeBreadcrumbs">
    <div class="cntr">
        <ul class="themeBreadcrumbsList">
            <li class="themeBreadcrumbsItem">
                <a href="<?php bloginfo('url'); ?>" class="themeBreadcrumbsLink">ホーム</a>
            </li>
            <li class="themeBreadcrumbsItem">
                <a href="#" class="themeBreadcrumbsLink">ニュース</a>
            </li>
        </ul>
    </div>
</section>
<!-- end of breadcrumbs -->

<!-- page banner -->
<section class="themePageBanner">
    <div class="cntr">
        <div class="themePageBannerWrap">
            <p>ニュース</p>
            <h2>News</h2>
        </div>
    </div>
</section>
<!-- end of page banner -->

<!-- news list -->
<section class="themeNewsPage themePagePadding">
    <div class="cntr">
        <div class="themeNewsPageWrap">
            <ul class="themeNewsPageList">
                <?php
                if ( get_query_var('paged') ) { $paged = get_query_var('paged'); } else if ( get_query_var('page') ) {$paged = get_query_var('page'); } else {$paged = 1; }
                $temp = $wp_query;
                $wp_query = null;
                $args = array( 'post_type' => 'post', 'order'=>'DESC', 'posts_per_page' => 9, 'paged' => $paged);
                $wp_query = new WP_Query();
                $wp_query->query( $args );
                while ($wp_query->have_posts()) : $wp_query->the_post();
                    ?>
                    <li class="themeNewsPageListItem">
                        <a href="<?php the_permalink(); ?>" class="themeNewsPageListLink">
                            <div class="themeNewsPageListCard">
                                <div class="themeNewsPageListImg">
                                    <?php if(has_post_thumbnail()): ?>
                                        <?php
                                            $thumb_id = get_post_thumbnail_id(get_the_ID());
                                            $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                                        ?>
                                        <img title="<?php the_title(); ?>" alt="<?php echo $alt; ?>" class="wp-post-image is-wide" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri()?>/assets/img/front.jpg" alt="">
                                    <?php endif; ?>
                                </div>
                                <div class="themeNewsPageListContent">
                                    <div class="themeNewsPageListDate">
                                        <p>2024/04/01</p>
                                        <p>プレスリリース</p>
                                    </div>
                                    <h3><?php the_title(); ?></h3>
                                </div>
                            </div>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
            <?php wp_pagination(); ?>
        </div>
    </div>
</section>
<!-- end of news list -->

<?php
get_footer();