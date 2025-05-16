
<?php
get_header();
?>
<main role="main">

    <article>
        <!--// TODO アイキャッチの表示切り替え機能を入れる-->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <section class="content">
                <h1><?php the_title();?><span><?php echo get_field('e-title'); ?></span></h1>
                <div class="date"><?php the_date();?></div>
                <?php
                the_content();
                ?>
            </section>

        <?php if (comments_open() && !post_password_required()) :?>
            <section class="comment">
                <?php comments_template('', true); ?>
            </section>
        <?php endif; endwhile; endif; ?>
            <section class="v-card">
                    <img src="<?php echo get_field('menu-image'); ?>">
                    <div class="container">
                        <p><?php echo nl2br(get_field('overview')); ?></p>
                        <dl>
                            <dt>開催日:</dt>
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
                            </dd>
                            <dt>開催場所:</dt>
                            <dd><?php echo get_field('site'); ?></dd>
                            <dt>価格:</dt>
                            <dd><?php echo get_field('price'); ?>円</dd>
                            <dt>対象者:</dt>
                            <dd><?php echo get_field('target'); ?></dd>
                            </dd>
                            <dt>所要時間:</dt>
                            <dd><?php echo get_field('duration'); ?></dd>
                            <dt>必要持ち物:</dd>
                            <dd>
                            <?php 
                                $items = get_field('items'); 

                                if (is_array($items)) {
                                    foreach ($items as $item) {
                                        echo '・' . $item . '<br>';
                                    }
                                }
                                ?>
                            </dd>
                            <dt>効果:</dt>
                            <dd>
                                <?php 
                                $effects = get_field('effect'); 

                                if (is_array($effects)) {
                                    foreach ($effects as $effect) {
                                        echo '・' . $effect . '<br>';
                                    }
                                }
                                ?>
                            </dd>
                        </dl>
                    </div>
            </section>        
    </article>
</main>
<aside>
    <div id="recommended-magazines" data-event-id="<?php echo get_the_ID(); ?>"></div>  
</aside>
<?php get_footer(); ?>
