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
        <section class="menu ng-margin">
            <div class="container">
                <h3>メニューとご予約<span>MENU & RESERVATION</span></h3>
                <p>メニューと予約についての説明やサービスコンセプトが入ります。メニューと予約についての説明やサービスコンセプトが入ります。メニューと予約についての説明やサービスコンセプトが入ります。メニューと予約についての説明やサービスコンセプトが入ります。メニューと予約についての説明やサー ビスコンセプトが入ります。メニューと予約についての説明やサービスコンセプトが入ります。メニューと予約についての説明やサービスコンセプトが</p>
                <?php 
                $post_type = 'menu';
                $posts_per_page = -1;
                include(get_template_directory() . "/inc/component/card-img.php"); 
                ?>
            </div>
        </section>
    </article>
</main>
<?php get_footer(); ?>