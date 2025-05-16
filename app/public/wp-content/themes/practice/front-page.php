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
        <section class="concept">
            <div class="container">
                <div class="wrapper">
                    <div class="card">
                        <div class="thumb"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/person.png"></div>
                        <div class="description">
                            <h2>PROFILE</h2>
                            <h3>山本 華子<span>HANAKO Yamamoto</span></h3>
                            <p>情に棹させば流される。智に働けば角が立つ。どこへ越しても住みにくいと悟った時、詩が生れて、画が出来る。とかくに人の世は住みにくい。意地を通せば窮屈だ。とかくに人の世は住みにくい。どこへ越しても住みにくいと悟った時、詩が生れて、画が出来る。意地を通せば窮屈だ。山</p>
                            <p><a href="#">もっと見る</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="menu">
            <div class="container">
                <h3>メニューとご予約<span>MENU & RESERVATION</span></h3>
                <p>メニューと予約についての説明やサービスコンセプトが入ります。メニューと予約についての説明やサービスコンセプトが入ります。メニューと予約についての説明やサービスコンセプトが入ります。メニューと予約についての説明やサービスコンセプトが入ります。メニューと予約についての説明やサー ビスコンセプトが入ります。メニューと予約についての説明やサービスコンセプトが入ります。メニューと予約についての説明やサービスコンセプトが</p>
                <?php 
                $post_type = 'menu';
                $posts_per_page = 3;
                include(get_template_directory() . "/inc/component/card-img.php"); 
                ?>
                <p><a href="<?php echo get_post_type_archive_link('menu'); ?>">すべてのメニューを見る</a></p>
            </div>
        </section>
        <section class="event bg">
            <div class="container">
                <h3>イベント・レッスン<span>EVENTS & LESSON</span></h3>
                <p>・イベントとレッスンについての説明やサービスコンセプトが入ります。・イベントとレッスンについての説明やサービスコンセプトが入ります。・イベントとレッスンについての説明やサービスコンセプトが入ります。・イベントとレッスンについての説明やサービスコンセプトが入ります。・イベントとレッスンについての説明やサービスコンセプトが入ります。・イベントとレッスンについての説明やサービスコンセプトが入ります。・イベントとレッ</p>]
                <?php 
                $post_type = 'event';
                $posts_per_page = 3;
                include(get_template_directory() . "/inc/component/card-txt.php"); 
                ?>
                <p><a href="<?php echo get_post_type_archive_link('event'); ?>">すべてのイベントを見る</a></p>
            </div>
        </section>
        <section class="e-contents">
            <div class="container">
                <h3>電子コンテンツ<span>DEGITAL CONTENTS</span></h3>
                <p>電子コンテンツについての説明やサービスコンセプトが入ります。電子コンテンツについての説明やサービスコンセプトが入ります。電子コンテンツについての説明やサービスコンセプトが入ります。電子コンテンツについての説明やサービスコンセプトが入ります。電子コンテンツについての説明やサービスコンセプトが入ります。電子コンテンツについての説明やサービスコンセプトが入ります。電子コンテンツについての説明やサービスコンセプトが</p>
                <?php 
                $post_type = 'e-contents';
                $posts_per_page = 3;
                include(get_template_directory() . "/inc/component/card-txt.php"); 
                ?>
                <p><a href="<?php echo get_post_type_archive_link('e-contents'); ?>">すべてのイベントを見る</a></p>
            </div>
        </section>
        <section class="shop bg">
            <div class="container">
                <h3>ショップ<span>EC STORE</span></h3>
                <?php 
                $post_type = 'shop';
                $posts_per_page = 3;
                include(get_template_directory() . "/inc/component/card-img.php"); 
                ?>
                <p><a href="<?php echo get_post_type_archive_link('shop'); ?>">すべての商品を見る</a></p>
            </div>
        </section>
    </article>
</main>
<?php get_footer(); ?>
<?php //include(get_template_directory()."/inc/component/card-img.php");?>


