<?php

//get_sidebar();

?>
</div>
<footer role="contentinfo">
    <div class="container">
        <div id="copyright">
            &copy; <?php echo esc_html(date_i18n(__('Y', 'blankslate'))); ?> <?php echo esc_html(get_bloginfo('name')); ?>
        </div>
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'footer_nav',
                    'link_before' => '<span itemprop="name">',
                    'link_after' => '</span>'
                ));
        ?>
        </nav>
    </div>
</footer>
</body>
</html>
