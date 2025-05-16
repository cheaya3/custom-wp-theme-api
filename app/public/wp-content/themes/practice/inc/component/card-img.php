<div class="wrapper">
         <?php
        $passed_post_type = isset($post_type) ? $post_type : '';
        $posts_count = isset($posts_per_page) ? $posts_per_page : 3;

        $args = array(
            'post_type' => $passed_post_type,
            'posts_per_page' => $posts_count,
            'orderby' => 'date',
            'order' => 'DESC',
        );

        if (is_category()) {
            $current_category = get_queried_object();
            
            if ($current_category && !is_wp_error($current_category)) {
                $taxonomies = get_object_taxonomies($passed_post_type);
                
                if (in_array('category', $taxonomies)) {
                    $args['tax_query'] = array(
                        array(
                            'taxonomy' => 'category',
                            'field'    => 'slug',
                            'terms'    => $current_category->slug,
                        ),
                    );
                }
            }
        }

        $the_query = new WP_Query($args);

        if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();

                $current_post_type = get_post_type();

                $is_shop = ($current_post_type === 'shop');
                $is_menu = ($current_post_type === 'menu');

        ?>
        <div class="card"> 
            <div class="thumb">
                <img src="<?php echo get_field('menu-image'); ?>">
                <?php if ($is_shop) : ?>
                    <div class="label">
                        <span><?php echo get_field('label1'); ?></span>
                        <span><?php echo get_field('label2'); ?></span>  
                    </div>
                <?php endif; ?>
            </div>
            <div class="description">
                <h4>
                    <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                    <?php if ($is_shop) : ?>
                    <br>￥<?php echo get_field('price'); ?>( 税込 )
                    <?php endif; ?>
                </h4>
                <?php if ($is_shop) : ?>
                <p><?php echo nl2br(get_field('overview')); ?></p>   
                <?php endif; ?>
                <?php if ($is_menu) : ?>
                <dl>
                    <dt>対象者</dt>
                    <dd><?php echo get_field('target'); ?></dd>
                </dl>
                <dl>
                    <dt>効果</dt>
                    <dd>
                    <?php 
                                $effects = get_field('effect'); 

                                if (is_array($effects)) {
                                    foreach ($effects as $effect) {
                                        echo $effect . '<br>';
                                    }
                                }
                    ?>
                    </dd>
                </dl>
                <dl>
                    <dt>所要時間</dt>
                    <dd><?php echo get_field('duration'); ?></dd>
                </dl>
                <dl>
                    <dt>価格</dt>
                    <dd><?php echo get_field('price'); ?></dd>
                </dl>
                <p><a href="<?php the_permalink(); ?>">詳しく見る</a></p>
                <?php endif; ?>
                <?php if ($is_shop) : ?>
                <p><a href="#">カートに入れる</a></p>
                <?php endif; ?>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; wp_reset_postdata(); ?>
</div>