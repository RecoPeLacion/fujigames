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
                <a href="#" class="themeBreadcrumbsLink">お問い合わせ</a>
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

<!-- contact details -->
<section class="themeContactDetails themePagePadding">
    <div class="cntr">
        <?php echo do_shortcode('[contact-form-7 id="10f62f6" title="Contact form 1"]'); ?>
    </div>
</section>
<!-- end of contact details -->

<?php
get_footer();