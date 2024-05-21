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

get_header(); ?>

<!-- breadcrumbs -->
<section class="themeBreadcrumbs">
    <div class="cntr">
        <ul class="themeBreadcrumbsList">
            <li class="themeBreadcrumbsItem">
                <a href="/" class="themeBreadcrumbsLink">ホーム</a>
            </li>
            <li class="themeBreadcrumbsItem">
                <a href="#" class="themeBreadcrumbsLink">IR</a>
            </li>
        </ul>
    </div>
</section>
<!-- end of breadcrumbs -->

<!-- page banner -->
<section class="themePageBanner">
    <div class="cntr">
        <div class="themePageBannerWrap">
            <p>インベスター・リレーションズ</p>
            <h2>IR</h2>
        </div>
    </div>
</section>
<!-- end of page banner -->

<!-- company details -->
<section class="themeKoukokuPage themePagePadding">
    <div class="cntr">
        <div class="themeKoukokuPageWrap">
            <div class="themeKoukokuPageRow">
                <div class="themeKoukokuPageCol">
                    <div class="themeKoukokuPageBox">
                        <div class="themeKoukokuPageBoxTitle">
                            <h3>電子広告</h3>
                        </div>
                        <ul class="themeKoukokuPageBoxItem">
                            <li>
                                <a href="#">
                                現在表示する公告はありません。
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="themeKoukokuPageBox">
                        <div class="themeKoukokuPageBoxTitle">
                            <h3>決算公告</h3>
                        </div>
                        <ul class="themeKoukokuPageBoxItem">
                            <li class="themeKoukokuPageBoxItemList">
                                <a href="#">
                                    第2期 決算公告(2022年4月1日〜2023年3月31日) (50.4KB)
                                </a>
                            </li>
                            <li>
                                <a href="#">第1期 決算公告(2021年4月1日〜2022年3月31日) (44.3KB)</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of company details -->

<?php get_footer();