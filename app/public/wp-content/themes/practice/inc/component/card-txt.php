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

    $the_query = new WP_Query($args);

    if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();

            $current_post_type = get_post_type();

            $is_event = ($current_post_type === 'event');
            $is_eContents = ($current_post_type === 'e-contents');

    ?>
    <a href="<?php the_permalink(); ?>">
    <div class="card">
        <div class="thumb"><img src="<?php echo get_field('menu-image'); ?>"></div>
        <div class="description">
            <h4><?php the_title();?></h4>
            <div class="information">
                <dl>
                    <?php if ($is_event) : ?>
                    <dt>開催日</dt>
                    <dd>
                    <?php
                    $datetime = get_field('date');

                    if ($datetime) {
                        $date = new DateTime($datetime);
                        $weekdays = ['日', '月', '火', '水', '木', '金', '土'];
                        $weekday = $weekdays[$date->format('w')];

                        echo $date->format("Y/n/j") . "（{$weekday}）" . $date->format("H:i") . "～";
                    }
                    ?>
                    <?php endif; ?>
                    <?php if ($is_eContents) : ?>
                    <dt>タイプ:</dt>
                    <dd><?php echo get_field('type'); ?></dd>
                    <?php endif; ?>
                </dl>
                <dl>
                    <?php if ($is_event) : ?>
                    <dt>場所</dt>
                    <dd><?php echo get_field('site'); ?></dd>
                    <?php endif; ?>
                    <?php if ($is_eContents) : ?>
                    <dt>発刊開始:</dt>
                    <dd>
                    <?php
                    $date_str = get_field('p-date'); 

                    if ($date_str) {
                        $date = new DateTime($date_str);
                        echo $date->format('Y/n/j');
                    }
                    ?>
                    </dd>
                    <?php endif; ?>
                </dl>
                <?php if ($is_eContents) : ?>
                <dl>
                <dt>読者数:</dt>
                <dd><?php echo get_field('readership'); ?>人</dd>  
                </dl>
                <?php endif; ?>
            </div>
            <p><?php echo get_field('overview'); ?></p>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; wp_reset_postdata(); ?>
    </a>
</div>

