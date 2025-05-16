<?php get_header(); ?>
<main>
    <article>
        <section class="main">
            <div class="container">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="thumb swiper-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/main-v.png"></div>
                        <div class="thumb swiper-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/running.png"></div>
                        <div class="thumb swiper-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/workout-w.png"></div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-scrollbar"></div>
                </div>
                <h1>MAIN IMAGES<br>
                    SLIDER SPACE</h1>
            </div>
        </section>
        <section class="e-contents ng-margin">
            <div class="container">
                <h3>電子コンテンツ<span>DEGITAL CONTENTS</span></h3>
                <p>電子コンテンツについての説明やサービスコンセプトが入ります。電子コンテンツについての説明やサービスコンセプトが入ります。電子コンテンツについての説明やサービスコンセプトが入ります。電子コンテンツについての説明やサービスコンセプトが入ります。電子コンテンツについての説明やサービスコンセプトが入ります。電子コンテンツについての説明やサービスコンセプトが入ります。電子コンテンツについての説明やサービスコンセプトが
                </p>
                <?php 
                $post_type = 'e-contents';
                $posts_per_page = -1;
                include(get_template_directory() . "/inc/component/card-txt.php"); 
                ?>
            </div>
        </section>
    </article>
</main>
<?php get_footer(); ?>