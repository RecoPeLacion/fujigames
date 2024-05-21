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
                <a href="<?php bloginfo('url'); ?>/contact" class="themeBreadcrumbsLink">お問い合わせ</a>
            </li>
            <li class="themeBreadcrumbsItem">
                <a href="#" class="themeBreadcrumbsLink">サンクス</a>
            </li>
        </ul>
    </div>
</section>
<!-- end of breadcrumbs -->

<!-- page banner -->
<section class="themePageBanner">
    <div class="cntr">
        <div class="themePageBannerWrap">
            <p>お問い合わせ</p>
            <h2>Contact</h2>
        </div>
    </div>
</section>
<!-- end of page banner -->

<!-- thank you details -->
<section class="themeThankYou themePagePadding">
    <div class="cntr">
        <div class="themeThankYouContent">
            <h3>お問い合わせありがとうございます！</h3>
            <h1>Thank you</h1>
            <p>3営業日以内に担当者よりご連絡いたします。</p>
        </div>
    </div>
</section>
<!-- end of thank you details -->

<?php
get_footer();