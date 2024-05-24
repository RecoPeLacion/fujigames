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

<!-- banner -->
<section class="themeBanner">
    <div class="cntrXl">
        <div class="themeBannerWrap">
            <div class="themeBannerSlider">
                <ul class="themeBannerSliderList">
                    <li>
                        <div class="themeBannerSliderCard">
                            <div class="themeBannerSliderImg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider01.jpg" alt="Fuji Games">
                            </div>
                            <div class="themeBannerSliderContent">
                                <h3>テルマエ・ロマエ ガチャ</h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="themeBannerSliderCard">
                            <div class="themeBannerSliderImg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider02.png" alt="Fuji Games">
                            </div>
                            <div class="themeBannerSliderContent">
                                <h3>ゲゲゲの鬼太郎 妖怪横丁</h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="themeBannerSliderCard">
                            <div class="themeBannerSliderImg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider03.png" alt="Fuji Games">
                            </div>
                            <div class="themeBannerSliderContent">
                                <h3>ゲゲゲの鬼太郎 妖怪横丁</h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="themeBannerSliderCard">
                            <div class="themeBannerSliderImg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider04.png" alt="Fuji Games">
                            </div>
                            <div class="themeBannerSliderContent">
                                <h3>料理の鉄人</h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="themeBannerSliderCard">
                            <div class="themeBannerSliderImg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider05.png" alt="Fuji Games">
                            </div>
                            <div class="themeBannerSliderContent">
                                <h3>大漁！地引網</h3>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="themeBannerNewsListWrap">
                <h3>NEWS</h3>
                <ul class="themeBannerNewsList">
                    <?php
                    $three_months_ago = date('Y-m-d', strtotime('-3 months'));
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'order' => 'DESC',
                        'posts_per_page' => 1, 
                        'date_query' => array(
                            array(
                                'after' => $three_months_ago,
                                'inclusive' => true,
                            ),
                        ),
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                            ?>
                                <li class="themeBannerNewsListItem">
                                    <a href="<?php the_permalink(); ?>" class="themeBannerNewsListLink">
                                        <span class="themeBannerNewListDate"><?php the_date('Y/m/d'); ?></span>
                                        <p class="themeBannerNewsListText"><?php the_title(); ?></p>
                                    </a>
                                </li>
                            <?php
                        }
                    } else {
                        echo 'No posts found.';
                    }
                    wp_reset_postdata();
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end of banner -->

<!-- company -->
<section class="themeCompany paddingSection">
    <div class="cntr">
        <div class="themeRow">
            <div class="themeCol">
                <div class="themeTitle">
                    <h3>COMPANY</h3>
                    <p>会社概要</p>
                </div>
                <div class="themeCompanyContent">
                    <div class="themeCompanyImg vSp">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-img.png" alt="Fuji Games">
                    </div>
                    <p>
                    私たちは企業活動を通じて文化の発展に貢献し、人々の心を豊かにしたいと考えてお <br class="vPc">
                    り、すべての人々の心を豊かにすることの実現を目指しています。
                    </p>
                    <div class="themeButton">
                        <a href="<?php bloginfo('url'); ?>/company">会社概要を見る</a>
                    </div>
                </div>
            </div>
            <div class="themeCol vPc">
                <div class="themeCompanyImg vPc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-img.png" alt="Fuji Games">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of company -->

<!-- products -->
<section class="themeProducts paddingSection">
    <div class="cntr">
        <div class="themeRow">
            <div class="themeCol">
                <div class="themeTitle">
                    <h3>PRODUCTS</h3>
                    <p>プロダクト一覧</p>
                </div>
                <div class="themeCompanyImg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products.jpg" alt="Fuji Games">
                </div>
            </div>
            <div class="themeCol">
                <div class="themeCompanyContent">
                    <p>
                        ゲーム、システム開発、DX、広告、マーケティングなど、デジタルの力を駆使した <br class="vPc">
                        コンテンツやサービスなどのプロダクトをご紹介いたします。
                    </p>
                    <div class="themeButton">
                        <a href="<?php bloginfo('url'); ?>/products">プロダクト一覧</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of products -->

<!-- case -->
<section class="themeCase paddingSection">
    <div class="cntr">
        <div class="themeTitle">
            <h3>CASE</h3>
            <p>事例一覧</p>
        </div>
        <div class="themeCaseListWrap">
            <ul class="themeCaseList">
                <?php
                if ( get_query_var('paged') ) { $paged = get_query_var('paged'); } else if ( get_query_var('page') ) {$paged = get_query_var('page'); } else {$paged = 1; }
                $temp = $wp_query;
                $wp_query = null;
                $args = array( 'post_type' => 'products', 'order'=>'DESC', 'posts_per_page' => 10, 'paged' => $paged);
                $wp_query = new WP_Query();
                $wp_query->query( $args );
                while ($wp_query->have_posts()) : $wp_query->the_post();
                    ?>
                    <li class="themeCaseListItem">
                        <a href="<?php the_permalink(); ?>" class="themeCaseListCard">
                            <div class="themeCaseListImg">
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
                            <div class="themeCaseListContent">
                                <span class="themeCaseTagLine">
                                    <?php
                                        $terms = get_the_terms( $post->ID , 'products-category' );
                                        if(is_array($terms) || is_object($terms)){
                                            foreach ( $terms as $term ) {
                                            echo $term->name;
                                            }
                                        }
                                    ?> 
                                </span>
                                <p><?php the_title(); ?></p>
                            </div>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
</section>
<!-- end of case -->

<!-- recruit -->
<section class="themeRecruit paddingSection">
    <div class="cntr">
        <div class="themeRow">
            <div class="themeCol">
                <div class="themeTitle">
                    <h3>RECRUIT</h3>
                    <p>採用</p>
                </div>
                <div class="themeCompanyContent">
                    <div class="themeCompanyImg vSp">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recimg01.png" alt="Fuji Games">
                    </div>
                    <p>
                        ここにテキストが入ります。ここにテキストが入ります。こ <br class="vPc">
                        こにテキストが入ります。ここにテキストが入ります。
                    </p>
                    <div class="themeButton">
                        <a href="#">
                            採用サイト
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13.5 10.5L21 3M21 3H16M21 3V8M21 14V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H10" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg></a>
                    </div>
                </div>
            </div>
            <div class="themeCol vPc">
                <div class="themeCompanyImg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recimg01.png" alt="Fuji Games">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of recruit -->

<!-- news -->
<section class="themeNews paddingSection">
    <div class="cntr">
        <div class="themeTitle textCenter">
            <h3>NEWS</h3>
            <p>ニュース</p>
        </div>
        <div class="themeNewsWrap">
            <ul class="themeNewsList">
                <?php
                $custom_query = new WP_Query(array(
                    'post_type' => 'post', 
                    'order'=>'DESC',
                    'posts_per_page' => 3, 
                ));
                if ($custom_query->have_posts()) : 
                    while ($custom_query->have_posts()) : $custom_query->the_post();
                    $categories = get_the_category();
                        ?>
                        <li class="themeNewsListItem">
                            <a href="<?php the_permalink(); ?>" class="themeNewsListCard">
                                <span class="themeNewsListDate"><?php echo get_the_date('Y/m/d'); ?></span>
                                <span class="themeNewsListCategory">
                                    <?php
                                        if (!empty($categories)) {
                                            foreach ($categories as $category) {
                                                echo esc_html($category->name);
                                            }
                                        }
                                    ?>
                                </span>
                                <p><?php the_title(); ?></p>
                            </a>
                        </li>
                        <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </ul>
        </div>
        <div class="themeButton">
            <a href="<?php bloginfo('url'); ?>/news">ニュース一覧</a>
        </div>
    </div>
</section>
<!-- end of news -->

<?php
get_footer();