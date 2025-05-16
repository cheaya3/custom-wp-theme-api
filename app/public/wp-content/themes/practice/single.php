
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
                            <dt>開催日時(毎週):</dt>
                            <dd>
                                <?php 
                                    $effects = get_field('day'); 

                                    if (is_array($effects)) {
                                        foreach ($effects as $effect) {
                                            echo '・' . $effect . '<br>';
                                        }
                                    }
                                ?>
                            </dd>
                            <dt>対象者:</dt>
                            <dd><?php echo get_field('target'); ?></dd>
                            <dt>所要時間:</dt>
                            <dd><?php echo get_field('duration'); ?>分</dd>
                            <dt>価格:</dt>
                            <dd><?php echo get_field('price'); ?>円</dd>
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
<aside></aside>
<?php get_footer(); ?>
