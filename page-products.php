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
                <a href="#" class="themeBreadcrumbsLink">プロダクト</a>
            </li>
        </ul>
    </div>
</section>
<!-- end of breadcrumbs -->

<!-- page banner -->
<section class="themePageBanner">
    <div class="cntr">
        <div class="themePageBannerWrap">
            <p>プロダクト</p>
            <h2>Products</h2>
        </div>
    </div>
</section>
<!-- end of page banner -->

<!-- products -->
<section class="themeProducts themePagePadding">
    <div class="cntr">
        <div class="themeProductsTagline">
            <p>
            フジテレビから分社化したゲーム事業部門をはじめ、アプリ、Webシステムの企画開発から運営・マーケティングまで、エンターテイメント事業で培ったノウハ <br>
            ウで、みなさまにポジティブな話題を提供する事業を展開しています。
            </p>
        </div>
        <div class="themeProductsMainTitle">
            <p>主な事業</p>
            <h3>All Products</h3>
        </div>
        <div class="themeProductsButtons">
            <ul class="themeProductsButtonsList">
                <li>
                    <a href="#item1"><span>DX支援</span></a>
                </li>
                <li>
                    <a href="#item2"><span>業務システム開発</span></a>
                </li>
                <li>
                    <a href="#item3"><span>Web/アプリ開発</span></a>
                </li>
                <li>
                    <a href="#item4"><span>ゲーム開発</span></a>
                </li>
                <li>
                    <a href="#"><span>マーケティング</span></a>
                </li>
            </ul>
        </div>
        <div class="themeProductsWrap">
            <div id="item1" class="themeProductsWrapItem">
                <div class="themeProductsWrapRow">
                    <div class="themeProductsWrapCol">
                        <div class="themeProductsWrapContent">
                            <h3>DX推進</h3>
                            <p>
                                効率化や最適化、デジタル化によるビジネスの高度化をご提案します。<br>
                                加速するビジネスの最前線で一緒に並走しながらバックヤードを支えています。
                            </p>
                            <div class="themeProductsWrapImg vSp">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/prodimg01.jpg" alt="Fuji Games">
                            </div>
                            <div class="themeProductsWrapButton">
                                <a href="#">
                                    DX支援の詳細
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="themeProductsWrapCol">
                        <div class="themeProductsWrapImg vPc">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/prodimg01.jpg" alt="Fuji Games">
                        </div>
                    </div>
                </div>
                <div class="themeProductsCase">
                    <div class="themeProductsMainTitle">
                        <p>実績</p>
                        <h3>Case</h3>
                    </div>
                    <ul id="themeProductsCaseList01" class="themeProductsCaseList">
                        <?php
                            global $post;
                            $args = array(
                                'paged' => $paged,
                                'posts_per_page' => 3, 
                                'orderby' => 'date', 
                                'order' => 'DESC', 
                                'post_type' => 'products',
                                'tax_query' => array(
                                    array(
                                            'taxonomy' => 'products-category',
                                            'field' => 'slug',
                                            'terms' => 'dx-advance'
                                    ),
                                ),
                            );
                            $my_query = new WP_Query($args);
                            $max_num_pages = $my_query->max_num_pages;
                        ?>
                        <?php if( $my_query -> have_posts() ) : while($my_query -> have_posts()) : $my_query -> the_post(); ?>
                            <li id="post-<?php the_ID(); ?>">
                                <div class="themeProductsCaseCard">
                                    <div class="themeProductsCaseImg">
                                        <?php if(has_post_thumbnail()): ?>
                                            <?php
                                                $thumb_id = get_post_thumbnail_id(get_the_ID());
                                                $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                                            ?>
                                            <img title="<?php the_title(); ?>" alt="<?php echo $alt; ?>" class="wp-post-image is-wide" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
                                        <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider03.png" alt="Fuji Games">
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </li>
                        <?php endwhile; endif; ?>
                    </ul>
                    <div class="themeButton">
                        <a href="#">もっと見る</a>
                    </div>
                </div>
            </div>
            <div id="item2" class="themeProductsWrapItem themeProductsWrapItemReverse">
                <div class="themeProductsWrapRow">
                    <div class="themeProductsWrapCol">
                        <div class="themeProductsWrapImg vPc">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/prodimg02.jpg" alt="Fuji Games">
                        </div>
                    </div>
                    <div class="themeProductsWrapCol">
                        <div class="themeProductsWrapContent">
                            <h3>開発</h3>
                            <p>
                                長年のエンターテイメント事業で培ったノウハウを元に、様々なWeb・アプリサー<br>
                                ビスの開発を行います。
                            </p>
                            <div class="themeProductsWrapImg vSp">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/prodimg02.jpg" alt="Fuji Games">
                            </div>
                            <div class="themeProductsWrapButton">
                                <a href="#">
                                    開発の詳細
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="themeProductsCase">
                    <div class="themeProductsMainTitle">
                        <p>実績</p>
                        <h3>Case</h3>
                    </div>
                    <ul id="themeProductsCaseList02" class="themeProductsCaseList">
                    <?php
                            global $post;
                            $args = array(
                                'paged' => $paged,
                                'posts_per_page' => 3, 
                                'orderby' => 'date', 
                                'order' => 'DESC', 
                                'post_type' => 'products',
                                'tax_query' => array(
                                    array(
                                            'taxonomy' => 'products-category',
                                            'field' => 'slug',
                                            'terms' => 'development'
                                    ),
                                ),
                            );
                            $my_query = new WP_Query($args);
                            $max_num_pages = $my_query->max_num_pages;
                        ?>
                        <?php if( $my_query -> have_posts() ) : while($my_query -> have_posts()) : $my_query -> the_post(); ?>
                            <li id="post-<?php the_ID(); ?>">
                                <div class="themeProductsCaseCard">
                                    <div class="themeProductsCaseImg">
                                        <?php if(has_post_thumbnail()): ?>
                                            <?php
                                                $thumb_id = get_post_thumbnail_id(get_the_ID());
                                                $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                                            ?>
                                            <img title="<?php the_title(); ?>" alt="<?php echo $alt; ?>" class="wp-post-image is-wide" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
                                        <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider03.png" alt="Fuji Games">
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </li>
                        <?php endwhile; endif; ?>
                    </ul>
                    <div class="themeButton">
                        <a href="#">もっと見る</a>
                    </div>
                </div>
            </div>
            <div id="item3" class="themeProductsWrapItem">
                <div class="themeProductsWrapRow">
                    <div class="themeProductsWrapCol">
                        <div class="themeProductsWrapContent">
                            <h3>ゲーム</h3>
                            <p>
                            フジゲームスの主幹事業ともいえるゲーム事業は、大型のソーシャルアプリゲーム<br>
                            からカジュアルなブラウザゲームまで幅広い経験と知識をもつゲーム開発チームを <br>
                            有しています。
                            </p>
                            <div class="themeProductsWrapImg vSp">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/prodimg03.jpg" alt="Fuji Games">
                            </div>
                            <div class="themeProductsWrapButton">
                                <a href="#">
                                ゲームの詳細
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="themeProductsWrapCol">
                        <div class="themeProductsWrapImg vPc">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/prodimg03.jpg" alt="Fuji Games">
                        </div>
                    </div>
                </div>
                <div class="themeProductsCase">
                    <div class="themeProductsMainTitle">
                        <p>実績</p>
                        <h3>Case</h3>
                    </div>
                    <ul id="themeProductsCaseList03" class="themeProductsCaseList">
                    <?php
                            global $post;
                            $args = array(
                                'paged' => $paged,
                                'posts_per_page' => 3, 
                                'orderby' => 'date', 
                                'order' => 'DESC', 
                                'post_type' => 'products',
                                'tax_query' => array(
                                    array(
                                            'taxonomy' => 'products-category',
                                            'field' => 'slug',
                                            'terms' => 'game'
                                    ),
                                ),
                            );
                            $my_query = new WP_Query($args);
                            $max_num_pages = $my_query->max_num_pages;
                        ?>
                        <?php if( $my_query -> have_posts() ) : while($my_query -> have_posts()) : $my_query -> the_post(); ?>
                            <li id="post-<?php the_ID(); ?>">
                                <div class="themeProductsCaseCard">
                                    <div class="themeProductsCaseImg">
                                        <?php if(has_post_thumbnail()): ?>
                                            <?php
                                                $thumb_id = get_post_thumbnail_id(get_the_ID());
                                                $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                                            ?>
                                            <img title="<?php the_title(); ?>" alt="<?php echo $alt; ?>" class="wp-post-image is-wide" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
                                        <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider03.png" alt="Fuji Games">
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </li>
                        <?php endwhile; endif; ?>
                    </ul>
                    <div class="themeButton">
                        <a href="#">もっと見る</a>
                    </div>
                </div>
            </div>
            <div id="item4" class="themeProductsWrapItem themeProductsWrapItemReverse">
                <div class="themeProductsWrapRow">
                    <div class="themeProductsWrapCol">
                        <div class="themeProductsWrapImg vPc">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/prodimg04.jpg" alt="Fuji Games">
                        </div>
                    </div>
                    <div class="themeProductsWrapCol">
                        <div class="themeProductsWrapContent">
                            <h3>マーケティング</h3>
                            <p>
                            お客様のニーズを正確に把握し、戦略的なアプローチを用いて最適なソリューショ<br>
                            ンを提供いたします。
                            </p>
                            <div class="themeProductsWrapImg vSp">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/prodimg04.jpg" alt="Fuji Games">
                            </div>
                            <div class="themeProductsWrapButton">
                                <a href="#">
                                マーケティングの詳細
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="themeProductsCase">
                    <div class="themeProductsMainTitle">
                        <p>実績</p>
                        <h3>Case</h3>
                    </div>
                    <ul id="themeProductsCaseList04" class="themeProductsCaseList">
                        <?php
                            global $post;
                            $args = array(
                                'paged' => $paged,
                                'posts_per_page' => 3, 
                                'orderby' => 'date', 
                                'order' => 'DESC', 
                                'post_type' => 'products',
                                'tax_query' => array(
                                    array(
                                            'taxonomy' => 'products-category',
                                            'field' => 'slug',
                                            'terms' => 'marketing'
                                    ),
                                ),
                            );
                            $my_query = new WP_Query($args);
                            $max_num_pages = $my_query->max_num_pages;
                        ?>
                        <?php if( $my_query -> have_posts() ) : while($my_query -> have_posts()) : $my_query -> the_post(); ?>
                            <li id="post-<?php the_ID(); ?>">
                                <div class="themeProductsCaseCard">
                                    <div class="themeProductsCaseImg">
                                        <?php if(has_post_thumbnail()): ?>
                                            <?php
                                                $thumb_id = get_post_thumbnail_id(get_the_ID());
                                                $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                                            ?>
                                            <img title="<?php the_title(); ?>" alt="<?php echo $alt; ?>" class="wp-post-image is-wide" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
                                        <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider03.png" alt="Fuji Games">
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </li>
                        <?php endwhile; endif; ?>
                    </ul>
                    <div class="themeButton">
                        <a href="#">もっと見る</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of products -->

<?php
get_footer();