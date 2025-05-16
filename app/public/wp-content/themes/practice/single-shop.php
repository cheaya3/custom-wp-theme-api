
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
                            <dt>対象者:</dt>
                            <dd><?php echo get_field('target'); ?></dd>
                            <dt>価格:</dt>
                            <dd><?php echo get_field('price'); ?>円</dd>
                            </dd>
                            <dt>配送費用</dt>
                            <dd><?php echo get_field('label1'); ?></dd>
                            <dt>在庫状況:</dt>
                            <dd><?php echo get_field('label2'); ?></dd>

                        </dl>
                    </div>
            </section>        
    </article>
</main>
<aside></aside>
<?php get_footer(); ?>
