<?php get_header(); ?>
<?php
$args = [
    'category_name' => '',
    'numberposts' => -1,
];
?>

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
        <section class="shop ng-margin">
            <div class="container">
                <h3><?php single_cat_title(); ?>の記事一覧</h3>
                <div class="my-icons">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mypage.svg" alt="mypage">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mycart.svg" alt="ロゴ">
                </div>
                <div class="category-labels">
                <?php
                $terms = get_terms(array(
                    'taxonomy'   => 'category', 
                    'hide_empty' => true,  
                    'object_ids' => get_posts(array(
                    'post_type' => 'shop',
                    'numberposts' => -1,
                    'fields' => 'ids',
                ))
            ));

                if (!empty($terms) && !is_wp_error($terms)) :
                    foreach ($terms as $term) :
                        $term_link = get_term_link($term); 
                        if (!is_wp_error($term_link)) :
                ?>
                    <span><a href="<?php echo esc_url($term_link); ?>"><?php echo esc_html($term->name); ?></a></span>
                <?php
                endif;
                endforeach;
                endif;
                ?>
                </div>
                <?php 
                $post_type = isset($_GET['post_type']) ? sanitize_text_field($_GET['post_type']) : 'post';
                $posts_per_page = -1;
                include(get_template_directory() . "/inc/component/card-img.php"); 
                ?>
            </div>
        </section>
    </article>
</main>
<?php get_footer(); ?>