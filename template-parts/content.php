<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TEMPLATENAME
 */

?>

<!-- breadcrumbs -->
<section class="themeBreadcrumbs">
    <div class="cntr">
        <ul class="themeBreadcrumbsList">
            <li class="themeBreadcrumbsItem">
                <a href="/" class="themeBreadcrumbsLink">ホーム</a>
            </li>
            <li class="themeBreadcrumbsItem">
                <a href="<?php bloginfo('url'); ?>/news" class="themeBreadcrumbsLink">ニュース</a>
            </li>
            <li class="themeBreadcrumbsItem">
                <a href="#" class="themeBreadcrumbsLink"><?php the_title(); ?></a>
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

<!-- news details content -->
<section class="themeNewsDetails themePagePadding">
    <div class="cntr">
        <div class="themeNewsPageWrap">
            <div class="themeNewsDetailsDate">
                <p><?php the_date(); ?></p>
                <?php
                    if (has_category()) {
                        foreach ((get_the_category()) as $category) {
                            echo '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
                        }
                    }
                ?>
            </div>
            <h1><?php the_title(); ?></h1>
            <div class="themeNewsDetailsContent">
                <?php the_content(); ?>
            </div>
        </div>
        <div class="themeNewsPageBack">
            <a href="<?php bloginfo('url'); ?>/news">
                <span>一覧へ戻る</span>
            </a>
        </div>
    </div>
</section>
<!-- end of news details content -->