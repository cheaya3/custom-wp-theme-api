<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width"/>
    <?php wp_head(); ?> <!--自分のcss優先させたい時-->
    <?php
    //本当は普通にCSSを読み込むべきだが、読み込み速度を考慮してfile_get_contentsを使用
    $css = file_get_contents(get_template_directory() . '/assets/css/original.css');
    $css2 = file_get_contents(get_site_url().'/wp-includes/css/dist/block-library/style.min.css');
    $css3 = file_get_contents(get_template_directory() . '/assets/css/style2.css');
    print "<style>" . $css . $css2 .$css3. "</style>";
    ?>
    <title>Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/navigation.js" defer></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js" defer></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js" defer></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vue-recommend.js" defer></script>

</head>
<body>
<header>
    <div class="container">
        <div class="logo">
            <a href="<?php get_template_part('inc/components/card-img'); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.svg">
            </a>
        </div>
    </div>
</header>
<header>
    <div class="container">
        <div class="logo"><a href="<?php echo home_url(); ?>"><h1>LOGO<br>SPACE</h1></a></div>
        <nav id="global" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
            <div class="sns">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.svg" alt="ロゴ">
            </div>
            <?php
            class Local_Nav_Walker extends Walker_Nav_Menu {
                function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
                    $title_ja = $item->title;
                    $title_en = $item->attr_title; 
                    $output .= '<li>';
                    $output .= '<a href="' . esc_url($item->url) . '">';
                    $output .= '<span itemprop="name">' . esc_html($title_ja) . '</span>' . esc_html($title_en);
                    $output .= '</a>';
                    $output .= '</li>';
                }
            }

            wp_nav_menu(array(
                'theme_location' => 'global_nav',
                'container'      => false,
                'items_wrap'     => '<ul>%3$s</ul>',
                'walker'         => new Local_Nav_Walker(), 
            ));
            ?>
        </nav>
    </div>
</header>