<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
                <a href="/" class="themeBreadcrumbsLink">ホーム</a>
            </li>
            <li class="themeBreadcrumbsItem">
                <a href="<?php bloginfo('url'); ?>/products" class="themeBreadcrumbsLink">プロダクト</a>
            </li>
            <li class="themeBreadcrumbsItem">
                <a href="#" class="themeBreadcrumbsLink"><?php the_title(); ?></a>
            </li>
        </ul>
    </div>
</section>
<!-- end of breadcrumbs -->

<!-- page banner -->
<section class="themePageBanner themePageBannerWhite">
    <div class="cntr">
        <div class="themePageBannerWrap">
            <p>ゲーム開発</p>
            <h2>
                <?php
                    $terms = get_the_terms( $post->ID , 'products-category' );
                    if(is_array($terms) || is_object($terms)){
                        foreach ( $terms as $term ) {
                        echo $term->name;
                        }
                    }
                ?>
            </h2>
        </div>
    </div>
</section>
<!-- end of page banner -->

<!-- products details -->
<section class="themeProductDetails themePagePadding">
    <div class="cntr">
        <div class="themeProductsDetailsTitle">
            <h3><?php the_title(); ?></h3>
        </div>
        <div class="themeProductsDetailsSlider">
            <ul class="themeProductsDetailsList">
                <li>
                    <div class="themeProductsDetailsListImg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider01.jpg" alt="Fuji Games">
                    </div>
                </li>
                <li>
                    <div class="themeProductsDetailsListImg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider02.png" alt="Fuji Games">
                    </div>
                </li>
                <li>
                    <div class="themeProductsDetailsListImg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider03.png" alt="Fuji Games">
                    </div>
                </li>
            </ul>
        </div>
        <div class="themeProductsDetailsContent">
            <h3>作品詳細</h3>
            <p>
            「ゲゲゲの鬼太郎 妖怪横丁」は、ゲゲゲの森に迷い込んだプレイヤーが、妖怪たちと協力して悪い妖怪を退治しなが 
            ら、妖怪横丁を発展させ、かわいい妖怪がたくさんあつまる楽園を目指す、育成ソーシャルゲームです。 鬼太郎やねこ
            娘、砂かけ婆たちと一緒にあなただけの妖怪横丁を作り上げていきましょう！
            </p>
            <h3>アプリダウンロード</h3>
            <div class="themeProductsDetailsPhone">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/apple.png" alt="Fuji Games">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/google.png" alt="Fuji Games">
            </div>
            <h3>公式サイト</h3>
            <div class="themeButton">
                <a href="#">公式サイトを見る</a>
            </div>
        </div>
        <div class="themeCompanyPageCol">
            <div class="themeCompanyPageTitle">
                <p>ゲーム概要</p> <br>
                <h3>Overview</h3>
            </div>
            <ul class="themeCompanyPageList">
                <li class="themeCompanyPageListItem">
                    <div class="themeCompanyPageListLeft">
                        <p>タイトル</p>
                    </div>
                    <div class="themeCompanyPageListRight">
                        <p>ゲゲゲの鬼太郎 妖怪横丁</p>
                    </div>
                </li>
                <li class="themeCompanyPageListItem">
                    <div class="themeCompanyPageListLeft">
                        <p>利用料</p>
                    </div>
                    <div class="themeCompanyPageListRight">
                        <p>基本プレイ無料（一部アイテム課金）</p>
                    </div>
                </li>
                <li class="themeCompanyPageListItem">
                    <div class="themeCompanyPageListLeft">
                        <p>権利表記</p>
                    </div>
                    <div class="themeCompanyPageListRight">
                        <p>（C）水木プロ /フジゲームス</p>
                    </div>
                </li>
                <li class="themeCompanyPageListItem">
                    <div class="themeCompanyPageListLeft">
                        <p>提供開始日</p>
                    </div>
                    <div class="themeCompanyPageListRight">
                        <p>
                        Yahoo!モバゲー：2013年9月9日 <br>
                        フジテレビ★プラネッツ：2016年5月18日 <br>
                        ゲソてん：2017年7月20日 <br>
                        mixiゲーム：2017年8月9日 <br>
                        ハンゲ：2017年8月22日 <br>
                        ゲソてんSP版：2019年12月11日 <br>
                        mixiSP版：2019年12月22日 <br>
                        mobage：2020年1月9日 <br>
                        GooglePlay：2021年11月16日 <br>
                        Appstore：2021年11月16日 <br>
                        TSUTAYA オンラインゲーム（PC版/SP版）：2022年3月10日 <br>
                        フジテレビ★プラネッツSP版：2022年4月12日 <br>
                        ヤマダゲーム（PC版/SP版）：2023年8月17日
                        </p>
                    </div>
                </li>
                <li class="themeCompanyPageListItem">
                    <div class="themeCompanyPageListLeft">
                        <p>関連サイト</p>
                    </div>
                    <div class="themeCompanyPageListRight">
                        <p>
                            水木プロ公式オンラインショップ「妖怪本舗」 <br>
                            フジテレビショップ「フジさん」レイクタウン店
                        </p>
                    </div>
                </li>
            </ul>
            <div class="themeNewsPageBack">
                <a href="<?php bloginfo('url'); ?>/products">
                    <span>一覧へ戻る</span>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- end of products details -->

<?php get_footer(); ?>